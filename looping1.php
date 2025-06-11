<?php
// Fungsi untuk mencetak lirik "Anak Ayam Turun"
function anakAyamTurun() {
    // Jumlah anak ayam
    $jumlahAnakAyam = 30;

    // Loop untuk mencetak lirik
    for ($i = $jumlahAnakAyam; $i > 0; $i--) {
        if ($i == 1) {
            echo "anak ayam turun $i , tinggal induknya<br>";
        } else {
            echo "anak ayam turun satu,tinggal  " . ($i - 1) . " .<br>";
        }
    }

    // Menyatakan induknya
    
}

// Panggil fungsi
anakAyamTurun();
?>