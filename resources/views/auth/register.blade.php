@extends('auth.master')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Register') }}</p>

        <form action="{{route('register')}}" method="post">
            @csrf

            <div class="input-group mb-3">
                <select id="role_id" class="form-control @error('role_id') is-invalid @enderror" name="role_id" required autocomplete="role_id" autofocus>
                    <option value="">Pilih Role</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <select id="ps_id" class="form-control @error('ps_id') is-invalid @enderror" name="ps_id" required autocomplete="ps_id" autofocus>
                    <option value="">Pilih Program Studi</option>
                    @foreach($programStudis as $programStudi)
                        <option value="{{ $programStudi->ps_id }}">{{ $programStudi->ps_name }}</option>
                    @endforeach
                </select>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>


            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                       value="{{old('email')}}" placeholder="Email" required autocomplete="email">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-envelope"></span>
                </div>
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       placeholder="Password" name="password" required autocomplete="new-password">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-lock"></span>
                </div>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" placeholder="Retype password"
                       name="password_confirmation" required autocomplete="new-password">
                <div class="input-group-append input-group-text">
                    <span class="fa fa-lock"></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                       placeholder="Alamat" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat"
                       autofocus>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <input id="nomor_telepon" type="text" class="form-control @error('nomor_telepon') is-invalid @enderror"
                       placeholder="Nomor Telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}" required autocomplete="nomor_telepon"
                       autofocus>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>

            <div class="input-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Full name" name="name" value="{{ old('name') }}" required autocomplete="name"
                    autofocus>
                <div class="input-group-append input-group-text">
                    <span class="fa fa-user"></span>
                </div>
            </div>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="row">
                <div class="col-4 offset-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        @if (Route::has('login'))
        <hr>
        <p class="mb-0 text-center">
            <a href="{{ route('login') }}" class="text-center">{{ __('Sudah punya akun? Login sekarang') }}</a>
        </p>
        @endif
    </div>
    <!-- /.login-card-body -->
</div>
@endsection
