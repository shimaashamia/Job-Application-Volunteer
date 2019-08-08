<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table='training_courses';
    protected $primaryKey='id';
    protected $fillable = ['name_course','Place_get','Date_get','number_hours','training_id'];
    protected $dates =['created_at','updated_at'];

    // public function Data()
    // {
    //     return $this->hasMany(Data::class,'training_id','id','foreign_key');
    // }

    public function Data()
    {
        return $this->belongsTo(Data::class,'data_id','id');
    }
}
