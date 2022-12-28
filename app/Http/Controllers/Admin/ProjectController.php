<?php

namespace App\Http\Controllers\admin;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Controllers\Controller;
class ProjectController extends Controller
{
    
public function index()
    {
        
        $projects =Project::paginate(6);
        
    
    
        return view('admin.project.list',[
        "projects"=> $projects,
        
        

        ]);

    }

    
public function viewAdd()
        {
        
                $skills = Skill::get();

            return view('admin.project.add',[
                'skills' => $skills
            ]);

        }
    
public function viewEdit(Project $project)
        {
        
        
        $skills = Skill::get();
        $skillsarray = []; 
    
        foreach($skills as $skill)
        {
        
            if(!($project->skills->find($skill->id)))
                array_push($skillsarray,$skill);
            
        }

        return view('admin.project.edit',[
        "project"=> $project,
        'skillsarray'=>$skillsarray

        ]);

    }

public function store(Request $request)
            {
                //if the user change the select option value
                if($request->projectskills != null)
                foreach($request->projectskills as $id)
                {          
                if((Skill::find($id))== null)
                return redirect()->route('project.add')->with('status', 'skill not found'); 
                }



            $this -> validate ($request,[
                
                'project_title' => ['required','max:100','alpha_dash','unique:App\Models\Project,project_title'],
                'project_link' => ['required','url','unique:App\Models\Project,project_link'],
                'project_photo' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:10240'],
                'project_description' => ['required','string','max:250'],
                'projectskills' =>  ['array']
                
            
            ]);

            //store image in public
            $filePath = $request->file('project_photo');
            $filename = $filePath->hashName();
            $upload_path = base_path('./') . '/' . 'public/images/';   
            $request->file('project_photo')->move($upload_path, $filename);
                

            $lastproject =   Project::create([
                    
                'project_title' => $request->project_title,
                'project_description' => $request->project_description,
                'project_link' => $request->project_link,
                'photo' => $filename ,
                'visibility' => $request->has('visible'),

            ]);
                  //add the selected skills to the project
                Project::find($lastproject->id)->skills()->sync($request->projectskills);

            


            return redirect()->route('project.list');   

    }


public function delete(Project $project)
            {
            
            $filepath = public_path('images/'.$project->photo);
            //if you change the image name when you delete the project it will keep the image 
            //so make sure we are not stacking unused image
            if( file_exists(public_path('images/'.$project->photo)))
            {
            unlink($filepath);
            $project->delete();
            } else
            return redirect()->route('project.list')->with('status', 'image not found'); 
        

        return redirect()->route('project.list'); 
    }



public function edit(Request $request, Project $project)
        {
            //if the user change the select option value
            if($request->projectskills != null)
            foreach($request->projectskills as $id)
            {          
            if((Skill::find($id))== null)
            return redirect()->route('project.edit',$project)->with('status', 'skill not found'); 
            }

            $this -> validate ($request,[
            'new_project_title' => ['required','max:100','alpha_dash'],
            'new_project_link' => ['required','url'],
            'new_project_description' => ['required','string','max:250'],
            'projectskills' =>  ['array']
            ]);
        
             //validate the new photo when the user enter new one otherwise dont validate
            if($request->hasFile('new_project_photo'))
            {   
            $this->validate($request,
            ['new_project_photo' => ['required','image','mimes:jpg,png,jpeg,gif,svg','max:10240']]);
            
                  //remove the old image
                unlink(public_path('images/'.$project->photo));
        
                //save the new image
                $filename = $request->file('new_project_photo')->hashName();
                $upload_path = base_path('./') . '/' . 'public/images/';  
                    
                $request->file('new_project_photo')->move($upload_path, $filename);
   
        
            }
            else{
                  //if there is no new photo keep the old one
                $filename = $project->photo;
            } 
            
               
            foreach($project->skills as $skill)  
                    {
                              //remove unselected skills //its useless
                            if(!(in_array($skill->id,array($request->projectskills))))
                            {
                                $project->skills()->detach($skill->id);
                                } 
                    }
                           //add selected skills
                    $project->skills()->sync($request->projectskills);
                    
                
                      //edit the project
                    $project->project_title = $request->new_project_title;
                    $project->project_link = $request->new_project_link;
                    $project->photo =$filename;
                    $project->project_description = $request->new_project_description;
                    $project->visibility = $request->has('visible');
                    $project->save();


    

                    return redirect()->route('project.list');  

    }



}