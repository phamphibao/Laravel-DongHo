<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'type';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    /**
     * Type has many Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Products()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = type_id, localKey = id)
    	return $this->hasMany('App\Model\Products','idType','id');
    }
}
