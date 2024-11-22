<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reserva
 *
 * @property $id
 * @property $id_usuario
 * @property $id_libro
 * @property $fecha_reserva
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro $libro
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_usuario', 'id_libro', 'fecha_reserva'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function libro()
    {
        return $this->belongsTo(\App\Models\Libro::class, 'id_libro', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'id_usuario', 'id');
    }
    
}
