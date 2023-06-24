@extends('layouts.master')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
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
        <div class="card">
            <div class="card-body p-0">
                <table class="table">
                    <tr>
                        <td rowspan="5" class="text-center">
                            <label for="photo" class="h1 my-1">Foto Profil</label>

                            <div class="text-center my-3">
                                <img src="{{ asset('storage/img/' . $users->foto) }}" alt="Foto Profil" class="img-thumbnail" style="max-width: 500px; max-height: 350px; min-width: 0px; min-height: 0px;">
                            </div>

                            <form action="{{ route('profile.updatePhoto') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="custum-file-upload m-auto" for="photo">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
                                                </div>
                                                <div class="text">
                                                    <span>Click to upload image</span>
                                                </div>
                                                {{--                                    <input type="file" class="form-control-file" id="photo" name="photo">--}}
                                                <input type="file" class="form-control-file" id="photo" name="photo" onchange="previewImage(event)">

                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="" alt="Preview Foto" id="preview-image" class="img-thumbnail" style="max-width: 250px; max-height: 200px; min-width: 0px; min-height: 0px; display: none;">

{{--                Start Priview image on here                            --}}
<div class="container my-5" id="preview-text">
    <div>
        <p class="h3">Priview Image Here</p>
    </div>
    <div class="newtons-cradle m-auto">
        <div class="newtons-cradle__dot"></div>
        <div class="newtons-cradle__dot"></div>
        <div class="newtons-cradle__dot"></div>
        <div class="newtons-cradle__dot"></div>
    </div>
</div>
{{--               End Priview image on here                             --}}
                                        </div>
                                    </div>
                                </div>

                                <img src="#" alt="Preview Foto" class="img-thumbnail" style="max-width: 500px; max-height: 350px; min-width: 0px; min-height: 0px; display: none;">


                                <button type="submit" class="btn btn-primary my-3">Upload Foto</button>

                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1 class="m-5"> <b> Biodata Mahasiswa </b> </h1>
                            <form action="{{ route('profile.update') }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row">
                                    <label for="roleid" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="roleid" readonly class="form-control-plaintext" id="roleid" value="{{ $users->role->role_name }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="psid" class="col-sm-2 col-form-label">Program Studi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="psid" readonly class="form-control-plaintext" id="psid" value="{{ $users->programStudi->ps_name }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $users->name }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="email" class="form-control" id="email" value="{{ $users->email }}">
                                    </div>
                                </div>
{{--                                <div class="mb-3 row">--}}
{{--                                    <label for="password" class="col-sm-2 col-form-label">Password</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <input type="password" name="password" class="form-control" id="password" value="{{ $pickUsers->password }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="mb-3 row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $users->alamat }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nomortelepon" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nomortelepon" name="nomortelepon" value="{{ $users->nomor_telepon }}">
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                </div>
                            </form>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
	</div><!-- /.container-fluid -->
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- /.content -->
{{--    @section('scripts')--}}

        <script>
            function previewImage(event) {
                const reader = new FileReader();
                const imageField = document.getElementById("preview-image");

                const previewText = document.getElementById("preview-text");


                reader.onload = function() {
                    if (reader.readyState === 2) {
                        imageField.src = reader.result;
                        $('#preview-image').show(); // if image hide then show the preview image
                        $(previewText).hide();
                    }
                }
                reader.readAsDataURL(event.target.files[0]);
            }

        </script>
{{--    @endsection--}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

