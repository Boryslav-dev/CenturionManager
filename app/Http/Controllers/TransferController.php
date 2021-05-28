<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactToCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    public function getAllData(Request $request){

        $fields = $request->validate([
            'id' => 'required',
        ]);

        $user = User::where('id', $fields['id'])->first();

        $contacts = Contact::where(['userId'=>$fields['id']])->get();

        $categories = Category::where(['userId'=>$fields['id']])->get();

        $categoriesOfContact = DB::table('contacts')
            ->select('contacts.*')
            ->where('contacts.userId','=',$fields['id'])
            ->get();

        $response = [
            'categoriesOfContact' => $categoriesOfContact
        ];

        return response($response, 201);
    }

    public function setData(Request $request)
    {

    }
}
