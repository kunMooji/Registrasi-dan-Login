<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rencana Diet</title>

    <!-- Link ke file CSS di folder css -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- Link ke Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Rencana Diet Harian</h1>

        <!-- Rencana Diet Mingguan -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Diet Seimbang Minggu 1</h5>
                <p class="card-text">Rencana diet yang berfokus pada keseimbangan nutrisi untuk minggu pertama.</p>
                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#dietWeek1">Detail</a>
            </div>
        </div>

        <!-- Rencana Diet Tinggi Protein -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Diet Tinggi Protein</h5>
                <p class="card-text">Rencana diet dengan fokus pada asupan protein tinggi untuk membantu pembentukan otot dan penurunan berat badan.</p>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#dietHighProtein">Detail</a>
            </div>
        </div>

        <!-- Rencana Diet Rendah Karbohidrat -->
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Diet Rendah Karbohidrat</h5>
                <p class="card-text">Rencana diet yang mengurangi asupan karbohidrat untuk mempercepat penurunan berat badan.</p>
                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#dietLowCarb">Detail</a>
            </div>
        </div>

        <!-- Button Kembali ke Dashboard -->
        <div class="text-center">
            <a href="dashboard.php" class="btn btn-secondary">Kembali ke Dashboard</a>
        </div>
    </div>

    <!-- Modal untuk Diet Minggu 1 -->
    <div class="modal fade" id="dietWeek1" tabindex="-1" role="dialog" aria-labelledby="dietWeek1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dietWeek1Label">Rencana Diet Seimbang Minggu 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><strong>Hari 1:</strong> Sarapan dengan oatmeal, makan siang dengan salad sayuran dan ayam, makan malam dengan ikan panggang.</li>
                        <li><strong>Hari 2:</strong> Sarapan dengan roti gandum dan alpukat, makan siang dengan nasi merah dan tempe, makan malam dengan sup sayuran.</li>
                        <li>... (lengkapi dengan rencana mingguan)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Diet Tinggi Protein -->
    <div class="modal fade" id="dietHighProtein" tabindex="-1" role="dialog" aria-labelledby="dietHighProteinLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dietHighProteinLabel">Rencana Diet Tinggi Protein</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><strong>Hari 1:</strong> Sarapan dengan telur rebus, makan siang dengan dada ayam panggang, makan malam dengan salmon dan sayuran.</li>
                        <li><strong>Hari 2:</strong> Sarapan dengan smoothie protein, makan siang dengan steak daging sapi, makan malam dengan ikan bakar.</li>
                        <li>... (lengkapi dengan rencana tinggi protein lainnya)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Diet Rendah Karbohidrat -->
    <div class="modal fade" id="dietLowCarb" tabindex="-1" role="dialog" aria-labelledby="dietLowCarbLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dietLowCarbLabel">Rencana Diet Rendah Karbohidrat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                        <li><strong>Hari 1:</strong> Sarapan dengan omelet sayuran, makan siang dengan salad ayam, makan malam dengan ikan panggang dan sayuran kukus.</li>
                        <li><strong>Hari 2:</strong> Sarapan dengan yogurt rendah karbohidrat, makan siang dengan steak, makan malam dengan daging tanpa lemak dan sayuran.</li>
                        <li>... (lengkapi dengan rencana rendah karbohidrat lainnya)</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Link ke jQuery, Popper.js, dan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
