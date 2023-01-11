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
    
}
