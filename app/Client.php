<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = ['name', 'last_name','identificacion', 'telefono','direccion','user_id'];

    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations()
    {
        // TODO: Implement getQueueableRelations() method.
    }


    //Payment Relation
    public function payment(){
        return $this->belongsTo(Payment::class);
    }


}
