<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Michelada
 *
 * @property $id
 * @property $Nombre
 * @property $cerveza_id
 * @property $adicional_id
 * @property $Valor
 * @property $created_at
 * @property $updated_at
 *
 * @property Adicional $adicional
 * @property Cerveza $cerveza
 * @property Pedido[] $pedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Michelada extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'cerveza_id' => 'required',
		'adicional_id' => 'required',
		'Valor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','cerveza_id','adicional_id','Valor'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function adicional()
    {
        return $this->hasOne('App\Adicional', 'id', 'adicional_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cerveza()
    {
        return $this->hasOne('App\Cerveza', 'id', 'cerveza_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'michelada_id', 'id');
    }
    

}
