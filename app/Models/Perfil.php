<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Perfil extends Model
{
    use HasFactory;
    use HasUuids;


    protected $table = "perfil";
    protected $keyType = 'string';

    public function user()
    {
        return $this->hasMany(Cliente::class, 'id', 'id_user');
    }

    public function perfil_catalogo()
    {
        return $this->hasMany(PerfilCatalogo::class, 'id', 'id_catalogo');
    }
}
