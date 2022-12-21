<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    public $primaryKey='package_id';
    protected $table="packages";
    //protected $guarded = ['package_id'];
    protected $fillable = [
        'package_name', 'package_desc', 'package_rate','package_disc', 'feature_img', 'location', 'comuntiy_id'
    ];

    public function comunity () {
        return $this->belongsTo(Comunity::class,'comunity_id','comunity_id');
    }

    public function rates(){
        return $this->hasMany(Rates::class,'package_id', 'package_id');
    }

    public function disc(){
        return $this->hasMany(Disc::class,'package_id', 'package_id');
    }
}
