<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategories(Request $request)
    {
        $fields = $request->validate(['userId'=>'required']);
        $category = Category::where(['userId'=>$fields['userId']])->get(['id','userId','categoryName']);
        $response = ['category'=>$category];
        return response($response,201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addCategory(Request $request)
    {
        $fields = $request->validate(['categoryName'=>'required','userId'=>'required']);
        Category::create(['userId' => $fields['userId'], 'categoryName' => $fields['categoryName']]);
        return $this->showCategories($request);
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
