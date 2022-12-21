<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discs extends Model
{
    use HasFactory;
    use HasFactory;
    public $primaryKey = 'disc_id';
    protected $tabel = "Discs";
    protected $fillabel = [
        'disc_ref', 'package_id'
    ];
    public function package(){
        return $this->belongsTo(Package::class, 'package_id','package_id');
    }
}
