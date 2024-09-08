<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Diet Health Website</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #3f6caf);
            color: #ffffff;
            margin: 0;
            font-family: Arial, sans-serif;
        }
                .hero {
            position: relative;
            background-image: url('img/backgroundFirst.jpg');
            background-size: cover;
            background-position: center;
            height: 700px;
            color: #ffffff;
            text-align: center;
            padding: 100px 20px;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Overlay gelap dengan transparansi */
            z-index: 1;
        }
        .hero h1, .hero p {
            position: relative;
            z-index: 2;
        }

        .btn-custom {
            background-color: #ffffff;
            color: #3f6caf;
            border-radius: 20px;
            padding: 10px 20px;
            font-weight: bold;
            margin: 10px;
        }
        .btn-custom:hover {
            background-color: #e0e0e0;
        }
        nav {
            margin-bottom: 20px;
        }
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Diet Health</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"> Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Our Diet Health Website</h1>
        <p>Achieve your health goals with our expert guidance and services.</p>
        <p>Selamat datang di Diet Health, tempat terbaik untuk mencapai tujuan kesehatan Anda dengan panduan dan layanan ahli kami. Temukan informasi terbaru tentang diet sehat, layanan yang kami tawarkan, dan bagaimana kami dapat membantu Anda menjalani gaya hidup yang lebih baik. Jelajahi situs kami untuk memulai perjalanan kesehatan Anda hari ini!</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Diet Health. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
