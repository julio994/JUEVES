<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Adicional
 *
 * @property $id
 * @property $Nombre
 * @property $Valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Coctel[] $coctels
 * @property Michelada[] $micheladas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Adicional extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function coctels()
    {
        return $this->hasMany('App\Coctel', 'adicional_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function micheladas()
    {
        return $this->hasMany('App\Michelada', 'adicional_id', 'id');
    }
    

}
