FROM php:8.1-fpm-alpine

RUN apk --update --no-cache add \
    nginx \
    wget \
    libzip-dev \
    unzip \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    bcmath-dev \
    libbz2 \
    calendar \
    coreutils \
    libxml2-dev \
    curl \
    date \
    libdbi-dev \
    libmcrypt-dev \
    exif \
    ffi-dev \
    file \
    gettext-dev \
    gmp-dev \
    icu-dev \
    json \
    openldap-dev \
    libxml2-dev \
    mbstring \
    libedit-dev \
    libedit \
    gd \
    gettext \
    gmp \
    hash \
    iconv \
    icu-libs \
    json \
    openldap \
    libxml2 \
    libxml2-dev \
    mbstring \
    mysqli \
    mysqlnd \
    unixodbc-dev \
    openssl-dev \
    pcntl \
    pcre \
    pdo \
    freetds-dev \
    pdo_mysql \
    pdo_odbc \
    pdo_pgsql \
    pdo_sqlite \
    postgresql-dev \
    sqlite \
    sqlite-dev \
    pspell-dev \
    readline-dev \
    redis \
    oniguruma-dev \
    libressl-dev \
    libssh2-dev \
    libxslt-dev \
    gettext \
    sysvmsg \
    sysvsem \
    sysvshm \
    tidyhtml-libs \
    libzip \
    libxml2-dev \
    autoconf \
    build-base \
    tidyhtml-dev \
    libxslt-dev \
    libedit \
    libxml2 \
    libxslt \
    freetype \
    libjpeg-turbo \
    libpng \
    gnu-libiconv \
    libxslt-dev \
    zlib \
    zlib-dev

# Install additional PHP extensions
RUN docker-php-ext-install \
    bcmath \
    bz2 \
    calendar \
    exif \
    ffi \
    fileinfo \
    ftp \
    gettext \
    gmp \
    ldap \
    mbstring \
    mysqli \
    odbc \
    pcntl \
    pdo \
    pdo_dblib \
    pdo_mysql \
    pdo_odbc \
    pdo_pgsql \
    pdo_sqlite \
    pgsql \
    pspell \
    readline \
    redis \
    shmop \
    simplexml \
    soap \
    sockets \
    sodium \
    sqlite3 \
    sysvmsg \
    sysvsem \
    sysvshm \
    tidy \
    tokenizer \
    xml \
    xmlreader \
    xmlwriter \
    xsl \
    zip


# Install nginx and other dependencies
RUN apk add --no-cache nginx wget

# Create nginx runtime directory
RUN mkdir -p /run/nginx

# Copy nginx configuration
COPY nginx.conf /etc/nginx/nginx.conf

# Create the application directory
RUN mkdir -p /app

# Copy the Laravel application files to the container
COPY . /app

# Download and install Composer
RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"

# Install PHP dependencies
RUN cd /app && /usr/local/bin/composer install --no-dev

# Set ownership of the application files
RUN chown -R www-data: /app

# Copy the startup script into the container
COPY startup.sh /app/startup.sh

# Grant execution permissions to the startup script
RUN chmod +x /app/startup.sh

# Expose the port
EXPOSE 9000

# Set the working directory
WORKDIR /app

# Set the environment variable for PHP
ENV PORT=9000

# Update the nginx configuration with the correct port
CMD sed -i "s,LISTEN_PORT,$PORT,g" /etc/nginx/nginx.conf && /app/startup.sh
