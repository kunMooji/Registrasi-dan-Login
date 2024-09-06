document.getElementById('calculate').addEventListener('click', function() {
    var weight = parseFloat(document.getElementById('weight').value);
    var height = parseFloat(document.getElementById('height').value);
    var activity = parseFloat(document.getElementById('activity').value);
    var age = parseFloat(document.getElementById('age').value); // Tambahkan input untuk usia

    if (!isNaN(weight) && !isNaN(height) && !isNaN(activity) && !isNaN(age)) {
        // Formula kalkulasi kalori harian (BMR)
        var bmr = 10 * weight + 6.25 * height - 5 * age + 5; // Menggunakan input usia
        var dailyCalories = bmr * activity;

        // Tampilkan hasil
        document.getElementById('result').textContent = 'Kebutuhan kalori harian Anda: ' + Math.round(dailyCalories) + ' kkal';
    } else {
        alert('Harap isi semua kolom dengan benar!');
    }
});
