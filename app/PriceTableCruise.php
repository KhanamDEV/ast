<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceTableCruise extends Model
{
    //
     protected $table = 'pricetablecruise';

    protected $fillable = [
        'tripcode','ship','shipcategory','cabintype','startdate','enddate','pricepptwin','pricesinge','availablecabins','special','status'
    ];
}



