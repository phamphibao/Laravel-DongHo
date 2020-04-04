<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class energy extends Model
{
    protected $table = 'energy';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    /**
     * energy has many Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Products()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = energy_id, localKey = id)
    	return $this->hasMany('App\Model\Products','idEnergy','id');
    }
}
