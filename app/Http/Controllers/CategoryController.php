<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //Show all categories
    public function showCategories(Request $request)
    {
        $fields = $request->validate(['userId' => '']);
        $categoryCount = DB::table('categories')
            ->leftJoin('contact_to_categories', 'contact_to_categories.categoryId', '=', 'categories.id')
            ->leftJoin('contacts', 'contacts.id', '=', 'contact_to_categories.contactId')
            ->select('categories.id', 'categories.categoryName', DB::raw('count(contacts.id)'))
            ->where('categories.userId', $fields['userId'])
            ->groupBy('categories.id')
            ->groupBy('categories.categoryName')
            ->get();
        $response = ['category' => $categoryCount];
        return response($response, 201);
    }

    //Add new category
    public function addCategory(Request $request)
    {
        $fields = $request->validate([
            'categoryName' => 'required',
            'userId' => 'required'
        ]);
        Category::create(['userId' => $fields['userId'], 'categoryName' => $fields['categoryName']]);
        return $this->showCategories($request);
    }

    //Update current category
    public function updateCategory(Request $request)
    {
        $fields = $request->validate([
            'id' => 'required',
            'categoryName' => 'required'
        ]);
        Category::where(['id' => $fields['id']])->update([
            'categoryName' => $fields['categoryName'],
        ]);
        return $this->showCategories($request);
    }

    //Delete current category
    public function deleteCategory(Request $request)
    {
        $fields = $request->validate(['id' => 'required']);
        Category::where(['id' => $fields['id']])->delete();
        return $this->showCategories($request);
    }
}
