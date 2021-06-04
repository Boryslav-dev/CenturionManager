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
        $contacts = $request->validate([
            'userId'=>'required',
            'contacts'=>'required'
        ]);
        $numberOfContacts=0;
        foreach ($contacts['contacts'] as $contact)
        {
            Contact::create([
                'userId' => $contacts['userId'],
                'name' => $contact['name'],
                'mainContact' => $contact['mainContact'],
                'avatar' => $contact['avatar'],
                'customInfo' => $contact['customInfo']
            ]);
            $numberOfContacts++;
        }
        return response($numberOfContacts,201);
    }
}