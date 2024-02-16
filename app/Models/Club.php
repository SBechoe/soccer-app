<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

//    protected $fillable = [
//        'name',
//        'description',
//        'stadium',
//        'location',
//        'founded',
//        'logo'
//    ];
    protected $guarded = ['id'];
}
