<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;
    protected $fillable = ['name','date_birth','gender','address','major_id'];
    protected $table = 'students';

    //dibuat function baru untuk membuat foreign key
    public function major(){
        //
        return $this->belongsTo(Major::class,'major_id','id');
    }
}
