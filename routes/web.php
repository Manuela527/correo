<?php

use Illuminate\Support\Facades\Route;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   // return new TestMail("Prueba");
/* el Mail::to metodo estatico to es el destinatario
*/
    $response = Mail::mailer("smtp")->to('jeferson.ardila@correo.tdea.edu.co')->send(new TestMail("Prueba"));

    dump($response);
    
});

