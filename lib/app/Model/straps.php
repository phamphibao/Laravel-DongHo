<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class straps extends Model
{
    protected $table = 'straps';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    /**
     * straps has many Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Products()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = straps_id, localKey = id)
    	return $this->hasMany('App\Model\Products','idStrap','id');
    }
}
