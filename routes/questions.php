<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Questoins;
use \App\Models\Questions;

Route::get('/', function () {
    return 'questions';
});

Route::get('/config' , [Questoins::class , 'config'])->name('question.config');
Route::post('/config' , [Questoins::class , 'config_put'])->name('question.config.p');

Route::get('/all', [Questoins::class , 'all'])->name('question.all');

Route::get('/create', [Questoins::class , 'create'])->name('question.creat');
Route::post('/create', [Questoins::class , 'create_q'])->name('question.creat');

Route::get('/detail/{id}' , [Questoins::class , 'detail']);

Route::get('/edit/{id}' , [Questoins::class , 'edit']);
Route::put('/edit/{id}' , [Questoins::class , 'edit_put']);

Route::delete('/d/{id}' , [Questoins::class , 'delete']);





