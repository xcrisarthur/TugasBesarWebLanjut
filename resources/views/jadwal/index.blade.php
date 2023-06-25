@extends('layouts.master')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Jadwal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Jadwal</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            {{-- main content here --}}
            <div class="input-group mb-3 col-md-2">
                <select id="semesterSelect" class="form-control " name="" required autocomplete="" autofocus>
                    <option value="">Pilih Semester</option>
                    @foreach($semesters as $semester)
                        <option value="{{ $semester->semester_id }}">{{ $semester->semester_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="row">
                @php
                    $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
                    $displayedCourses = []; // Array to store displayed courses
                @endphp

                @foreach($days as $day)
                    <div class="col-md-12 text-center">
                        <h3 class="text-center">{{ $day }}</h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Kelas</th>
                                <th>Ruangan</th>
                                <th>Waktu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dkbss as $dkbs)
                                @if($dkbs->hari == $day && !in_array($dkbs->mataKuliah->mk_id, $displayedCourses))
                                    <tr>
                                        <td>{{ $dkbs->mk_id }}</td>
                                        <td>{{ $dkbs->mataKuliah->mk_name }}</td>
                                        <td>{{ $dkbs->kelas }}</td>
                                        <td>{{ $dkbs->ruangan->nama }}</td>
                                        <td>{{ $dkbs->jam_mulai }} - {{ $dkbs->jam_selesai }}</td>
                                    </tr>
                                    @php
                                        $displayedCourses[] = $dkbs->mataKuliah->mk_id; // Add course to the displayed courses array
                                    @endphp
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>


@endsection
