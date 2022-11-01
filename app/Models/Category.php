<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
	
	
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';
	
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name','parent_category', 'is_active'
    ];

    
    /*
     * Add Images sizes and filters here
     */
 
    /**
     * Get all of the properties for the city.
     */
    public function scopeActive($query)
    {
        return $query->where('categories.is_active', 1);
    }
    
}
