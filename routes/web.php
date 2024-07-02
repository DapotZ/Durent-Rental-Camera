<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\kategoriController;
use App\Http\Middleware\EnsureAdmin;

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



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/privacypolicy', [HomeController::class, 'privacypolicy'])->name('privacypolicy');
Route::get('/regist', [HomeController::class, 'regist'])->name('regist')->middleware('guest');
Route::get('/foto/{filename?}', [HomeController::class, 'foto'])->name('foto');
Route::post('/registuser', [HomeController::class, 'registuser'])->name('registuser');


Route::get('/profile', [HomeController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profile', [HomeController::class, 'gantiprofile'])->name('gantiprofile')->middleware('auth');

Route::get('/updatepassword', [HomeController::class, 'updatepassword'])->name('updatepassword')->middleware('auth');
Route::post('/updatepassworduser', [HomeController::class, 'updatepassworduser'])->name('updatepassworduser')->middleware('auth');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'hubungikami'])->name('hubungikami');

Route::get('/detailequipment/{id}', [HomeController::class, 'detailequipment'])->name('detailequipment');

Route::get('/daftarequipment', [HomeController::class, 'daftarequipment'])->name('daftarequipment');
Route::get('/cariequipment', [HomeController::class, 'cariequipment'])->name('cariequipment');






// admin controller
Route::get('/admindashboard', [AdminController::class, 'admindashboard'])->name('admindashboard')->middleware('ensureAdmin');
Route::get('/menunggupembayaran', [AdminController::class, 'menunggupembayaran'])->name('menunggupembayaran')->middleware('ensureAdmin');
Route::get('/menunggukonfirmasi', [AdminController::class, 'menunggukonfirmasi'])->name('menunggukonfirmasi')->middleware('ensureAdmin');
Route::get('/belumdikembalikan', [AdminController::class, 'belumdikembalikan'])->name('belumdikembalikan')->middleware('ensureAdmin');


Route::get('/kelolauser', [AdminController::class, 'kelolauser'])->name('kelolauser')->middleware('ensureAdmin');
Route::get('/kelolasewa', [AdminController::class, 'kelolasewa'])->name('kelolasewa')->middleware('ensureAdmin');
Route::get('/laporan', [AdminController::class, 'laporan'])->name('laporan')->middleware('ensureAdmin');
Route::get('/resetpassword/{id}', [AdminController::class, 'showresetpassword'])->name('showresetpassword')->middleware('ensureAdmin');
Route::post('/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('resetpassword')->middleware('ensureAdmin');


Route::get('/kelolakategori', [AdminController::class, 'kelolakategori'])->name('kelolakategori')->middleware('ensureAdmin');
Route::get('/tambahkategori', [AdminController::class, 'tambahkategori'])->name('tambahkategori')->middleware('ensureAdmin');
Route::post('/tambahkategori', [AdminController::class, 'simpankategori'])->name('simpankategori')->middleware('ensureAdmin');
Route::get('/editkategori/{id}/edit', [AdminController::class, 'editkategori'])->name('editkategori')->middleware('ensureAdmin');
Route::put('/editkategori/{id}', [AdminController::class, 'ubahkategori'])->name('ubahkategori')->middleware('ensureAdmin');
Route::delete('/editkategori/{id}', [AdminController::class, 'hapuskategori'])->name('hapuskategori')->middleware('ensureAdmin');


Route::get('/kelolacontact', [AdminController::class, 'kelolacontact'])->name('kelolacontact')->middleware('ensureAdmin')->middleware('ensureAdmin')->middleware('ensureAdmin');
Route::get('/changestatus/{id}', [AdminController::class, 'changestatus'])->name('changestatus')->middleware('ensureAdmin')->middleware('ensureAdmin')->middleware('ensureAdmin');
Route::put('/changestatus/{id}', [AdminController::class, 'ubahstatus'])->name('ubahstatus')->middleware('ensureAdmin')->middleware('ensureAdmin')->middleware('ensureAdmin');


Route::get('/kelolaequipment', [AdminController::class, 'kelolaequipment'])->name('kelolaequipment')->middleware('ensureAdmin');
Route::get('/tambahequipment', [AdminController::class, 'tambahequipment'])->name('tambahequipment')->middleware('ensureAdmin');
Route::get('/editequipment/{id}/edit', [AdminController::class, 'editequipment'])->name('editequipment')->middleware('ensureAdmin');
Route::post('/tambahequipment', [AdminController::class, 'insertequipment'])->name('insertequipment')->middleware('ensureAdmin');
Route::post('/tambahequipment/{id}', [AdminController::class, 'hapusequipment'])->name('hapusequipment')->middleware('ensureAdmin');
Route::post('/editequipment/{id}/update', [AdminController::class, 'ubahequipment'])->name('ubahequipment')->middleware('ensureAdmin');


Route::get('/updatecontact', [AdminController::class, 'updatecontact'])->name('updatecontact')->middleware('ensureAdmin');
Route::post('/ubahcontact', [AdminController::class, 'ubahcontact'])->name('ubahcontact')->middleware('ensureAdmin');

Route::get('/ubahpassword', [AdminController::class, 'ubahpassword'])->name('ubahpassword')->middleware('ensureAdmin');
Route::post('/updatepasswordadmin', [AdminController::class, 'updatepasswordadmin'])->name('updatepasswordadmin')->middleware('ensureAdmin');


Route::get('/tentangkami', [AdminController::class, 'tentangkami'])->name('tentangkami')->middleware('ensureAdmin');
Route::post('/ubahtentangkami', [AdminController::class, 'ubahtentangkami'])->name('ubahtentangkami')->middleware('ensureAdmin');


Route::get('/FAQs', [AdminController::class, 'FAQs'])->name('FAQs')->middleware('ensureAdmin');
Route::post('/ubahFAQs', [AdminController::class, 'ubahFAQs'])->name('ubahFAQs')->middleware('ensureAdmin');


Route::get('/privacy', [AdminController::class, 'privacy'])->name('privacy')->middleware('ensureAdmin');
Route::post('/ubahprivacy', [AdminController::class, 'ubahprivacy'])->name('ubahprivacy')->middleware('ensureAdmin');


Auth::routes();


Route::get('/booking', [HomeController::class, 'booking'])->name('booking');




