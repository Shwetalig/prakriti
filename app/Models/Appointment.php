<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name'];
    public $table = 'appointments';
    static public function getRecord()
    {
      
       return self::select('appointments.*' )
        ->orderBy('appointments.id','asc')
         ->paginate(20);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
