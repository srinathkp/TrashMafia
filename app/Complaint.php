<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
    	'name',
    	'contact_no',
    	'city',
    	'locality',
    	'street',
    	'pincode',
    	'comments',
    ];
}
