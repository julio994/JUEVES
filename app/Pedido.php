<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $Nombre
 * @property $cerveza_id
 * @property $michelada_id
 * @property $coctel_id
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Cerveza $cerveza
 * @property Coctel $coctel
 * @property Michelada $michelada
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'cerveza_id' => 'required',
		'michelada_id' => 'required',
		'coctel_id' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','cerveza_id','michelada_id','coctel_id','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cerveza()
    {
        return $this->hasOne('App\Cerveza', 'id', 'cerveza_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coctel()
    {
        return $this->hasOne('App\Coctel', 'id', 'coctel_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function michelada()
    {
        return $this->hasOne('App\Michelada', 'id', 'michelada_id');
    }
    

}
