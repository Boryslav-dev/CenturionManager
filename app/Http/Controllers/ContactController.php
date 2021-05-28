<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactToCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function showContacts(Request $request)
    {
        if($request->session()->exists('userId'))
        {
            $fields = $request->validate(['userId'=>'']);
            $contact = Contact::where(['userId'=>session('id')])->get(['id','userId','name','mainContact','avatar','customInfo']);
            $response = ['contacts'=>$contact];
            return response()->view('contacts',($response));
        }
        else
        {
            return response()->view('404');
        }
    }

    public function addContact(Request $request)
    {
        $fields = $request->validate([
            'userId'=>'required',
            'name'=>'required',
            'mainContact'=>'required',
            'avatar'=>'',
            'customInfo'=>'',
            'category'=>''
        ]);

        if($request->session()->exists('userId'))
        {
            $contactId=Contact::create([
                'userId' => $fields['userId'],
                'name' => $fields['name'],
                'mainContact' => $fields['mainContact'],
                'avatar' => $fields['avatar'],
                'customInfo' => $fields['customInfo']
            ]);

            foreach ($fields['category'] as $categoryName)
            {
                $categoryId=Category::where([
                    'userId'=>$fields['userId'],
                    'categoryName'=>$categoryName
                ])->first()->id;

                ContactToCategory::insert([
                    'contactId'=> $contactId->id,
                    'categoryId'=>$categoryId
                ]);
            }
            return $this->showContacts($request);
        }
        else
        {
            return response()->view('404');
        }

    }

    public function updateContact(Request $request)
    {
        $fields = $request->validate([
            'id'=>'required',
            'userId'=>'required',
            'name'=>'required',
            'mainContact'=>'required',
            'avatar'=>'required',
            'customInfo'=>'required',
            'category'=>''
        ]);
        if($request->session()->exists('userId'))
        {
            Contact::where(['id' => $fields['id']])->update([
                'name' => $fields['name'],
                'mainContact' => $fields['mainContact'],
                'avatar' => $fields['avatar'],
                'customInfo' => $fields['customInfo']
            ]);

            ContactToCategory::where([
                'contactId'=>$fields['id']
            ])->delete();

            foreach ($fields['category'] as $categoryName)
            {
                $categoryId=Category::where([
                    'userId'=>$fields['userId'],
                    'categoryName'=>$categoryName
                ])->first()->id;

                ContactToCategory::insert([
                    'contactId'=> $fields['id'],
                    'categoryId'=>$categoryId
                ]);
            }
            return $this->showContacts($request);
        }
        else
        {
            return response()->view('404');
        }

    }

    public function deleteContact(Request $request)
    {
        $fields = $request->validate(['id'=>'required']);
        if($request->session()->exists('userId'))
        {
            Contact::where(['id' => $fields['id']])->delete();
            return $this->showContacts($request);
        }
        else
        {
            return response()->view('404');
        }
    }

    public function getOneContact(Request $request)
    {
        $fields = $request->validate(['id' => 'required','userId' => 'required']);
        if($request->session()->exists('userId'))
        {
            $contact = Contact::where(['id' => $fields['id']])->first();

            $categoriesOfContact = DB::table('contacts')
                ->join('contact_to_categories', 'contacts.id', '=', 'contact_to_categories.contactId')
                ->join('categories', 'categories.id', '=', 'contact_to_categories.categoryId')
                ->select('categories.categoryName')
                ->where('contacts.id','=',$fields['id'])
                ->get();

            $response = ['contact' => $contact, 'categories'=>$categoriesOfContact];
            return response()->json($response,201);
        }
        else
        {
            return response()->view('404');
        }
    }

    public function getByCategory(Request $request)
    {
        $fields = $request->validate(['userId' => 'required','categories' => 'required']);
        $inners=array();
        $conditions="WHERE ";
        if($request->session()->exists('userId'))
        {
            for($i=0;$i<count($fields['categories']);$i++)
            {
                $inner="INNER JOIN contact_to_categories contact{$i} ON contact{$i}.contactId = contacts.id ";
                array_push($inners,$inner);
                if($i==count($fields['categories'])-1)
                {
                    $conditions.="contact{$i}.categoryId = ".$fields["categories"][$i];
                }
                else
                {
                    $conditions.="contact{$i}.categoryId = ".$fields["categories"][$i]." AND ";
                }
            }

            $query = "SELECT contacts.* FROM contacts ";
            for($i=0;$i<count($inners);$i++)
            {
                $query.=$inners[$i];
            }
            $query.=$conditions;
            $results =DB::select(DB::raw($query));
            $response = ['result' => $results, 'query'=>$query];
            return response()->json($response,201);
        }
        else
        {
            return response()->view('404');
        }
    }
}

