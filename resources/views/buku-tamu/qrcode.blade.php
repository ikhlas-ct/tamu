<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Buku Tamu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #333; /* Dark background for contrast */

        }
        .container {
            background-color: #ff0000;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header .logo {
            width: 100px; /* Adjust this value as needed */
            height: auto;
        }
        .header div {
            flex-grow: 1;
            text-align: center;
        }
        .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .qr-code {
            margin: 20px 0;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
        .social-icons i {
            font-size: 20px;
            margin: 0 10px;
            color: #333;
        }
        .footer {
    padding: 20px;
    background-color: #222; /* Dark background for footer */
    text-align: center;
    
}

.contact-info {
    display: flex;
    justify-content: center;
    gap: 20px; /* Space between items */
    margin: 10px 0;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 5px; /* Space between icon and text */
}

.contact-info i {
    font-size: 18px; /* Adjust icon size as needed */
}

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="left-logo">
                <img src="{{ asset('assets/img/logo/clearprotokol.png') }}" class="logo" alt="Left Logo">
            </div>
            <div>
                <p></p>
            </div>
            <div class="right-logo">
                <img src="{{ asset('assets/img/logo/padang.png') }}" class="logo" alt="Right Logo">
            </div>
        </div>
        <div class="title">Formulir Pengisian Kunjungan Pemerintah </div>
        <div class="subtitle">PEMERINTAH PROVINSI SUMATERA BARAT TAHUN <?php echo date("Y"); ?></div>
        <div class="qr-code">
            {!! $qrCode !!}
        </div>
        <div class="subtitle">Akses melalui menu PPID > Informasi Publik</div>
        <div class="footer">
            <p>Informasi adalah hak asasi. Transparan dan akuntabel mewujudkan clean and good governance.</p>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fab fa-instagram"></i>
                    <span>protokolsumbar</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>(0751) 31221</span>
                </div>
            </div>
            <p>© 2024 Pemerintah Provinsi Sumatera Barat. All rights reserved.</p>
        </div>
        
        
    </div>
</body>
</html>
