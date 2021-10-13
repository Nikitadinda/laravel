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
Route::get('about',function(){
    return "<h1>Hello</h1>"
    . "<br> Selamat datang di web saya"
    . "<br> Laravel emang keren";
});
Route::get('profile',function(){
    $nama ="ucup";
    return "Nama Saya<b>$nama</b>";
});

Route::get('post',function(){
    return "Halaman post 1";
});
//Route parameter
Route::get('post/{id}',function($a){
    return "Halaman Post ke - <b>$a</b>";
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
        . "<br> Minuman : <b>$b</b>"
        . "<br> Cemilan : <b>$c</b>";
    }
    return "$pesan";
});
?>