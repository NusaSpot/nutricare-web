@extends('layouts.main')

@section('title', 'Aktivitas Ahli Gizi')

@push('style')
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-20">
                <h5>Detail Aktivitas</h5>
            </div>
            <div class="col-xl-12">
                <div class="card-box d-block mx-auto pd-20 mb-20">
                    <p>Judul : {{ $activity->title }}</p>
                    <p>Tanggal : {{ $activity->date }}</p>
                    <p>Bukti Screenshoot :</p>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $activity->proof1Link }}" alt="Proof 1">
                        </div>
                        @if($activity->proof_2)
                            <div class="col-md-4">
                                <img src="{{ $activity->proof2Link }}" alt="Proof 2">
                            </div>
                        @endif
                        @if($activity->proof_3)
                            <div class="col-md-4">
                                <img src="{{ $activity->proof3Link }}" alt="Proof 3">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
