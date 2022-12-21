<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    use HasFactory;
    public $primaryKey = 'rate_id';
    protected $tabel = "rates";
    protected $fillabel = [
        'rate_per_month','package_id'
    ];
    public function package(){
        return $this->belongsTo(Package::class, 'package_id','package_id');
    }
}
