<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Fabula
 *
 * @property $id
 * @property $titulo
 * @property $autor
 * @property $contenido
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Fabula extends Model
{
    
    static $rules = [
		'titulo' => 'required',
		'autor' => 'required',
		'contenido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo','autor','contenido'];



}
