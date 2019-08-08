<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table='dataorders';
    protected $primaryKey='id';
    protected $fillable = ['Order','Number','Date','Full_Name','Governorate','City','Neighborhood','Address','The_Phone','Call_Phone','Email','Occupation'];
    protected $dates =['created_at','updated_at'];

     public function Expertise()
    {
        return $this->hasMany(Expertise::class,'expertise_id','id','foreign_key');
    }

    public function Training()
    {
        return $this->hasMany(Training::class,'training_id','id','foreign_key');
    }
    public function Academic()
    {
        return $this->hasMany(Academic::class,'academic_id','id','foreign_key');
    }

    public function Identify()
    {
        return $this->hasMany(Identify::class,'ident_id','id','foreign_key');
    }

    // public function Expertise()
    // {
    //     return $this->belongsTo(Expertise::class,'expertise_id','id');
    // }

    // public function Training()
    // {
    //     return $this->belongsTo(Training::class,'training_id','id');
    // }

    // public function Academic()
    // {
    //     return $this->belongsTo(Academic::class,'academic_id','id');
    // }
    // public function Number()
    // {
    //     return $this->belongsTo(Number::class,'number_id','id');
    // }
}
