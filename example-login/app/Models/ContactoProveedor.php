<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoProveedor extends Model
{
    use HasFactory;


    protected $fillable = [
        'idPersonalDeConctato', 
        'nombre', 
        'apellidoPat',
        'apellidoMat',
        'correo', 
        'telefono'
       ];


}
