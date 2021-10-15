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

Route::get('/',function(){
    return view ('welcome');
});
Route::get('about',function(){
    return view ('tentang');
});
Route::get('about',function(){
    $nama ="ucup";
    return view ('profile',compact('nama'));
});
//buatlah sebuah route bernama biodata
//didalamnya ada 5 variable data
//nama,umur,alamat,cita-cita,hobi
//kirim data tersebut ke view yang bernama biodata juga
Route::get('data',function(){    
    $nama ="Nikita";
    $umur ="17";
    $alamat ="Bandung";
    $citacita ="pengusaha";
    $hobi ="menggambar";
    return view ('biodata',compact('nama','umur','alamat','citacita','hobi'));
});
Route::get('barang',function(){    
    $id_barang =11;
    $nama_barang ="sepatu";
    $harga =250000;
    $stok =50;
    $id_supplier =132453;
    return view ('barang',compact('id_barang','nama_barang','harga','stok','id_supplier'));
});
Route::get('supplier',function(){    
    $id_supplier =11;
    $nama_supplier ="gustina";
    $no_telp ="08783564";
    $alamat ="bandung";
    return view ('supplier',compact('id_supplier','nama_supplier','no_telp','alamat'));
});
Route::get('pembeli',function(){    
    $id_pembeli =11;
    $nama_pembeli ="arianto";
    $jk ="laki-laki";
    $no_telp ="089764265";
    $alamat ="bandung";
    return view ('pembeli',compact('id_pembeli','nama_pembeli','jk','no_telp','alamat'));
});
Route::get('pembayaran',function(){    
    $id_pembayaran =11;
    $tgl_bayar ="14-06-2021";
    $total_bayar =500000;
    $id_transaksi =11;
    return view ('pembayaran',compact('id_pembayaran','tgl_bayar','total_bayar','id_transaksi'));
});
Route::get('transaksi',function(){    
    $id_transaksi =11;
    $id_barang =11;
    $id_pembeli =11;
    $tanggal ="15-05-2021";
    $keterangan="terimakasih";
    return view ('transaksi',compact('id_transaksi','id_barang','id_pembeli','tanggal','keterangan'));
});
Route::get('book',function(){
    $books = [
        ['id' => 1, 'tittle' => 'Belajar Laravel itu Mudah'],
        ['id' => 2, 'tittle' => 'Belajar Baca Huruf Hijaiyah'],
        ['id' => 3, 'tittle' => 'Belajar Baca Aksara sunda'],
    ];
    return view('book',compact('books'));
});
Route::get('film',function(){    
    $film = [
        ['id' => '1', 'judul' => 'God of war',
         'sinopsis' => 'Lorem ipsum',
         'penulis' => 'xxx',
         'bahasa' => 'inggris',
         'aktor' => [
        'aktor1' => 'zeus',
        'aktor2' => 'medusa',
        'aktor3' => 'hely',
        'aktor4' => 'vincent',
        'aktor5' => 'sammo',
         ]
         ],
         ['id' => '2', 'judul' => 'Dilan',
         'sinopsis' => 'lorem ipsum',
         'penulis' => 'pidi baiq',
         'bahasa' => 'indonesia',
         'aktor' => [
        'aktor1' => 'iqbal ramadhan',
        'aktor2' => 'vanesha',
        'aktor3' => 'zara',
        'aktor4' => 'yoriko',
        'aktor5' => 'ceu popon',
         ]
         ],
         ['id' => '3', 'judul' => 'hunterxhunter',
         'sinopsis' => 'Lorem ipsum',
         'penulis' => 'yoshihiro togashi',
         'bahasa' => 'jepang',
         'aktor' => [
        'aktor1' => 'gon',
        'aktor2' => 'killua',
        'aktor3' => 'hisoka',
        'aktor4' => 'leorio',
        'aktor5' => 'kurapika',
         ]
         ],
         ['id' => '4', 'judul' => 'naruto',
         'sinopsis' => 'Lorem ipsum',
         'penulis' => 'masashi kishimoto',
         'bahasa' => 'jepang',
         'aktor' => [
        'aktor1' => 'naruto',
        'aktor2' => 'sasuke',
        'aktor3' => 'sakura',
        'aktor4' => 'madara',
        'aktor5' => 'hinata',
         ]
         ],
         ['id' => '5', 'judul' => 'one piece',
         'sinopsis' => 'Lorem ipsum',
         'penulis' => 'xxx',
         'bahasa' => 'jepang',
         'aktor' => [
        'aktor1' => 'luffy',
        'aktor2' => 'nami',
        'aktor3' => 'sanji',
        'aktor4' => 'kaido',
        'aktor5' => 'nami',
         ]
         ]
         ];
    return view ('film',compact('film'));
});
Route::get('post',function(){
    return "Halaman post 1";
});
//Route parameter
Route::get('post/{halaman}',function($a = 1){
    return view('post',['posting' => $a]);
});
//nuatlah route "bio"dengan parameter
//nama,umur & alamat
Route::get('bio/{nama}/{umur}/{alamat}',function($d,$e,$c){
    return "<h1>Biodata saya</h1>"
    . "<br>Nama : $d"
    . "<br>Umur : $e"
    . "<br>Alamat : $c";
});
//Route optional parameter
Route::get('hal/{halaman?}',function($a = 1){
    return "halaman post ke - <b>$a</b>";
});
//Route optional parameter
Route::get('pesan/{makanan?}/{minuman?}/{cemilan?}',function($a = null,$b = null,$c = null){
    if ($a == null && $b == null & $c == null){
        $pesan = "<h2><b>Anda tidak pesan,silahkan pulang</h2></b>";
    }
    if($a != null){
        $pesan ="<b><h2>Anda Memesan</b></h2>"
        . "<br>Makanan : <b>$a</b>";
    }
    if($a != null && $b != null){
        $pesan = "<b><h2>Anda Memesan</b></h2>"
        . "<br> Makanan : <b>$a</b>"
        . "<br> Minuman : <b>$b</b>";
    }
    if($a != null && $b != null && $c != null){
        $pesan = "<b><h2>Anda Memesan</b></h2>" 
        . "<br> Makanan : <b>$a</b>"
        . "<br> Minuman: <b>$b</b>"
        . "<br> Cemilan : <b>$c</b>";
    }
    return "$pesan";
});
?>