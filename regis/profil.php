<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>

    <!-- Link ke file CSS di folder css -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Link ke Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="diet_plan.php">Rencana Diet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notifications.php">Notifikasi Pengingat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exercise.php">Saran Gerakan Olahraga</a>
                </li>
                <li class="nav-item">
                    <a class="profil.php" href="profile.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Profil Pengguna</h1>

        <div class="row">
            <div class="col-md-4">
                <!-- Foto Profil -->
                <div class="text-center mb-4">
                    <img src="images/default-profile.jpg" alt="Foto Profil" class="img-fluid rounded-circle" id="profilePicture">
                    <form id="uploadProfilePictureForm" class="mt-3">
                        <input type="file" class="form-control-file" id="profilePictureUpload">
                        <button type="submit" class="btn btn-primary mt-2">Upload Foto</button>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <!-- Form Edit Profil -->
                <form id="editProfileForm">
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Usia:</label>
                        <input type="number" class="form-control" id="age" placeholder="Masukkan Usia" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Link ke jQuery, Popper.js, dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Link ke file JS di folder js -->
    <script src="js/scripts.js"></script>
</body>
</html>
