<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;
    public $primaryKey='comunity_id';
    protected $table="comunities";
    protected $fillable = [
        'comunity_name', 'contact', 'comunity_logo'
    ];
    public function packages(){
        return $this->hasMany(Packages::class,'comuntiy_id','comuntiy_id');
    }
}
