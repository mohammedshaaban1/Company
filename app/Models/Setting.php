<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
    * The Table associated with the Model
    *
    * @var string
I   */
    protected $table='settings';
 

    /**
    * The attributes that are mass assignable.
    * 
    * @var array
    */

    protected $guarded= [];

    /*
    *   Upload path
    *
    */
    const UPLOADPATH= 'image/';

    /**
    * fields that will handle upload document
    */
    const UPLOADFIELDS= [];


    ##------------------------------------RELATIONSHIPS
    
    ##------------------------------------ATTRIBUTES
    
    ##------------------------------------ CUSTOM FUNCTIONS
    
}
