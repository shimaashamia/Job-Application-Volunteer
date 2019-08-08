<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $table='academic_achievement';
    protected $primaryKey='id';
    protected $fillable = ['University','Specialization','average','Graduation_Year','academic_id'];
    protected $dates =['created_at','updated_at'];


    // public function Data()
    // {
    //     return $this->hasMany(Data::class,'academic_id','id','foreign_key');
    // }


    public function Data()
    {
        return $this->belongsTo(Data::class,'data_id','id');
    }
}
