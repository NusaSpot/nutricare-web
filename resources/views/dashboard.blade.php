@extends('layouts.main')

@section('title', 'Dashboard')

@push('style')
<style>
    .img.pb-30 img {
        height: 70px;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card-box widget-style1">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="progress-data">
                        <span class="user-icon shadow-none mb-0">
                            <img src="{{ asset('main/src/images/illustrations/male.svg')}}" alt="">
                        </span>
                    </div>
                    <div class="widget-data">
                        <div class="weight-600 font-14">Selamat Datang,</div>
                        <div class="h4 mb-0">{{ auth()->user()->name }}!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(auth()->user()->is_eligible == 'approved')
        <div class="alert alert-success" role="alert">
            Selamat! Anda sudah diterima untuk bergabung bersama kami, selanjutnya anda akan menerima beberapa pesan via <b>WhatsApp</b> dari pengguna kami yang ingin berkonsultasi dengan anda. Anda dapat melakukan pengisian form setiap ada pengguna kami yang berkonsultasi dengan anda lewat menu <b>Aktivitas Ahli Gizi !.</b>
        </div>
    @endif

    @if(auth()->user()->is_eligible == 'pending')
        <div class="alert alert-primary" role="alert">
            Profil anda sudah lengkap, saatnya menunggu konfirmasi dari admin kami, akan kami kirimkan via email untuk hasilnya. Jika Anda diterima Anda akan dapat mengakses fitur <b>Aktivitas Ahli Gizi.</b>
        </div>
    @endif

    @if(auth()->user()->is_eligible == 'rejected')
        <div class="alert alert-danger" role="alert">
            <b>Profil anda ditolak, asalannya sebagai berikut</b> : {{ auth()->user()->remark }}.
        </div>
    @endif

    <div class="row">
        <div class="col-md-12 mb-20 mt-2">
            <h5>Menu dan Fitur</h5>
        </div>
        <div class="col-md-4 mb-20">
            <a href="{{ route('activity.index') }}" class="card-box d-block mx-auto pd-20 text-secondary">
                <div class="img pb-30">
                    <img src="main/src/images/illustrations/task.svg" alt="">
                </div>
                <div class="content">
                    <h3 class="h4">Aktivitas Ahli Gizi</h3>
                    <p class="max-width-200 ">Penginputan report dalam memberikan konsultasi.</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection