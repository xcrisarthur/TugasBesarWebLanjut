@extends('layouts.master')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Perwalian Management</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Mata Kuliah</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">


        <div class="card">
            <div class="card-body p-0">
                <table class="table table-hover mb-0">
                    <tr>
                        <td>
                        @php
                            $perwalianStatus = false;
                        @endphp

                        @foreach($dkbss as $dkbs)
                            @if(Auth::user()->user_id == $dkbs->user_id)
                                <p>Status Perwalian: Sudah Melakukan Perwalian</p>
                                @php
                                    $perwalianStatus = true;
                                    break;
                                @endphp
                            @endif
                        @endforeach

                        @if (!$perwalianStatus)
                            <p>Status Perwalian: Belum Melakukan Perwalian</p>
                        @endif

                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <h3 class="m-0 text-dark">Dokumen Beban Kontrak Studi</h3>

        @if((Auth::user()->user_id == $dkbs->user_id) )
                <div class="mt-3 p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                        <tr>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>Ruangan</th>
                            <th>Jumlah SKS</th>
{{--                            <th>Kapasitas Kelas</th>--}}

                            <th>Hari</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Semester</th>

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
                                <td>{{ $dkbs->jam_mulai }}</td>
                                <td>{{ $dkbs->jam_selesai }}</td>
                                                                <td>{{ $dkbs->semester->semester_name }}</td>

                                </tbody>

                            @endif
                        @endforeach
                    </table>
                </div>
        @else
            <h3 class="m-0 text-dark pb-2">Pilih Mata Kuliah</h3>
            @foreach($semesters as $semester)

                <div class="accordion accordion-flush" id="accordionFlushExamplee">
                    <div class="accordion-item border border-dark-subtle">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $semester->semester_id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{ $semester->semester_name }}
                            </button>
                        </h2>
                        <div id="{{ $semester->semester_id }}" class="accordion-collapse collapse" data-bs-parent="#{{ $semester->semester_id }}">
                            <p class="accordion-body h4">Mata Kuliah</p>

                            <div class="">
                                <div class="m-3 p-0">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>Kode Mata Kuliah</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>Tipe Kelas</th>
                                            <th>Ruangan</th>
                                            <th>Jumlah SKS</th>
                                            <th>Kapasitas Kelas</th>

                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <form method="POST" action="{{ route('matakuliah.add') }}">

                                        @foreach($detailmks as $detailmk)
                                            @if($detailmk->semester_id == $semester->semester_id)
                                                    <tr>
                                                        <td> {{ $detailmk->mk_id }} </td>
                                                        <td> {{ $detailmk->mataKuliah->mk_name }} ( Kelas {{ $detailmk->kelas }} ) </td>
                                                        <td> {{ $detailmk->tipe  }} </td>
                                                        <td> {{ $detailmk->ruangan->nama }} </td>
                                                        <td> {{ $detailmk->mataKuliah->sks }} SKS </td>
                                                        <td> {{ $detailmk->max_participants }} </td>
                                                        <td> {{ $detailmk->hari  }} </td>
                                                        <td> {{ $detailmk->jam_mulai }} </td>
                                                        <td> {{ $detailmk->jam_selesai }} </td>
                                                        <td>
                                                                @csrf
                                                            <label class="containerCheck">
                                                                <input
                                                                    type="checkbox"
                                                                    name="selected_courses[]"
                                                                    value="{{ $detailmk->mataKuliah->mk_id }}"
                                                                    data-mk-id="{{ $detailmk->mataKuliah->mk_id }}"
                                                                    data-nama="{{ $detailmk->mataKuliah->mk_name }}"
                                                                    data-kelas="{{ $detailmk->kelas }}"
                                                                    data-tipe="{{ $detailmk->tipe  }}"
                                                                    data-namaruangan="{{ $detailmk->ruangan->nama }}"
                                                                    data-sks="{{ $detailmk->mataKuliah->sks }}"
                                                                    data-maxparti="{{ $detailmk->max_participants }}"
                                                                    data-hari="{{ $detailmk->hari  }}"
                                                                    data-jmulai="{{ $detailmk->jam_mulai }}"
                                                                    data-jselesai="{{ $detailmk->jam_selesai }}"
                                                                >
                                                                <div class="checkmark"></div>
                                                            </label>
                                                        </td>
                                                    </tr>
                                            @endif
                                        @endforeach
                                        </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
            <h3 class="m-0 text-dark pb-2 pt-3">Mata Kuliah Terpilih</h3>
            <h5>Total SKS : <span id="total-sks"></span></h5>
            <p id="sks-warning" style="color: red; display: none;">Total SKS melebihi batas maksimum (24 SKS).</p>
            <form method="POST" action="{{ route('dkbs.store') }}" id="selected-courses-form">
                @csrf
                <div class=" p-0">
                    <table class="table table-hover mb-0" id="selected-courses">
                        <thead>
                        <tr>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Tipe Kelas</th>
                            <th>Ruangan</th>
                            <th>Jumlah SKS</th>
                            <th>Kapasitas Kelas</th>
                            <th>Hari</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            {{--                        <th>Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            {{--disini buttonnya--}}
                        </tr>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif


	</div><!-- /.container-fluid -->
</div>


<!-- /.content -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').on('change', function() {
                var selectedCourses = [];
                var selectedMkId = $(this).data('mk-id');
                var maxSKS = 24;
                var totalSKS = 0;

                if (this.checked) {
                    $('#selected-courses-form').append('<input type="hidden" name="selected_courses[]" value="' + $(this).val() + '">');
                } else {
                    $('input[type="hidden"][value="' + $(this).val() + '"]').remove();
                }

                $('input[type="checkbox"][data-mk-id="' + selectedMkId + '"]').not(this).prop('disabled', this.checked);

                $('input[type="checkbox"]:checked').each(function() {
                    var sks = parseInt($(this).data('sks'));
                    selectedCourses.push({
                        kode: $(this).val(),
                        nama: $(this).data('nama'),
                        tipe: $(this).data('tipe'),
                        namaruangan: $(this).data('namaruangan'),
                        sks: $(this).data('sks'),
                        maxparti: $(this).data('maxparti'),
                        hari: $(this).data('hari'),
                        jmulai: $(this).data('jmulai'),
                        jselesai: $(this).data('jselesai'),
                        sks: sks
                    });
                    totalSKS += sks;
                });

                var coursesTableBody = $('#selected-courses tbody');
                coursesTableBody.empty();

                if (selectedCourses.length > 0) {
                    for (var i = 0; i < selectedCourses.length; i++) {
                        var row = $('<tr></tr>');
                        row.append($('<td></td>').text(selectedCourses[i].kode));
                        row.append($('<td></td>').text(selectedCourses[i].nama));
                        row.append($('<td></td>').text(selectedCourses[i].tipe));
                        row.append($('<td></td>').text(selectedCourses[i].namaruangan));
                        row.append($('<td></td>').text(selectedCourses[i].sks));
                        row.append($('<td></td>').text(selectedCourses[i].maxparti));
                        row.append($('<td></td>').text(selectedCourses[i].hari));
                        row.append($('<td></td>').text(selectedCourses[i].jmulai));
                        row.append($('<td></td>').text(selectedCourses[i].jselesai));
                        coursesTableBody.append(row);
                    }
                }

                if (totalSKS >= maxSKS) {
                    $('#sks-warning').show();
                    $(this).prop('checked', false);
                } else {
                    $('#sks-warning').hide();
                }

                console.log(selectedCourses);
                $('#total-sks').text(totalSKS);
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
@endsection
