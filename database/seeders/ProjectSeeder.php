<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   $projects =[
    [
        'project_title' =>'VIRTUAL_COURSES',
        'project_description' =>'this project Created to give a virtual courses.',
        'project_link' =>'https://www.google.com',
        'photo' =>'dark_book.jpg',
        'visibility' =>1,
    ],
    [
        'project_title' =>'Facebook',
        'project_description' =>'this project is very good project.',
        'project_link' =>'https://www.facebook.com',
        'photo' =>'blackfacebook.jpg',
        'visibility' =>1,
    ],
    [
        'project_title' =>'relaxing',
        'project_description' =>'the best project ever .',
        'project_link' =>'https://www.palestine.com',
        'photo' =>'palestineblack.jpg',
        'visibility' =>1,
    ],
    [
        'project_title' =>'restaurant',
        'project_description' =>'the best project ever. free food .',
        'project_link' =>'https://www.restaurant.com',
        'photo' =>'dark_restaurant.jpg',
        'visibility' =>1,
    ],
    [
        'project_title' =>'school',
        'project_description' =>'the best school ever. free marks .',
        'project_link' =>'https://www.school.com',
        'photo' =>'school_dark.jpg',
        'visibility' =>1,
    ]
    

   ];


   foreach($projects as $project)
     
           Project::create(
            $project
            
        );

        
    }
}
