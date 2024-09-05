// scripts.js
document.getElementById('calculate').addEventListener('click', function() {
    var weight = document.getElementById('weight').value;
    var height = document.getElementById('height').value;
    var activity = document.getElementById('activity').value;

    if (weight && height && activity) {
        // Formula kalkulasi kalori harian (BMR)
        var bmr = 10 * weight + 6.25 * height - 5 * 25 + 5; // menggunakan contoh usia 25 tahun
        var dailyCalories = bmr * activity;

        // Tampilkan hasil
        document.getElementById('result').textContent = 'Kebutuhan kalori harian Anda: ' + Math.round(dailyCalories) + ' kkal';
    } else {
        alert('Harap isi semua kolom!');
    }
});
