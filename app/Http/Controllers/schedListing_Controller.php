<?php

namespace App\Http\Controllers;


use App\Models\schedule_appointment_inquiries;
use Illuminate\Http\Request;

class schedListing_Controller extends Controller
{
    //
    public function store(Request $request){
        $data = [
            'user_id'=>$request->user_id,
            'list_id'=> $request->list_id,
            'date_schedule'=>'2023-10-31 12:32:05',
            'message'=>'testing'
        ];
        $schedListing = schedule_appointment_inquiries::create($data);

        $emailInfo = [
            'name' => 'This is name',
            'phone'=> 'This is phone',
            'email'=>  'This is email',
            'subject'=> 'This is subject',
            'message'=> 'This is message'
        ]; 

        // Mail::to('velipe@myseneca.ca')->send(new ContactFormMail($emailInfo));
        return redirect((route('userlisting.indexDetailed',$schedListing)));
    }
}
