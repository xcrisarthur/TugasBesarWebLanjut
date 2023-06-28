@extends('admin.layout.main')

@section('title', 'Administrator Perwalian - Mata Kuliah - Create')

@push('css')
@endpush

@push('headscript')
@endpush

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Tambah Mata Kuliah</h1>
        <a href="{{route('admin.matakuliah')}}" class="bg-danger text-light rounded p-2 mb-0 text-decoration-none">Kembali</a>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Form Tambah Mata Kuliah
                </div>
                <div class="card-body">
                    <form action="{{route('admin.matakuliah.store')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Kode Mata Kuliah</label>
                            <input type="text" class="form-control @error('mk_id') is-invalid @enderror" name="mk_id" placeholder="Kode Mata Kuliah" value="{{old('mk_id')}}">
                            @error('mk_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Mata Kuliah</label>
                            <input type="text" class="form-control @error('mk_name') is-invalid @enderror" name="mk_name" placeholder="Nama Mata Kuliah" value="{{old('mk_name')}}">
                            @error('mk_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label>Program Studi</label>
                            <select class="form-control @error('ps_id') is-invalid @enderror" name="ps_id">
                                <option value="" disabled selected>Pilih Program Studi</option>
                                @foreach($programstudi as $item)
                                    <option value="{{$item->ps_id}}">{{$item->ps_name}}</option>
                                @endforeach
                            </select>
                            @error('ps_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label>SKS</label>
                            <input type="number" min="1" max="4" class="form-control @error('sks') is-invalid @enderror" name="sks" placeholder="SKS" value="{{old('sks')}}">
                            @error('sks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus mr-2"></i>Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('bottomscript')
@endpush