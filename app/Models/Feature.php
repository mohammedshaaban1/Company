<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    /**
    * The Table associated with the Model
    *
    * @var string
I   */
    protected $table='Features';
 

    /**
    * The attributes that are mass assignable.
    * 
    * @var array
    */

    protected $guarded= ['id'];

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
