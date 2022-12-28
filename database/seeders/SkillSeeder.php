<?php

namespace Database\Seeders;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
   $skills =[
    [
        'skill_name' =>'Coding',
        'skill_level' =>'expert',
        'visibility' =>1,
    ],
    [
        'skill_name' =>'eating',
        'skill_level' =>'expert',
        'visibility' =>1,
    ],
    [
        'skill_name' =>'searching',
        'skill_level' =>'intermediate',
        'visibility' =>1,
    ],
    [
        'skill_name' =>'speed',
        'skill_level' =>'beginner',
        'visibility' =>1,
    ],
    [
        'skill_name' =>'patient',
        'skill_level' =>'expert',
        'visibility' =>1,
    ]
    

   ];


   foreach($skills as $skill)
     
           Skill::create(
            $skill
            
        );
    }
}
