<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    
    public function submit(ContactRequest $request){
        // dd($request->input('email'));
        // $validation = $request->validate([
        //     'name' => 'min:2',
        //     'email' => 'min:10',
        //     'message'=> 'min:3|max:200'
        // ]);
        // echo '<br>';
        // return 'success submit form';
    }
    
}
