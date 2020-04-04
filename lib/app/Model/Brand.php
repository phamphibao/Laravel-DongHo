<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true ;

    public function Products()
    {
        return $this->hasMany('App\Model\Products','idBrand','id');
    }
}
