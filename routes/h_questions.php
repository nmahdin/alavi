<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\h_questions;
use \App\Models\HQuestions;

Route::get('/', function () {
    return 'questions';
});

Route::get('/all', [h_questions::class , 'all'])->name('question.all');

Route::get('/create', [h_questions::class , 'create'])->name('question.creat');
Route::post('/create', [h_questions::class , 'create_q'])->name('question.creat');

Route::get('/detail/{id}' , [h_questions::class , 'detail']);

Route::get('/edit/{id}' , [h_questions::class , 'edit']);
Route::put('/edit/{id}' , [h_questions::class , 'edit_put']);

Route::delete('/d/{id}' , [h_questions::class , 'delete']);





Route::get('/config', function () {
    return 'questions.config';
})->name('questions.config');

