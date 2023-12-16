@extends('layouts.main')

@section('title', 'Aktivitas Ahli Gizi')

@push('style')
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-20">
                <h5>Data Aktivitas Anda <button class="btn btn-success btn-sm btn-rounded" data-toggle="modal"
                        data-target="#addActivity"><i class="fa fa-plus"></i></button></h5>
            </div>
            <div class="col-xl-12">
                <div class="card-box d-block mx-auto pd-20 px-0 mb-20">
                    <div class="table-responsive">
                        <table class="data-table table hover nowrap">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->title }}</td>
                                        <td>{{ $activity->date }}</td>
                                        <td>
                                            <a href="{{ route('activity.detail', $activity->id) }}" class="btn btn-warning btn-rounded"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('activity.delete', $activity->id) }}" class="btn btn-danger btn-rounded" onclick="return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addActivity" tabindex="-1" role="dialog" aria-labelledby="addActivityLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="{{ route('activity.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addActivityLabel">Add Activity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="proof_1">Bukti Screenshoot 1</label>
                            <input type="file" name="proof_1" class="form-control" accept="image/*" required>
                        </div>
                        <div class="form-group">
                            <label for="proof_1">Bukti Screenshoot 2</label>
                            <input type="file" name="proof_2" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="proof_1">Bukti Screenshoot 3</label>
                            <input type="file" name="proof_3" class="form-control" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('script')
@endpush
