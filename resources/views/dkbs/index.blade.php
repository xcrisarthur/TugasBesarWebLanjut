@extends('layouts.master')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Dokumen Beban Kontrak Studi</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">DKBS</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
        <div class="input-group mb-3 col-md-2">
            <select id="semesterSelect" class="form-control " name="" required autocomplete="" autofocus>
                <option value="">Pilih Semester</option>
                @foreach($semesters as $semester)
                    <option value="{{ $semester->semester_id }}">{{ $semester->semester_name }}</option>
                @endforeach
            </select>
        </div>

        @php
            $totalSKS = 0;
            foreach($dkbss as $dkbs) {
                if($dkbs->user_id == Auth::user()->user_id) {
                    $totalSKS += $dkbs->mataKuliah->sks;
                }
            }
        @endphp

        <h5 class="mt-3">Total SKS Yang Diambil : {{ $totalSKS }} </h5>
        <h5 class=""> Program Studi : Teknik Informatika </h5>

        <div class="mt-3 p-0">

            <table class="table table-hover mb-0 text-center">
                <thead>
                <tr>
                    <th>Kode Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Ruangan</th>
                    <th>Jumlah SKS</th>
                    <th>Hari</th>
                    <th>Waktu</th>
{{--                    <th>Jam Selesai</th>--}}
{{--                    <th>Semester</th>--}}
                </tr>
                </thead>
                @foreach($dkbss as $dkbs)
                    @if($dkbs->user_id == Auth::user()->user_id)
                        <tbody>
                        <td>{{ $dkbs->mk_id }}</td>
                        <td>{{ $dkbs->mataKuliah->mk_name }}</td>
                        <td>{{ $dkbs->kelas }}</td>
                        <td>{{ $dkbs->ruangan->nama }}</td>
                        <td>{{ $dkbs->mataKuliah->sks }}</td>
                        <td>{{ $dkbs->hari }}</td>
                        <td>{{ $dkbs->jam_mulai }} - {{ $dkbs->jam_selesai }}</td>
{{--                        <td></td>--}}
{{--                        <td>{{ $dkbs->semester->semester_name }}</td>--}}
                        </tbody>
                    @endif
                @endforeach
            </table>
        </div>


	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


@endsection
