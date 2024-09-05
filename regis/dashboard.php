<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Link ke file CSS di folder css -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Link ke Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Dashboard</h1>

        <div class="row">
            <!-- Modal Kalkulator -->
            <div class="modal fade" id="calculatorModal" tabindex="-1" role="dialog" aria-labelledby="calculatorModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="calculatorModalLabel">Kalkulator Harian</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="calculatorForm">
                                <div class="form-group">
                                    <label for="weight">Berat Badan (kg):</label>
                                    <input type="number" class="form-control" id="weight" required>
                                </div>
                                <div class="form-group">
                                    <label for="height">Tinggi Badan (cm):</label>
                                    <input type="number" class="form-control" id="height" required>
                                </div>
                                <div class="form-group">
                                    <label for="activity">Aktivitas Fisik:</label>
                                    <select class="form-control" id="activity" required>
                                        <option value="1.2">Sedentary (sedikit aktivitas)</option>
                                        <option value="1.375">Light (aktivitas ringan)</option>
                                        <option value="1.55">Moderate (aktivitas sedang)</option>
                                        <option value="1.725">Active (aktivitas berat)</option>
                                        <option value="1.9">Very Active (aktivitas sangat berat)</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-primary" id="calculate">Hitung Kalori</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <p id="result"></p>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rencana Diet -->
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="card-title">Rencana Diet</h5>
                    <p class="card-text">Lihat rencana diet yang sesuai dengan tujuan Anda.</p>
                    <a href="diet_plan.php" class="btn btn-primary">Lihat Rencana Diet</a>
                </div>
            </div>

            <!-- Notifikasi Pengingat -->
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="card-title">Notifikasi Pengingat</h5>
                    <p class="card-text">Atur pengingat untuk kebiasaan sehat.</p>
                    <a href="notifications.php" class="btn btn-primary">Atur Pengingat</a>
                </div>
            </div>

            <!-- Saran Gerakan Olahraga -->
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <h5 class="card-title">Saran Gerakan Olahraga</h5>
                    <p class="card-text">Temukan saran gerakan olahraga untuk menunjang diet Anda.</p>
                    <a href="exercise.php" class="btn btn-primary">Lihat Saran</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Link ke jQuery, Popper.js, dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Link ke file JS di folder js -->
    <script src="js/scripts.js"></script> <!-- Mengarahkan ke scripts.js dalam folder 'js' -->
</body>
</html>
