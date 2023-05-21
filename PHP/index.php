<?php
require_once(__DIR__ . '/Route.php');
require_once(__DIR__ . '/Controllers/ProductController.php');

Route::resource('/', function () {
    ProductController::Index();
});

Route::resource('/add-product', function () {
    ProductController::CreateProduct();
});