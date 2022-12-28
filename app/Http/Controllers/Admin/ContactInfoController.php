<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
   
 public function index ()
        {
           $contact_infos = ContactInfo::paginate(10);
    
            return view('admin.contact_info.list',[
                'contact_infos' =>$contact_infos
            ]);
        }

       
     public function viewAdd ()
        {
            return view('admin.contact_info.add');
        }

    
     public function viewEdit (ContactInfo $contact_info)
        {
            return view('admin.contact_info.edit',[
                'contact_info' =>$contact_info
            ]);
        }


     public function store (Request $request)
        {
             
            $this -> validate ($request,[
                
                'info_title' => ['required','max:20','alpha_dash'],
                'contact_info' => ['required','string','max:50','unique:App\Models\ContactInfo,contact_info'],    
                'icon' => ['required','starts_with:<i class="','ends_with:"></i>','max:40'],  
            ]);
    
            ContactInfo::create([
                    
                'title' => $request->info_title,
                'contact_info' => $request->contact_info,
                'icon' => $request->icon,
                'visibility' => $request->has('visible'),

            ]);    
            
            return redirect()->route('contact_info.list');
        }



     public function edit(ContactInfo $contact_info , Request $request)
            {
            
                $this -> validate ($request,[

            
                    'new_info_title' =>  ['required','max:20','alpha_dash'],
                    'new_contact_info' => ['required','string','max:40'],  
                    'new_icon' => ['required','starts_with:<i class="','ends_with:"></i>','max:40'], 
                
                    ]);

                    
            
                    $contact_info->title = $request->new_info_title;
                    $contact_info->contact_info= $request->new_contact_info;
                    $contact_info->icon= $request->new_icon;
                    $contact_info->visibility=$request->has('visible');
                    $contact_info->save();
                
            return redirect()->route('contact_info.list');  
         }


            
     public function delete(ContactInfo $contact_info)
            {
                $contact_info->delete();
                return redirect()->route('contact_info.list'); 
            }

}
