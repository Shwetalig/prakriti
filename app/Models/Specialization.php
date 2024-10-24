<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{

    protected $fillable = ['name', 'description', 'desc_image', 'desc1', 'desc2', 'images'];
    public $table = 'specialities';
    static public function getRecord()
    {
      
       return self::select('specialities.*' )
        ->orderBy('specialities.id','asc')
         ->paginate(20);
    }

    static public function getSingle($id)
    {
        return self::find($id);
        
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'speciality_id');
    }
    
    
}
