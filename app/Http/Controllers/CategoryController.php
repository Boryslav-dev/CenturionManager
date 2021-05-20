<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Show all categories
    public function showCategories(Request $request)
    {
        $fields = $request->validate(['userId'=>'']);
        $category = Category::where(['userId'=>$fields['userId']])->get(['id','userId','categoryName']);
        $response = ['category'=>$category];
        return response($response,201);
    }

    //Add new category
    public function addCategory(Request $request)
    {
        $fields = $request->validate([
            'categoryName'=>'required',
            'userId'=>'required'
        ]);
        Category::create(['userId' => $fields['userId'], 'categoryName' => $fields['categoryName']]);
        return $this->showCategories($request);
    }

    //Update current category
    public function updateCategory(Request $request)
    {
        $fields = $request->validate([
            'id'=>'required',
            'categoryName'=>'required'
        ]);
        Category::where(['id' => $fields['id']])->update([
            'categoryName' => $fields['categoryName'],
            ]);
        return $this->showCategories($request);
    }

    //Delete current category
    public function deleteCategory(Request $request)
    {
        $fields = $request->validate(['id'=>'required']);
        Category::where(['id' => $fields['id']])->delete();
        return $this->showCategories($request);
    }

}
