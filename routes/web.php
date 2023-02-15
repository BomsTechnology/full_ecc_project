<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/storage-link', function () {
    $targetFolder = base_path() . '/storage/app/public/uploads';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/uploads';
    if (symlink($targetFolder, $linkFolder)) {
        echo 'Symlink process successfully completed';
    }
});

Route::view('{any}', 'welcome')->where('any', '.*');
