@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Starter</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Starter</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

        <!-- Bagian form pemilihan mata kuliah -->
        <form method="POST" action="{{ route('matakuliah.add') }}">
            @csrf
            <select name="mata_kuliah_id">
                @foreach($mataKuliahList as $mataKuliah)
                    <option value="{{ $mataKuliah->id }}">{{ $mataKuliah->nama }}</option>
                @endforeach
            </select>
            <button type="submit">Add</button>
        </form>

        <!-- Bagian list mata kuliah yang dipilih -->
        <h2>Selected Mata Kuliah:</h2>
        <ul>
            @foreach(session('selectedMataKuliah', []) as $mataKuliah)
                <li>{{ $mataKuliah->nama }}</li>
            @endforeach
        </ul>


    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
