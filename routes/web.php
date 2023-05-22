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
    $data = [
        "app_title" => "Primi Passi",
        "page_title" => "Primi Passi",
        "paragraph" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio assumenda, dolor labore quidem totam consequuntur pariatur corporis exercitationem obcaecati similique doloremque, aspernatur officia placeat consectetur sint excepturi fugit necessitatibus reprehenderit laudantium atque! Quis quasi facere ipsum maiores dignissimos laboriosam magni nesciunt, laborum error? Iste voluptate consectetur ipsam officia veniam iusto!",
        "nav_bar" => [
            "home" => [
                "Home",
                "home"
            ],
            "contatti" => [
                "Contatti",
                "contacts"
            ],
            "third_page" => [
                "Terza Pagina",
                "third"
            ],
            "info" => [
                "Info",
                "info"
            ],
        ],
    ];
    return view('home', $data);
})->name("home");

Route::get('/contacts', function () {
    $data = [
        "app_title" => "Primi Passi",
        "page_title" => "Contatti",
        "paragraph" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio assumenda, dolor labore quidem totam consequuntur pariatur corporis exercitationem obcaecati similique doloremque, aspernatur officia placeat consectetur sint excepturi fugit necessitatibus reprehenderit laudantium atque! Quis quasi facere ipsum maiores dignissimos laboriosam magni nesciunt, laborum error? Iste voluptate consectetur ipsam officia veniam iusto!",
        "nav_bar" => [
            "home" => [
                "Home",
                "home"
            ],
            "contatti" => [
                "Contatti",
                "contacts"
            ],
            "third_page" => [
                "Terza Pagina",
                "third"
            ],
            "info" => [
                "Info",
                "info"
            ],
        ],
    ];
    return view('contacts', $data);
})->name("contacts");


Route::get('/third', function () {
    $data = [
        "app_title" => "Primi Passi",
        "page_title" => "Terza Pagina",
        "paragraph" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio assumenda, dolor labore quidem totam consequuntur pariatur corporis exercitationem obcaecati similique doloremque, aspernatur officia placeat consectetur sint excepturi fugit necessitatibus reprehenderit laudantium atque! Quis quasi facere ipsum maiores dignissimos laboriosam magni nesciunt, laborum error? Iste voluptate consectetur ipsam officia veniam iusto!",
        "nav_bar" => [
            "home" => [
                "Home",
                "home"
            ],
            "contatti" => [
                "Contatti",
                "contacts"
            ],
            "third_page" => [
                "Terza Pagina",
                "third"
            ],
            "info" => [
                "Info",
                "info"
            ],
        ],
    ];
    return view('third', $data);
})->name("third");

Route::get('/info', function () {
    $data = [
        "app_title" => "Primi Passi",
        "page_title" => "Info",
        "paragraph" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio assumenda, dolor labore quidem totam consequuntur pariatur corporis exercitationem obcaecati similique doloremque, aspernatur officia placeat consectetur sint excepturi fugit necessitatibus reprehenderit laudantium atque! Quis quasi facere ipsum maiores dignissimos laboriosam magni nesciunt, laborum error? Iste voluptate consectetur ipsam officia veniam iusto!",
        "nav_bar" => [
            "home" => [
                "Home",
                "home"
            ],
            "contatti" => [
                "Contatti",
                "contacts"
            ],
            "third_page" => [
                "Terza Pagina",
                "third"
            ],
            "info" => [
                "Info",
                "info"
            ],
        ],
    ];
    return view('info', $data);
})->name("info");
