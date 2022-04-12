<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Htttp\Requests\ContactValidation;
use Symfony\Component\CssSelector\Node\FunctionNode;

class ContactController extends Controller
{


    public Function index(){
        $contact = Contact::get();
        return view('contact.index',compact('contact'));
    }


    public function created(){
        return view('contact.create');
    }
    public function store(ContactValidation $request){
        // create is a inbuilt function
       // And Contact is model
       Contact::create([
           'name'=>$request->get('name'),
           'address'=>$request->get('address'),
           'mobile'=>$request->get('mobile')
       ]);
       return redirect()->back();
    }

    public function edit($id){
        $contact =Contact::findOrFail($id);
         return view('contact.edit',compact('contact'));
    }

    public function update($id){
       $contact =Contact::findOrFail($id);
       $contact->name = request('name');
       $contact->address =request('address');
       $contact->mobile =request('mobile');
       $contact->save();
       return redirect()->to('/contact');
    }

    public function view($id){
        $contact = Contact::findOrFail($id);
        return view('contact.view',compact('contact'));
    }

    public function delete($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
           return redirect()->to('/contact');
    }
}
