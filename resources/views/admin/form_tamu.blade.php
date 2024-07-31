<!-- resources/views/admin/tamu/index.blade.php -->
@extends('layout.master')

@section('content')
<div class="container">
    <h1>Data Tamu</h1>
    <div class="d-flex mb-3">
        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#tamuCreateModal">
            Tambah Tamu
        </button>
                <a href="{{ route('admin.data-tamu.print') }}" class="btn btn-primary">Cetak Data Tamu</a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table id="tamuTable" class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Instansi</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">No Telp</th>
                <th class="text-center">Keperluan</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tamus as $tamu)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->instansi }}</td>
                    <td>{{ $tamu->jabatan }}</td>
                    <td>{{ $tamu->no_telp }}</td>
                    <td class="short-text" title="{{ $tamu->keperluan }}">{{ $tamu->keperluan }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-warning btn-edit"
                                data-id="{{ $tamu->id }}"
                                data-nama="{{ $tamu->nama }}"
                                data-instansi="{{ $tamu->instansi }}"
                                data-jabatan="{{ $tamu->jabatan }}"
                                data-no_telp="{{ $tamu->no_telp }}"
                                data-keperluan="{{ $tamu->keperluan }}">
                            <i class="fas fa-edit"></i> 
                        </button>
                        <form action="{{ route('admin.data-tamu.destroy', $tamu->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> 
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>

<!-- Modal Tambah Tamu -->
<div class="modal fade" id="tamuCreateModal" tabindex="-1" aria-labelledby="tamuCreateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tamuCreateModalLabel">Tambah Tamu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createTamuForm" action="{{ route('admin.data-tamu.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="createNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="createNama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="createInstansi" class="form-label">Instansi</label>
                        <input type="text" class="form-control" id="createInstansi" name="instansi" required>
                    </div>
                    <div class="mb-3">
                        <label for="createJabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="createJabatan" name="jabatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="createNoTelp" class="form-label">No Telp</label>
                        <input type="text" class="form-control" id="createNoTelp" name="no_telp" required>
                    </div>
                    <div class="mb-3">
                        <label for="createKeperluan" class="form-label">Keperluan</label>
                        <textarea class="form-control" id="createKeperluan" name="keperluan" rows="3" required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Tambah Tamu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Tamu -->
<div class="modal fade" id="tamuEditModal" tabindex="-1" aria-labelledby="tamuEditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tamuEditModalLabel">Edit Tamu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTamuForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="editTamuId" name="id">
                    <div class="mb-3">
                        <label for="editNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="editNama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="editInstansi" class="form-label">Instansi</label>
                        <input type="text" class="form-control" id="editInstansi" name="instansi" required>
                    </div>
                    <div class="mb-3">
                        <label for="editJabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="editJabatan" name="jabatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="editNoTelp" class="form-label">No Telp</label>
                        <input type="text" class="form-control" id="editNoTelp" name="no_telp" required>
                    </div>
                    <div class="mb-3">
                        <label for="editKeperluan" class="form-label">Keperluan</label>
                        <textarea class="form-control" id="editKeperluan" name="keperluan" rows="3" required></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@section('scripts')
<script>
    $(document).ready(function() {
        // Show modal for edit
        $('.btn-edit').on('click', function() {
            var id = $(this).data('id');
            var nama = $(this).data('nama');
            var instansi = $(this).data('instansi');
            var jabatan = $(this).data('jabatan');
            var noTelp = $(this).data('no_telp');
            var keperluan = $(this).data('keperluan');
            
            $('#editTamuId').val(id);
            $('#editNama').val(nama);
            $('#editInstansi').val(instansi);
            $('#editJabatan').val(jabatan);
            $('#editNoTelp').val(noTelp);
            $('#editKeperluan').val(keperluan);
            
            $('#editTamuForm').attr('action', '/admin/data-tamu/' + id);
            $('#tamuEditModal').modal('show');
        });
    });
</script>
@endsection

@endsection

@section('styles')
<style>
    .short-text {
        max-width: 150px; /* Atur lebar maksimum sesuai kebutuhan */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        position: relative;
    }

    .short-text:hover::after {
        content: attr(title); /* Menampilkan isi atribut title sebagai tooltip */
        position: absolute;
        background-color: #333;
        color: #fff;
        padding: 5px;
        border-radius: 5px;
        top: 100%; /* Posisikan di bawah elemen */
        left: 50%;
        transform: translateX(-50%);
        white-space: normal;
        z-index: 10;
        width: max-content;
        max-width: 300px; /* Atur lebar maksimum tooltip sesuai kebutuhan */
    }
</style>


@endsection
