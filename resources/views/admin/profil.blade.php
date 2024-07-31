@extends('layout.master')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <h4 class="card-title fw-semibold mb-4">Profile</h4>
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-4 d-flex align-items-center">
                            <div class="position-relative d-inline-block">
                                <img id="current-profile-image" class="img-fluid img-thumbnail rounded-5"
                                    src="{{ Auth::guard('admin')->user()->gambar ? asset(Auth::guard('admin')->user()->gambar) : asset('assets/img/user.jpg') }}"
                                    alt="Current Profile Image">
                                <span class="position-absolute top-0 end-0 p-4">
                                    <div id="profile-image" class="bg-white p-2 rounded-2 cursor-pointer">
                                        <i class="fas fa-camera fs-5"></i>
                                    </div>
                                </span>
                            </div>
                            <input type="file" class="d-none" name="gambar" id="gambar">
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="{{ Auth::guard('admin')->user()->nama }}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="no_hp" class="form-label">No HP</label>
                                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                                            value="{{ Auth::guard('admin')->user()->no_hp }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" rows="2">{{ Auth::guard('admin')->user()->alamat }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#profile-image").click(function() {
                $("#gambar").click();
            });

            $("#gambar").change(function(event) {
                let reader = new FileReader();
                reader.onload = function() {
                    let output = document.getElementById('current-profile-image');
                    output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            });
        });
    </script>
@endsection
