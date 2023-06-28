@extends('admin.layout.main')

@section('title', 'Administrator Perwalian - Mata Kuliah - Show')

@push('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('headscript')
@endpush

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Detail Mata Kuliah</h1>
        <a href="{{route('admin.matakuliah')}}" class="bg-danger text-light rounded p-2 mb-0 text-decoration-none">Kembali</a>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Form Detail Mata Kuliah
                </div>
                <div class="card-body">
                    <form action="{{route('admin.matakuliah.edit', ['id' => $data->mk_id])}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" class="form-control" name="mk_id" placeholder="Kode Mata Kuliah" value="{{$data->mk_id}}" readonly="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="mk_name" placeholder="Nama Mata Kuliah" value="{{$data->mk_name}}" readonly="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Program Studi</label>
                            <input type="text" class="form-control" name="ps_id" placeholder="Program Studi" value="{{$data->ProgramStudi->ps_name}}" readonly="">
                        </div>
                        <div class="form-group mb-4">
                            <label>SKS</label>
                            <input type="number" class="form-control" name="sks" placeholder="SKS" value="{{$data->sks}}" readonly="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center mt-4">
        <a href="{{route('admin.matakuliah.detailmk.create', ['id' => $data->mk_id])}}" class="bg-danger text-light rounded p-2 mb-0 text-decoration-none">Tambah</a>
    </div>

    <!-- Detail Mata Kuliah -->
    <div class="card shadow mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datatable Detail Mata Kuliah</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Semester</th>
                            <th>Kelas</th>
                            <th>Ruangan</th>
                            <th>Hari</th>
                            <th>Tipe</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($datamk as $index => $item)
                            <tr>
                                <td>{{$item->semester_id}}</td>
                                <td>{{$item->kelas}}</td>
                                <td>{{$item->id_ruangan}}</td>
                                <td>{{$item->hari}}</td>
                                <td>{{$item->tipe}}</td>
                                <td>{{$item->jam_mulai}}</td>
                                <td>{{$item->jam_selesai}}</td>
                                <td>
                                    <a href="{{ route('admin.matakuliah.detailmk.edit', ['id' => $item->mk_id, 'idmk' => $item->mk_id]) }}" class="text-decoration-none p-2 mb-0"><span class="badge badge-secondary">Edit</span></a>
                                    <a href="#" class="text-decoration-none p-2 mb-0" data-toggle="modal" data-target="#modalDelete{{$item->mk_id}}"><span class="badge badge-danger">Delete</span></a>
                                </td>

                                <!-- Modal -->
                                <div class="modal fade" id="modalDelete{{$item->mk_id}}" tabindex="-1" role="dialog" aria-labelledby="modalDelete{{$item->mk_id}}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Delete Matakuliah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data Mata Kuliah dengan kode {{$item->mk_id}}?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                <form action="{{ route('admin.matakuliah.detailmk.destroy', ['id' => $item->mk_id, 'idmk' => $item->mk_id]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">
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