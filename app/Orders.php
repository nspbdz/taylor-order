<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $guarded = array('id');
    protected $fillable = array(
    	'name', 
    	'address',
    	'phone',
    	'description',
    	'image_1',
    	'image_2',
    	'image_3',
    	'image_4',
    	'estimate_price',
    	'estimate_done',
    	'down_payment',
    	'created_by'
    );

    public static $rules = array(
    	'name' => 'required', 
    	'address' => 'required',
    	'description' => 'required',
    	'estimate_done' => 'required|date'
    );
}
