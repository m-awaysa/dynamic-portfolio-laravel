<?php

namespace App\Http\Controllers\Public;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\message;
use  App\Models\ContactInfo;

use Illuminate\Http\Request;
class ListContactInfoController extends Controller
{


  public function sent(Request $request)
        {
            $this -> validate ($request,[
                'mail_name' => ['required','max:15','alpha_dash'],
                'mail_subject' => ['required','max:60','alpha_dash'],
                'mail_body' => ['required','string','max:1000'],    
               
            ]);
            
            Mail::to('theawaysa@gmail.com')->send(new message($request));
            return redirect()->route('contact_infos');
        }

}
