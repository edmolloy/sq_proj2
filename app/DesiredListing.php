<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesiredListing extends Model
{
    //

    protected $table = 'desired_listings';
    public $timestamps = false;



    public function belongsTo() {
        return $this->belongsTo(User::class);
    }



}
