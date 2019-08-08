<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $table='scientific_expertise';
    protected $primaryKey='id';
    protected $fillable = ['Workplace','Start_Date','Expiry_date','Occupationn','expertise_id'];
    protected $dates =['created_at','updated_at'];

    // public function Data()
    // {
    //     return $this->hasMany(Data::class,'expertise_id','id','foreign_key');
    // }

    public function Data()
    {
        return $this->belongsTo(Data::class,'data_id','id');
    }
}
