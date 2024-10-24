<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'designation', 'speciality' , 'speciality_id', 'profile_image', 'active', 'is_delete'];
    public $table = 'doctors';

    static public function getRecord()
    {
      
       return self::select('doctors.*' )
        ->orderBy('doctors.id','asc')
         ->paginate(20);
    }

    static public function getSingle($id)
    {
        return self::find($id);
        
    }
    
    public function speciality()
    {
        return $this->belongsTo(Specialization::class, 'speciality_id');
    }
}
