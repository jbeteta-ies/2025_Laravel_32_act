<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;

Route::view('/', 'landing.index')->name('home');
Route::view('/about', 'landing.about')->name('about');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');

Route::addRoute(['GET'], '/crear-nota', function () {
    $note = new Note();
    $note->title = "Nota de prueba";
    $note->description = "Contenido de la nota de prueba";
    $note->done = false;
    $note->save();
    return "Nota creada correctamente";
})->name('crear-nota');

Route::get('/eliminar-nota', function () {
    $note = Note::find(3); // Suponiendo que la nota tiene ID 3
    if ($note) {
        $note->delete();
        return 'Nota eliminada';
    }
    return 'Nota no encontrada';
})->name('eliminar-nota');
