<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HQuestions extends Model
{
    protected $table = 'hquestions';
    use HasFactory;
    protected $fillable = [ 'number' , 'text' , 'g1' , 'g2' , 'g3' , 'g4' , 'true' ];
}
