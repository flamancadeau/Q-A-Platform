<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record; // Assuming Record model exists

class Answer extends Controller
{
    public function showResult()
    {
        $data = record::latest()->get();
        return view('welcome', compact('data'));
    }
}
