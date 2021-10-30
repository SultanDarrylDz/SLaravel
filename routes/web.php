<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('tentang', function(){
    return "<h1>Hallo</h1>"
    . "Selamat Datang Di Halaman Utama";
});

Route::get('profile',function(){
    $nama= "<b>Sultan Darryl Dzulfikar</b>";
    return "Nama Saya Adalah $nama";
});

Route::get('saya',function(){
    $nama= "<b>Sultan Darryl Dzulfikar</b>";
    return view ("profile", compact('nama'));
});

// ======================================================================================= //
// Tugas
Route::get('rico', function(){
    $nama= "Rico Achmad Pebiawan";
    $kelas= "XII - RPL 3";
    $alamat= "Bandung";
    $sekolah= "SMK Assalaam Bandung";
    return view ("nama.rico", compact('nama', 'kelas', 'alamat', 'sekolah'));
});

Route::get('rizky', function(){
    $nama= "Muhammad Rizky Say Afif";
    $kelas= "XII - RPL 3";
    $alamat= "Bandung";
    $sekolah= "SMK Assalaam Bandung";
    return view ("nama.rizky", compact('nama', 'kelas', 'alamat', 'sekolah'));
});

Route::get('ruslan', function(){
    $nama= "Ruslan Ramdani";
    $kelas= "XII - RPL 3";
    $alamat= "Bandung";
    $sekolah= "SMK Assalaam Bandung";
    return view ("nama.ruslan", compact('nama', 'kelas', 'alamat', 'sekolah'));
});

Route::get('aziz', function(){
    $nama= "Aziz Tubagus";
    $kelas= "XII - RPL 3";
    $alamat= "Bandung";
    $sekolah= "SMK Assalaam Bandung";
    return view ("nama.aziz", compact('nama', 'kelas', 'alamat', 'sekolah'));
});

Route::get('azhar', function(){
    $nama= "Azhar Rizky Aulia";
    $kelas= "XII - RPL 3";
    $alamat= "Bandung";
    $sekolah= "SMK Assalaam Bandung";
    return view ("nama.azhar", compact('nama', 'kelas', 'alamat', 'sekolah'));
});

// ======================================================================================= //

// Route Parameter
Route::get('posting/{id}', function($a){
    return "Halaman Posting ke - <b>$a</b>";
});

// ======================================================================================= //

// Route Optional
Route::get('post/{id?}', function($a = "(Masukan Id Anda)"){
    return "Halaman Posting ke - <b>$a</b>";
});

Route::get('biodata/{nama?}/{alamat?}/{jj?}/{tb?}/{bb?}', function(
    $a = null,
    $b = null,
    $c = null,
    $d = null,
    $e = null){
    return view ("biodata", compact('a', 'b', 'c', 'd', 'e'));
});

// ======================================================================================= //

// Mengakses Data Melalui Model
Route::get('tesmodel', function(){
    $query = App\Models\Post::all();
    return $query;
});
// Mencari Data Berdasarkan Parameter
Route::get('tesmodel/{id}', function($id){
    $query = App\Models\Post::find($id);
    return $query;
});
// Mencari Data Berdasakan field 'title' Yang Sama Dengan Parameter 's'
Route::get('tesmodel-cari/{search}', function($s){
    $query = \App\Models\Post::where('title', 'like', "%$s%")->get();
    return $query;
});
// Mengubah Judul Dari Data ke-2 Berdasarkan 'id'
Route::get('tesmodel-update', function(){
    $query = App\Models\Post::find(2);
    $query->title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});
// Mengubah Data Baru
Route::get('tesmodel-add', function(){
    $query = new App\Models\Post();
    $query->title = "Sholawat Penghapus Maksiat";
    $query->content = "Lorem Ipsum";
    $query->save();
    return $query;
});
// Menghapus Data
Route::get('tesmodel-delete/{id}', function($id){
    $query = App\Models\Post::find($id);
    $query->delete();
    return redirect ('/tesmodel');
});

// ======================================================================================= //
// Tugas Menampilkan Data
Route::get('barang', function(){
    $query = App\Models\Barang::all();
    return $query;
});

Route::get('pembeli', function(){
    $query = App\Models\Pembeli::all();
    return $query;
});

Route::get('pembelian', function(){
    $query = App\Models\Pembelian::all();
    return $query;
});

Route::get('pesanan', function(){
    $query = App\Models\Pesanan::all();
    return $query;
});

Route::get('suplier', function(){
    $query = App\Models\Suplier::all();
    return $query;
});

// ======================================================================================= //
