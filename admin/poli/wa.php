<?php
function wa_me($phone,$message) {
    return 'https://wa.me/' . $phone . '?text=' . urlencode($message);
}

// contoh pemakaian
$no_tel = '6285212345678'; // jika angka pertama adalah 0, gantikan dengan kode negara. kode indonesia adalah 62
$pesan = 'Permisi, saya tertarik untuk membeli produk anda yang bernama _"Kue Ulang Tahun + 1000 Batang Lilin"_ seharga Rp666.000';
echo 'Silahkan <a href="' . wa_me($no_tel,$pesan) . '">hubungi kami</a> jika ada pertanyaan lebih lanjut.';