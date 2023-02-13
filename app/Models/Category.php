<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories_api";
    protected $fillable = ['name'];
    
    public function getResults($filter = null){
        
        if(!$filter)
            return $this->get();
        
            return $results = $this
                ->where("name", "LIKE", "%{$filter}%")
                ->get();
    }
}
