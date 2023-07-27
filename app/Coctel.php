<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Coctel
 *
 * @property $id
 * @property $Nombre
 * @property $adicional_id
 * @property $Valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Adicional $adicional
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Coctel extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'adicional_id' => 'required',
		'Valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','adicional_id','Valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function adicional()
    {
        return $this->hasOne('App\Adicional', 'id', 'adicional_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'coctel_id', 'id');
    }
    

}
