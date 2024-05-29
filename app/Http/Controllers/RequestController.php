<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RquestQueate;
use Mail;
use App\Mail\request_queate;
use App\Mail\RequestMail;
class RequestController extends Controller
{
    public function create_request_queat(Request $request)
{
    $adminEmail = 'engrabdurrahman4991@gmail.com';
    // Validate the request data
    $request->validate([
        'install_system' => 'required',
        'system_complet_by' => 'required',
        'contact-usage' => 'required',
        'solar_system_type' => 'required',
        'solar_panel_place' => 'required',
        'metarial_on_your_rof' => 'required',
        'customRadioInline1' => 'required',
        
    ]);

    // Create a new RequestQueat instance and fill it with data
    $requestQueat = new RquestQueate();
    $requestQueat->install_system = $request->input('install_system');
    $requestQueat->system_complet_by = $request->input('system_complet_by');
    $requestQueat->monthly_electric_use = $request->input('contact-usage');
    $requestQueat->solar_system_type = $request->input('solar_system_type');
    $requestQueat->solar_panel_place = $request->input('solar_panel_place');
    $requestQueat->metarial_on_your_rof = $request->input('metarial_on_your_rof');
    $requestQueat->about_your_project = $request->input('contact-projects');
    $requestQueat->f_name = $request->input('contact-first-name');
    $requestQueat->l_name = $request->input('contact-last-name');
    $requestQueat->email = $request->input('contact-email');
    $requestQueat->phone = $request->input('contact-phone');
    $requestQueat->contact_method = $request->input('customRadioInline1');
    $requestQueat->street_address = $request->input('contact-address');
    $requestQueat->city = $request->input('contact-city');
    $requestQueat->state = $request->input('contact-state');
    $requestQueat->zip_code = $request->input('contact-zip');
    $requestQueat->country = $request->input('contact-country');
    $requestQueat->ship_to_address_type = $request->input('ship_to_address_type');

    // Save the model to the database
    $requestQueat->save();
    $requestData = $request->all();
    Mail::to($adminEmail)->send(new RequestMail($requestData));
    // Return a response, such as a redirect or a success message
    return redirect()->back()->with('success', 'RequestQueat created successfully!');
}

}