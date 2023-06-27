@extends('admin.layout.main')

@section('title', 'Administrator Perwalian - DKBS - Show')

@push('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('headscript')
@endpush

@section('content')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Detail DKBS Mahasiswa</h1>
        <a href="{{route('admin.dkbs')}}" class="bg-danger text-light rounded p-2 mb-0 text-decoration-none">Kembali</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datatable Detail DKBS Mahasiswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>Ruangan</th>
                            <th>SKS</th>
                            <th>Hari</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $index => $item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->MataKuliah->mk_id}}</td>
                                <td>{{$item->MataKuliah->mk_name}}</td>
                                <td>{{$item->kelas}}</td>
                                <td>{{$item->Ruangan->nama}}</td>
                                <td>{{$item->MataKuliah->sks}}</td>
                                <td>{{$item->hari}}</td>
                                <td>{{$item->jam_mulai}} - {{$item->jam_selesai}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    <p class="text-secondary font-weight-bold mb-0">Data Not Found!</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('bottomscript')

<!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/admin/demo/datatables-demo.js') }}"></script>
@endpush