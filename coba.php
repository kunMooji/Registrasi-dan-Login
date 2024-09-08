<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link to Bootstrap CSS for layout -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to your custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #000000;
            padding: 20px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px 0;
        }
        .sidebar a:hover {
            background-color: #333;
        }
        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .card {
            background-color: #181818;
            border: none;
        }
        .card img {
            height: 150px;
            object-fit: cover;
        }
        .header, .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer {
            background-color: #181818;
            padding: 10px 20px;
        }
        .footer a {
            color: #b3b3b3;
            margin-right: 10px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Spotify</h2>
        <a href="#">Home</a>
        <a href="#">Search</a>
        <a href="#">Your Library</a>
        <hr>
        <button class="btn btn-outline-light btn-block">Create playlist</button>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="header">
            <h2>Focus</h2>
            <div>
                <a href="#" class="btn btn-outline-light">Sign up</a>
                <a href="#" class="btn btn-outline-light">Log in</a>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Peaceful Piano">
                    <div class="card-body">
                        <h5 class="card-title">Peaceful Piano</h5>
                        <p class="card-text">Relaxing piano music to help you focus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Deep Focus">
                    <div class="card-body">
                        <h5 class="card-title">Deep Focus</h5>
                        <p class="card-text">Stay focused with ambient and post-rock music.</p>
                    </div>
                </div>
            </div>
            <!-- Add more cards similarly -->
        </div>

        <!-- Footer -->
        <div class="footer">
            <div>
                <a href="#">Legal</a>
                <a href="#">Privacy Center</a>
                <a href="#">Cookies</a>
                <a href="#">About Ads</a>
            </div>
            <div>
                <a href="#" class="text-white">English</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
