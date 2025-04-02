<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'persona_idpersona'
    ];

    protected $hidden = [
        'password'
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_idpersona', 'idpersona');
    }
}