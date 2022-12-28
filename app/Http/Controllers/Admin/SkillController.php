<?php

namespace App\Http\Controllers\admin;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{


    public function index()
    {
        $skills = Skill::paginate(10);


        return view('admin.skill.list', [
            "skills" =>  $skills
        ]);
    }



    public function viewAdd()
    {

        return view('admin.skill.add');
    }


    public function viewEdit(Skill $skill)
    {


        return view('admin.skill.edit', [
            "skill" => $skill
        ]);
    }

    public function store(Request $request)
    {
      
        $this->validate($request, [

            'skill_name' => ['required', 'max:255', 'alpha_dash', 'unique:App\Models\Skill,skill_name'],
            'skill_level' => ['required', 'alpha', 'max:12', 'min:6', Rule::in(['beginner', 'intermediate','expert']),],
        ]);


        Skill::create([

            'skill_name' => $request->skill_name,
            'skill_level' => $request->skill_level,
            'visibility' => $request->has('visible'),

        ]);

        return redirect()->route('skill.list');
    
    }


    public function edit(Skill $skill, Request $request)
    {
        
        $this->validate($request, [

            'new_skill_name' => ['required', 'max:255', 'alpha_dash'],
            'new_skill_level' => ['required', 'alpha', 'max:12', 'min:6', Rule::in(['beginner', 'intermediate','expert']),],

        ]);




        $skill->skill_name = $request->new_skill_name;
        $skill->skill_level = $request->new_skill_level;
        $skill->visibility = $request->has('visible');
        $skill->save();

        return redirect()->route('skill.list');
    }


    public function delete(Skill $skill)
    {
      
        if ($skill->projects()->exists())
            return redirect()->route('skill.list')->with('status', 'You cannot remove a skill that attaches to a projects');
        else
            $skill->delete();


        return redirect()->route('skill.list');
    }
}
