@extends('layout.master1')
@section('title', 'Login')
@section('content')
    <div
        class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-4 col-xxl-3">
                    <div class="card mb-0" style="width: 450px">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('assets/img/logo/clearprotokol.png') }}" alt="Logo" class="img-fluid" style="width: 200px; ">
                                <p class="mb-3">Selamat Datang! 👋</p>
                                <h4 class="mb-4">Silahkan login di account anda</h4>
                            </div>                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                            <form method="POST" action="{{ route('admin.login.post') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="username" name="username" aria-describedby="usernameHelp"
                                        placeholder="Masukan username" value="{{ old('username') }}">
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password" placeholder="Masukan password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-2 fs-5 mb-4 rounded-2">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


