<?php

namespace Database\Seeders;
use App\Models\ContactInfo;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts =[
            [
                'title'=>'phone',
                'contact_info'=>'0569207768',
                'icon'=>'<i class="fa-solid fa-phone"></i>',
                'visibility'=>1,
               
            ],
            [
                'title'=>'email',
                'contact_info'=>'theawaysa@gmail.com',
                'icon'=>'<i class="fa-brands fa-facebook"></i>',
                'visibility'=>1,
            ],
            [
                'title'=>'facebook',
                'contact_info'=>'www.facebook.com',
                'icon'=>'<i class="fa-solid fa-envelope"></i>',
                'visibility'=>1,
            ]
        
        
            
        
           ];
        
        
           foreach($contacts as $contact)
             
           ContactInfo::create(
                    $contact
                    
                );
    }
}
