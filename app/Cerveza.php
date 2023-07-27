<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cerveza
 *
 * @property $id
 * @property $Nombre
 * @property $Valor_compra
 * @property $Valor_venta
 * @property $Cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Michelada[] $micheladas
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cerveza extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Valor_compra' => 'required',
		'Valor_venta' => 'required',
		'Cantidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Valor_compra','Valor_venta','Cantidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function micheladas()
    {
        return $this->hasMany('App\Michelada', 'cerveza_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'cerveza_id', 'id');
    }
    

}
