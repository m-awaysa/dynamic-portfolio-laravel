<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Support\Facades\Mail;
use App\Mail\message;
use  App\Models\ContactInfo;

class PortfolioController extends Controller
{
    public function index()
    {

       return view('public.portfolio',[
        'skills'=>Skill::get(),
        'projects'=>Project::get(),
        'contact_infos'=> ContactInfo::get()
       ]);

    }

}
