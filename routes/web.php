<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo',function(){
    return '<h1>Hallo dunia</h1>';
});

Route::get('/biodata',function(){
    return '<h3>
    Nama: Bagas Firmansyah <br>
    Kelas : XII RPL 1 <br> 
    Tanggal Lahir : Bandung, 13 Maret 2004 <br> 
    Jenis Kelamin : Laki-Laki <br>
    Alamat : Kp. Bahuan Baleendah Andir RT09 RW 03 <br> 
    Agama : islam <br><h3>';
});

// Route Parameter !
Route::get('/input/{nama}/{kelas?}/{tanggal}/{jenis}/{alamat}/{agama}', 
function($nama, $kelas=10, $tanggal, $jenis, $alamat, $agama){
    echo "Nama Saya : ".$nama . "<br>";
    echo "kelas : ".$kelas. "<br>";
    echo "Tanggal Lahir : ".$tanggal. "<br>";
    echo "Jenis Kelamin : ".$jenis. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Agama : ".$agama. "<br>";
});

// Route Optional Parameter
Route::get('optional/{nama?}/{usia?}',
function($nama="Bagas",$usia=20){
    echo "Nama Saya : ".$nama."<br>";
    echo "Usia Saya : ".$usia;

});

// Route Ujian
Route::get('ujian/{nama}/{kelas}/{matematika?}/{inggris?}/{indonesia?}/{produktif?}',
function($nama, $kelas, $matematika=null, $indonesia=null, $inggris=null, $produktif=null){
    echo "Nama : ".$nama."<br>";
    echo "kelas : ".$kelas."<br>";
    echo "Nilai Matematika : ".$matematika."<br>";
    echo "Nilai Indonesia : ".$indonesia."<br>";
    echo "Nilai Inggris : ".$inggris."<br>";
    echo "Nilai Produktif : ".$produktif."<br>";
    $rata= ($matematika + $produktif + $inggris + $indonesia) / 4;  
    echo "Rata-Rata : ".$rata."<br>";
});

Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', 
function($a = "", $b = "", $c = "") {
    if ($a) {
        echo "Pesanan Anda : <br>";
        echo "--------------<br>";
        echo "Makanan : " . $a . "<br>";
    if ($a = $b) {
        echo "Minuman : " . $b . "<br>";
    if ($b = $c) {
        echo "Cemilan  : " . $c;
        }
    }
} else {
        echo "Anda Tidak Memesan Menu Kami<br>";
        echo "Silahkan Isi menu!";
    }
});

Route::get('hal2', function(){
    return view('halo');
});

Route::get('hal2', function(){
    $nama = "Bagas";
    $kelas= "XII RPL1";
    $tempat= "Bandung 13 Maret 2004";
    $jk= "Laki-Laki";
    $alamat= "Kp.Bahuan Baleendah RT09 RW03";
    return view('halo' , compact('nama','kelas','tempat','jk','alamat'));
});

Route::get('posting/{nama?}/{kelas?}/{jk?}',
function($nama,$kelas, $jk){
    return view('post',
    [
        'a' => $nama,
        'b' => $kelas,
        'c' => $jk 
    ]);
    
});
Route:: get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Olahraga', 'content' => 'Sepak Bola'],
        ['id' => 2, 'title' => 'Ekonomi', 'content' => 'Hutang RI ke Luar Negeri']
    ];

    return view('blog', compact('data'));
});

Route:: get('data-siswa', function(){
    $data = [
        ['nis' => 1, 'nama' => 'Bagas', 'jk' => 'Laki-Laki', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 1', 'wakel' => 'Ibu Herna'],
        ['nis' => 2, 'nama' => 'Dessy', 'jk' => 'Perempuan', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 2', 'wakel' => 'Ibu Herna'],
        ['nis' => 3, 'nama' => 'Putri', 'jk' => 'Perempuan', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 3', 'wakel' => 'Ibu Erni'],
        ['nis' => 4, 'nama' => 'Jaka', 'jk' => 'Laki-Laki', 'jurusan' => 'TKR','
        kelas' => 'XII TKR 1', 'wakel' => 'Kang Rival'],
        ['nis' => 5, 'nama' => 'Aditya', 'jk' => 'Laki-Laki', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 3', 'wakel' => 'Pak Ute'],
        ['nis' => 6, 'nama' => 'Adzyra', 'jk' => 'Perempuan', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 2', 'wakel' => 'Ibu anni'],
        ['nis' => 7, 'nama' => 'Farid', 'jk' => 'Laki-Laki', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 1', 'wakel' => 'kang Mulki'],
        ['nis' => 8, 'nama' => 'Cecep', 'jk' => 'Laki-Laki', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 2', 'wakel' => 'kang Bayu'],
        ['nis' => 9, 'nama' => 'Diki', 'jk' => 'Laki-Laki', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 1', 'wakel' => 'Kang Chandra'],
        ['nis' => 10, 'nama' => 'Fitri', 'jk' => 'Perempuan', 'jurusan' => 'RPL','
        kelas' => 'XII RPL 3', 'wakel' => 'Ms Yanti']
    ];
    return view('data-siswa', compact('data'));
});
Route:: get('siswa', function(){
    $siswas = [
        ['id'       => 1,
        'nama'      => 'Aditya',
        'username'  => 'aditya',
        'email'     => 'aditya@gmail.com',
        'alamat'    => 'Bandung',
        'mapel'     => [
                        'mapel1' => 'Bahasa Indonesia',
                        'mapel2' => 'Bahasa Inggris',
                        'mapel3' => 'Bahasa Jepang',
                    ]
                ],
            ];
    return view('siswa', compact('siswas'));
});

Route:: get('hobi', function(){
    $hobis = [
        ['nis'       => 1001,
        'nama'      => 'Adzura',
        'kelas'     => '12 RPL 1',
        'hobi'     => [
                        'hobi1' => 'Pergi ke CC',
                        'hobi2' => 'Tiktokan',
                        'hobi3' => 'Makan banyak',
                    ]
                ],
            ['nis'       => 1002,
            'nama'      => 'Bagas Firmansyah',
            'kelas'     => '12 RPL 1',
            'hobi'     => [
                            'hobi1' => 'Main Bola',
                            'hobi2' => 'Ngaji',
                            'hobi3' => 'Memancing',
                            'hobi4' => 'Selalu tersenyum',

                        ]
                    ],        
        
            ];
    return view('hobi', compact('hobis'));
});

?>
