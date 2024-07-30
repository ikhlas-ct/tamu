<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            width: 60%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        .date-time {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center mb-10">
            <div class="col-2">
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset('assets/img/logo/protokol_sumbar.jpg') }}" alt="logo" class="img-fluid">
                </a>
            </div>
            <div class="col-9 text-center">
                <h1>PEMERINTAH PROVINSI <br> SUMATERA BARAT</h1>
                <div class="date-time" style="margin-bottom: 30px;">
                    <div id="date"></div>
                    <span id="time"></span>
                </div>
            </div>
        </div>
        <hr>
        <h3 class="text-center text-success">Form Tamu</h3>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

        <form action="{{ route('tambah_tamu') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">Asal Instansi:</label>
                <input type="text" class="form-control" id="instansi" name="instansi">
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
       
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Hp:</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp">
            </div>
            <div class="mb-3">
                <label for="keperluan" class="form-label">Keperluan:</label>
                <textarea class="form-control" id="keperluan" name="keperluan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update time every second
            setInterval(() => {
                const dateElement = document.getElementById('date');
                const timeElement = document.getElementById('time');
                const now = new Date();

                // Format tanggal
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                const dateString = now.toLocaleDateString('id-ID', options); 
                
                // Format waktu
                const timeString = now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });

                // Set content
                dateElement.textContent = dateString;
                timeElement.textContent = timeString;
            }, 1000);
        });
    </script>
</body>
</html>
