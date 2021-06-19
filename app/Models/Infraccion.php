<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infraccion extends Model
{
    use HasFactory;
    public $table = "infraccion";
    //otorgar a los atributos que sean Fillable para que sean manipulados
    protected  $fillable = ['id','estado','fecha','nombreEstablecimiento',
                'direccion', 'actaComiso','informeF','fechaFisc','observacion'];
}
