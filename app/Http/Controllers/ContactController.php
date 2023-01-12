<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    
    public function submit(ContactRequest $request){
      
        $contact_model = new Contact();
        $contact_model->name = $request->input('name');
        $contact_model->email = $request->input('email');
        $contact_model->message = $request->input('message');

        $contact_model->save();

        return redirect()->route('page-home')->with('success', 'Сообщение успешно отправлено');
    }
 
    public function allData(){
        $contact = new Contact();
        // dd($contact->all());
        
        // dd(Contact::all());

        // return view('messages', ['data' => Contact::all() ]);
        // return view('messages', ['data' => $contact->inRandomOrder()->get() ]);
        // return view('messages', ['data' => $contact->orderBy('id', 'asc')->skip(2)->take(3)->get() ]);
        return view('messages', ['data' => $contact->where('name', 'like', 'И%' )->get() ]);
    }
}
