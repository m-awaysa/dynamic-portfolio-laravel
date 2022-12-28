<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Project extends Model
{
    use HasFactory;
  
    
     
    protected $fillable = [
    
        'project_title',
        'project_description',
        'project_link',
        'photo',
        'visibility',
       
       
       
    ];
    
    public function skills()
    {
              return $this->belongsToMany(Skill::class);
    
    }
}
