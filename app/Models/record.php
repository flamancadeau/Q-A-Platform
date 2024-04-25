<?php

namespace App\Models;
use App\records;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Answer;

class record extends Model
{
    use HasFactory;
    protected $table = 'records';
    protected $guarded = [];
   protected $fillable = [];

}

