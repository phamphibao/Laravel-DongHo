<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
   	/**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    

    public function Brand()
    {
        	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
        	return $this->belongsTo('App\Model\Brand','idBrand','id');
    }

    /**
     * Products belongs to Energy.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Energy()
    {
    	// belongsTo(RelatedModel, foreignKey = energy_id, keyOnRelatedModel = id)
    	return $this->belongsTo('App\Model\Energy','idEnergy','id');
    }


    /**
     * Products belongs to Straps.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function straps()
    {
    	// belongsTo(RelatedModel, foreignKey = straps_id, keyOnRelatedModel = id)
    	return $this->belongsTo('App\Model\Straps','idStrap','id');
    }

   	/**
   	 * Products belongs to Type.
   	 *
   	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   	 */
   	public function Type()
   	{
   		// belongsTo(RelatedModel, foreignKey = type_id, keyOnRelatedModel = id)
   		return $this->belongsTo('App\Model\Type','idType','id');
   	}
}
