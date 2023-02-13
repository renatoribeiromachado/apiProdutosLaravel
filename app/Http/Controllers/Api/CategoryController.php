<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreUpdateCategory;

class CategoryController extends Controller
{
    private $category;
    
    public function __construct(Category $category) 
    {
        $this->category = $category;
    }
    
    public function index(Request $request){
        
        $categories = $this->category->getResults($request->name);
        return response()->json($categories, 200);
        
    }
    
    public function store(StoreUpdateCategory $request){
        
        $category = $this->category->create($request->all());
        return response()->json($category, 201);
        
    } 
    
    public function show($id){
        
       $category = $this->category->find($id);
       
        if(!$category)
            return response()->json(["error" => "Not found"], 404);
     
            return response()->json($category, 200); 
  
    }
    

    public function update(Request $request, $id = null){
      
        $category = $this->category->find($id);
       
        if(!$category)
            return response()->json(["error" => "Not found"], 404);
            
            $category->update($request->all());
            return response()->json($category, 200);
        
    }
    
    
    public function destroy($id = null){
        
         $category = $this->category->find($id);
       
        if(!$category)
            return response()->json(["error" => "Not found"], 404);
            $category->delete();
            return response()->json(['success', true], 204);
        
    }
    
}