<?php

use \App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [Admin::class , 'data_member'])->name('admin.dashboard');

Route::get('/members/all', [Admin::class , 'all_member'])->name('members.all');
Route::get('/members/data', [Admin::class , 'data_member'])->name('members.data');

Route::get('/members/edit', [Admin::class , 'member_edit'])->name('member.edit');
Route::post('/members/edit', [Admin::class , 'member_edit_post']);

Route::get('/edit/user' , [Admin::class , 'config_user'])->name('config.user');
Route::post('/edit/user' , [Admin::class , 'config_user_post']);

Route::prefix('/config')->middleware('full.admin')->group(function () {
    Route::get('/questions' , [Admin::class , 'config_question'])->name('config_question');
    Route::post('/questions' , [Admin::class , 'config_question_update']);
    Route::get('/all' , [Admin::class , 'config_all'])->name('config.all');
    Route::post('/all' , [Admin::class , 'config_all_update']);
    Route::get('/admins' , [Admin::class , 'config_show_admins'])->name('config.admins');
    Route::delete('/d/{user}' , [Admin::class , 'delete_admin'])->name('admin.delete');
});

