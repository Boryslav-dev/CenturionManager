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
        if($request->session()->exists('userId'))
        {
            $fields = $request->validate(['userId'=>'']);
            $category = Category::where(['userId'=>$fields['userId']])->get(['id','userId','categoryName']);
            $response = ['category'=>$category];
            return response($response,201);
        }
        else
        {
            return response()->view('404');
        }
    }

    //Add new category
    public function addCategory(Request $request)
    {
        $fields = $request->validate([
            'categoryName'=>'required',
            'userId'=>'required'
        ]);
        if($request->session()->exists('userId'))
        {
            Category::create(['userId' => $fields['userId'], 'categoryName' => $fields['categoryName']]);
            return $this->showCategories($request);
        }
        else
        {
            return response()->view('404');
        }
    }

    //Update current category
    public function updateCategory(Request $request)
    {
        $fields = $request->validate([
            'id'=>'required',
            'categoryName'=>'required'
        ]);
        if($request->session()->exists('userId'))
        {
            Category::where(['id' => $fields['id']])->update([
                'categoryName' => $fields['categoryName'],
            ]);
            return $this->showCategories($request);
        }
        else
        {
            return response()->view('404');
        }
    }

    //Delete current category
    public function deleteCategory(Request $request)
    {
        $fields = $request->validate(['id'=>'required']);
        if($request->session()->exists('userId'))
        {
            Category::where(['id' => $fields['id']])->delete();
            return $this->showCategories($request);
        }
        else
        {
            return response()->view('404');
        }
    }
}
