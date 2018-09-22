<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class ContactsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return Contacts::all();
    } 


    public function viewContact($cid)
    {
        $cid = Contacts::findOrFail($cid);
        return $cid;
    } 

    public function deleteContact($cid)
    {

        $cid = Contacts::findOrFail($cid);
        $cid->delete();
        return response()->json(['message'=> 'Contact Deleted!'], 200);
    } 

    public function saveContact(Request $request)
    {
        Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'company' => $request->company,
            'job' => $request->job,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
        ]);
        return response()->json(['message'=> 'Contact Added!'], 200);
    } 

      public function updateContact(Request $request,$cid)
    {
        $contact = $request->all();

        $record = Contacts::findOrFail($cid);

        $record->update($contact);

        return response()->json(['message'=> 'Contact Updated!'], 200);
    }


}
