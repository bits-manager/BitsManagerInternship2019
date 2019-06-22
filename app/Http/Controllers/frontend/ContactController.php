<?php 

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\MyLibs\Repositories\ContactRepository;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
      public function index(Request $request)
    {

      
 
        return view('contacts',compact('contacts'));
        return view('frontend.contact.contact');
        
    }

    public function create(){
        return view('contacts.contact');
    }

    public function storeContact(){
 
        $contact = new Contact();
 
        $contact->name = request('name');
        $contact->subject = request('subject');
         $contact->email = request('email');
          $contact->message = request('message');
 
        $contact->save();
 
        return redirect('/contacts');
 
    }
  //    public function store(Request $request)
  //  {
  //      $this->validate($request, [
  //       'name' => 'required',
		// 'subject' => 'required',
  //       'email' => 'required|email',
  //       'message' => 'required'
  //       ]);
 
  //     Contact::create($request->all()); 
   
  //   \Mail::send('emails.contacts',
  //      array(
  //          'name' => $request->get('name'),
  //          'email' => $request->get('email'),
		//    'subject' => $request->get('subject'),
  //          'user_message' => $request->get('message')
  //      ), function($message) use ($request)
  //  {
  //     $message->from('bluesky@gmail.com');
  //     $message->to('user@gmail.com', 'Admin')->subject($request->get('subject'));
  //  });
 
  //   return back()->with('success', 'Thanks for contacting us!'); 
  //  }
}





