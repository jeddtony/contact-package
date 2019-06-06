<?php
namespace Bitfumes\Contact\Http\Controllers;
use Bitfumes\Contact\Models\Contact;
use Bitfumes\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact::contact');
    }

    public function send(Request $request){
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        // return $request->all();
        Contact::create($request->all());
    }
}
