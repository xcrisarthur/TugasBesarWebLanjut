@extends('admin.layout.main')

@section('title', 'Administrator Perwalian - Report')

@push('css')
@endpush

@push('headscript')
@endpush

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Report</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-4 col-5 text-center">
            <h5 class="mb-3">Mahasiswa Sudah Perwalian</h5>
            <div class="border border-primary p-4 text-center rounded shadow">
                <h3 class="font-weight-bold mb-0">{{$a}}</h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-5 text-center">
            <h5 class="mb-3">Mahasiswa Belum Perwalian</h5>
            <div class="border border-secondary p-4 text-center rounded shadow">
                <h3 class="font-weight-bold mb-0">{{$b}}</h3>
            </div>
        </div>
    </div>
@endsection

@push('bottomscript')
@endpush