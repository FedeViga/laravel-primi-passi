<?php

use Illuminate\Support\Facades\Route;

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

    $welcome = "Benvenuto nella nostra Web App! Semplice, intuitiva e ricca di funzionalità: questa web app è stata progettata per rendere la tua esperienza facile e piacevole.";
    
    $features = [
        "Funzionalità 1", 
        "Funzionalità 2", 
        "Funzionalità 3", 
        "Funzionalità 4", 
        "Funzionalità 5"
    ];
    
    return view('home', compact("welcome", "features"));

})->name('home');


Route::get('/about-us', function () {

    $about = "La nostra Web App è nata dalla passione di un team di esperti con l'obiettivo di fornire soluzioni tecnologiche innovative e affidabili che aiutino le persone a migliorare la propria vita quotidiana";

    $visions = ["visione 1",
     "visione 2", 
     "visione 3"
    ];

    return view('about-us', compact("about", "visions"));

})->name('about-us');


Route::get('/faq', function () {

    $faqs = [
        "Domanda 1",
        "Domanda 2",
        "Domanda 3",
        "Domanda 4",
        "Domanda 5"
    ];

    return view('faq', compact("faqs"));

})->name('faq');
