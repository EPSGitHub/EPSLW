<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorporateClient;

class CorporateRequestController extends Controller
{
    public function index()
    {
        return view('frontend.services.corporate_reg');
    }


    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'employee_number' => 'required',
            'contact_person' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company_details' => 'required',

        ]);

        CorporateClient::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Thank you for your Application. we will contact you shortly.']);
    }


}
