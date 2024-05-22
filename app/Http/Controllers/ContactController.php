<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use validated;
class ContactController extends Controller
{
    public function post_contact(ContactRequest $request)
    {
        // Validate the incoming request
        $validatedData = $request->validated();
        
        // Create a new Contact instance
        $contact = new Contact();
        
        // Assign values to the contact object
        $contact->name = $validatedData['contact-name'];
        $contact->email = $validatedData['contact-email'];
        $contact->phone = $validatedData['contact-phone'];
        $contact->service = $validatedData['contact-service'];
        $contact->infos = $validatedData['contact-infos'];
        
        // Save the contact to the database
        $contact->save();
        
        // Optionally, you can return a response indicating success or redirect somewhere
        return response()->json(['message' => 'Contact saved successfully'], 200);
    }
    
}
