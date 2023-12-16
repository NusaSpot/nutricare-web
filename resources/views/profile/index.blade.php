@extends('layouts.main')

@section('title', 'Profil')

@push('style')
<style>
    .img.pb-30 img {
        height: 70px;
    }
</style>
@endpush

@section('content')
<div class="container">
    @if(!auth()->user()->nutritionistProfile)
        <div class="alert alert-warning" role="alert">
            Mohon lengkapi profil anda terlebih dahulu sebelum melanjutkan !
        </div>
    @endif
    <div class="row">
        <div class="col-xl-4 mb-30">
            <div class="card-box widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <span class="user-icon shadow-none mb-0">
                            <img src="{{ auth()->user()->nutritionistProfile ? auth()->user()->nutritionistProfile->profilePictureLink : asset('main/src/images/illustrations/male.svg') }}" alt="">
                        </span>
                    </div>
                    <div class="widget-data">
                        <div class="h4 mb-0">{{ auth()->user()->name }}</div>
                        <div class="weight-600 font-14">Ahli Gizi</div>
                    </div>
                </div>
                <div class="mt-4">
                    <button class="btn btn-sm btn-block btn-light" data-toggle="modal" data-target="#updatePassword"><i class="dw dw-key2 mr-2"></i> Perbarui Password</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8 mb-30">
            <div class="card-box d-block mx-auto pd-20">
                <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control h-auto py-2 @error('name') is-invalid @enderror" value="{{ old('name', auth()->user()->name) }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="profile_picture">Foto Profil</label>
                        <input type="file" name="profile_picture" class="form-control h-auto py-2 @error('profile_picture') is-invalid @enderror" accept="image/*">
                        @error('profile_picture')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-control h-auto py-2 @error('gender') is-invalid @enderror" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="male" {{ old('gender', optional(auth()->user()->nutritionistProfile)->gender) == 'male' ? 'selected' : '' }}>Laki - laki</option>
                            <option value="female" {{ old('gender', optional(auth()->user()->nutritionistProfile)->gender) == 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('gender')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="date_of_birth">Tanggal Lahir</label>
                        <input type="date" name="date_of_birth" class="form-control h-auto py-2 @error('date_of_birth') is-invalid @enderror" value="{{ old('date_of_birth', optional(auth()->user()->nutritionistProfile)->date_of_birth) }}" required>
                        @error('date_of_birth')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Nomor Whatsapp (masukkan contoh : 628121432121)</label>
                        <input type="text" name="phone" class="form-control h-auto py-2 @error('phone') is-invalid @enderror" placeholder="Contoh 628121432131" value="{{ old('phone', optional(auth()->user()->nutritionistProfile)->phone) }}" required>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="nik" class="form-control h-auto py-2 @error('nik') is-invalid @enderror" value="{{ old('nik', optional(auth()->user()->nutritionistProfile)->nik) }}" required>
                        @error('nik')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="work_experience">Pengalaman Kerja (Tahun)</label>
                        <input type="number" name="work_experience" class="form-control h-auto py-2 @error('work_experience') is-invalid @enderror" placeholder="Contoh : 2" value="{{ old('work_experience', optional(auth()->user()->nutritionistProfile)->work_experience) }}" required>
                        @error('work_experience')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="education">Pendidikan Terakhir</label>
                        <select name="education" id="education" class="form-control h-auto py-2 @error('education') is-invalid @enderror" required>
                            <option value="" disabled selected>Pilih Pendidikan Terakhir</option>
                            <option value="sma" {{ old('education', optional(auth()->user()->nutritionistProfile)->education) == 'sma' ? 'selected' : '' }}>SMA / SMK</option>
                            <option value="s1" {{ old('education', optional(auth()->user()->nutritionistProfile)->education) == 's1' ? 'selected' : '' }}>Sarjana (S1)</option>
                            <option value="d3" {{ old('education', optional(auth()->user()->nutritionistProfile)->education) == 'd3' ? 'selected' : '' }}>Diploma (D3)</option>
                            <option value="s2" {{ old('education', optional(auth()->user()->nutritionistProfile)->education) == 's2' ? 'selected' : '' }}>Magister (S2)</option>
                            <option value="s3" {{ old('education', optional(auth()->user()->nutritionistProfile)->education) == 's3' ? 'selected' : '' }}>Doktor (S3)</option>
                        </select>
                        @error('education')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="work_place">Tempat Bekerja Saat Ini</label>
                        <input type="text" name="work_place" class="form-control h-auto py-2 @error('work_place') is-invalid @enderror" value="{{ old('work_place', optional(auth()->user()->nutritionistProfile)->work_place) }}" required>
                        @error('work_place')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cv">CV</label>
                        @if(auth()->user()->nutritionistProfile)
                            <p>Download CV Terakhir : <a href="{{ auth()->user()->nutritionistProfile->cvLink }}" target="_blank">Download</a></p>
                        @endif
                        <input type="file" name="cv" class="form-control h-auto py-2 @error('cv') is-invalid @enderror" accept=".pdf">
                        @error('cv')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <form action="{{ route('profile.change-password') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header border-0">
                    <h5 class="modal-title">Perbarui Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="password">Password baru</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" min="6" required placeholder="Masukan password">
                        @error('password')
                            <div class="invalid-feedback" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" min="6" required placeholder="Konfirmasi password">
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-transparent rounded-pill" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success rounded-pill">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('script')

@if(session()->has('update_password_error'))
<script>
    $('#updatePassword').modal('show');
</script>
@endif

@endpush