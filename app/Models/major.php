<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    //untuk pengisian data ke database
    protected $fillable = ['name','description'];

    public function students()
    {
        //
        return $this->hasMany(anggota::class,"major_id","id");
    }
}
