<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    //protected $fillable = ['id','dni','apepaterno','apematerno','namecomplet','nombres','fechanac','sexo','direcreal','departamento','provincia','distrito','celprin','email','ruc','estacivil','profesion','grainstruc','discapac','observac'];
    protected $fillable = ['id','dni','namecomplet','direcreal'];
}