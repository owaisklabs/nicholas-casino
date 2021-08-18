<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contact_detail = Contact::all();
       return view('admin.Contact.contact',compact('contact_detail'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        if($request->id){
            $contact_view = Contact::find($request->id);
            return ['contact_view'=>$contact_view];
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        Contact::find($id)->delete();
        return ['message'=>'success'];
    }

//     public function search_user_contact(Request $request){

//        $contacts = Contact::where('created_at', '!=', NULL);

//        if(isset($request['name'])){
//         $contacts->where('name', 1);
//     }

//     if(isset($request['email'])){
//         $contacts->where('email', 1);
//     }

//     if(isset($request['contact_no'])){
//         $contacts->where('contact_no', 1);
//     }
//     if(isset($request['message'])){
//         $contacts->where('message', 1);
//     }

//     return view('admin.Contact.contact',compact('contacts,contact_detail'));
// }
}
