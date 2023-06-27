@extends('layouts.master')
@section('content')
    {{-- message --}}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header ml-2 mt-3">
                            <h1>Hallo {{ \Illuminate\Support\Facades\Auth::user()->name }} !</h1>
                            <h5> S-1 {{ $users->programStudi->ps_name }}</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-lg-12 col-xl-8">
                <div class="card flex-fill comman-shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h1 class="card-title font-weight-bold">Announcement</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 dash-widget1">
                                <div class="card-header">
                                    Cuti Bersama 2023
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div>
                                    <p class="font-weight-light mt-2 ml-4">Direktorat Sumber Daya Insani - Universitas Kristen Maranatha</p>
                                    <p class="text-justify ml-4"> Menindaklanjuti Keputusan Bersama Menteri Agama, Menteri Ketenagakerjaan, dan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Politik tentang Hari Libur Nasional dan Cuti Bersama tahun 2023, dan Surat Edaran Rektor No.085-REK-INT-XII-2022 tentang Pemberitahuan Hari Libur Universitas Kristen Maranatha tahun 2023</p>
                                    <p class="text-center mb-1">dengan ini menyatakan bahwa</p>
                                    <h4 class="font-italic text-center ml-4 text-bold">Universitas Kristen Maranatha tidak ikut cuti bersama pemerintah tahun 2023</h4>
                                    <div>
                                        <div class="ml-4 mt-4 text-center">
                                            <h6>Informasi lebih lanjut :</h6>
                                            <h6><a href="https://instagram.com/dsdiukm?igshid=MjAxZDBhZDhlNA==">DSDI UKM</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <h1 class="card-title font-weight-bold">Announcement</h1>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 dash-widget1">
                                        <div class="card-header">
                                            Info Beasiswa
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="dash-details">

                                            <p class="font-weight-light mt-2 ml-4">Direktorat Kemahasiswaan dan Alumni - Universitas Kristen Maranatha</p>
                                            <h3 class="text-center ml-4 text-bold">SCRANTON WOMAN'S LEADERSHIP TA 2023/2024</h3>
                                            <h4 class="text-center mb-5 text-bold">TELAH DIBUKA BAGI S2!!</h4>

                                            <div class="ml-4 ">
                                                <h5 class="font-weight-bold">Persyaratan Umum untuk S2 :</h5>
                                                - Mahasiswi Aktif (Khusus Wanita)<br>
                                                - IPK min. 3.00<br>
                                                - Melampirkan SKTM (Surat Keterangan Tidak Mampu)
                                            </div>
                                            <div class="ml-4 mt-3">
                                                <h5 class="font-weight-bold">Persyaratan Administrasi untuk S2 :</h5>
                                                - Mengisi form pengajuan beasiswa eksternal dan form PKM<br>
                                                - Mengisi form rekomendasi fakultas, organisasi, dan pimpinan keagamaan<br>
                                                - Transkrip Nilai legalisir terakhir<br>
                                                - Wawancara secara online dengan DKA Maranatha<br>
                                                - Sertifikat organisasi<br>
                                                - Fotocopy KTP, DKBS, KTM, Photo
                                            </div>
                                            <div class="ml-4 mt-3 text-center">
                                                <h4 class="font-weight-bold">Deadline Pendaftaran :</h4>
                                                <h5 class="font-weight-bold">01 JULI 2023</h5>

                                            </div>

                                            <div>
                                                <div class="ml-4 mt-4 text-center">
                                                    <h6>Informasi lebih lanjut :</h6>
                                                    <h6><a href=https://instagram.com/dka.maranatha?igshid=MjAxZDBhZDhlNA==>DKA UKM</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4 d-flex">
                <div class="card flex-fill comman-shadow">
                    <div class="card-body">
                        <div>
                            <h2 class="font-weight-bold">Kalender Akademik</h2>
                        </div>
                        <div class="upcome-event-date">
                            <h4>26 Agustus 2023</h4>
                        </div>
                        <div class="event-details">
                            <p>Parents Gathering</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>28 Agustus - 04 September 2023</h4>
                        </div>
                        <div class="event-details">
                            <p>Wiratha Fest</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>10 September 2023</h4>
                        </div>
                        <div class="event-details">
                            <p>Dies Natalis UK. Maranatha ke-58</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>11 September 2023</h4>
                        </div>

                        <div class="event-details">
                            <p>Awal Perkuliahan Semester Ganjil 2023/2024</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>30 October - 10 November 2023</h4>
                        </div>
                        <div class="event-details">
                            <p>Ujian Tengah Semester (UTS) Ganjil 2023/2024</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>22 Desember 2023 - 03 Januari 2024</h4>
                        </div>
                        <div class="event-details">
                            <p>Libur Natal dan Tahun Baru</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>12 Januari 2024</h4>
                        </div>
                        <div class="event-details">
                            <p>Akhir Perkuliahan Semester Ganjil 2023/2024</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>15 - 26 Januari 2024</h4>
                        </div>
                        <div class="event-details">
                            <p>Ujian Akhir Semester</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>09 Februari 2024</h4>
                        </div>
                        <div class="event-details">
                            <p>Yudisium Akhir Semester Ganjil 2023/2024</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>12 Februari 2024</h4>
                        </div>
                        <div class="event-details">
                            <p>Awal Perkuliahan Semester Genap 2023/2024</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>02 - 17 April 2024</h4>
                        </div>
                        <div class="event-details">
                            <p>Ujian Tengah Semester (UTS) Genap 2023/2024</p>
                        </div>
                        <div class="upcome-event-date">
                            <h4>01 Mei 2024</h4>
                        </div>
                        <div class="event-details">
                            <p>Hari Buruh*</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection


