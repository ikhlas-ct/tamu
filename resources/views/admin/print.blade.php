<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Tamu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000;
        }
        .header {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
        }
        .header img {
            width: 125px;
        }
        .header h4, .header p {
            text-align: center;
            margin: 0;
        }
        .header .header-content {
            flex: 1;
            padding: 0 20px;
        }
        .info {
            display: grid;
            grid-template-columns: 150px auto;
            gap: 8px 16px;
            margin-top: 20px;
        }
        .info p {
            margin: 0;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .text-center {
            text-align: center;
        }

        @media print {
            .no-print {
                display: none;
            }
            .print-title {
                display: none;
            }
            .page-break {
                page-break-before: always;
            }
        }
        hr {
            border: none;
            border-top: 1px solid #000;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                <img src="{{ asset('assets/img/logo/clearprotokol.png') }}" alt="Logo">
            </div>
            <div class="header-content">
                <h4>BIRO ADMINISTRASI PIMPINAN BAGIAN PROTOKOL<br>PADANG    SUMATERA BARAT</h4>
                <p>Jalan Jendral Sudirman No.51 - Padang Barat, Kota Padang 25129<br>Telp: (0751) 31221</p>
            </div>
        </div>
        <h4 style="text-align: center">REKAPITULASI TAMU</h4>
     
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">NO</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Instansi</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">No Telp</th>
                    <th class="text-center">Keperluan</th>
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
                    <td>{{ $tamu->keperluan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
