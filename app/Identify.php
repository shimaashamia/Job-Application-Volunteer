<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identify extends Model
{
    protected $table='identifies';
    protected $primaryKey='id';
    protected $fillable = ['id_number'];
    protected $dates =['created_at','updated_at'];

    public function Data()
    {
        return $this->belongsTo(Data::class,'data_id','id');
    }
}
