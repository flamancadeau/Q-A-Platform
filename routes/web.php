<?php

use App\Http\Controllers\Answer;
use Illuminate\Support\Facades\Route;
use \App\Models\record;


Route::get('/', function () {

    $data = record::latest()->get();

    // Check if the $data variable is empty
    if ($data->isEmpty()) {
        // If there are no records, return a view with a message
        return view('Empty questions');
    } else {
        // If records are found, return the 'task.result' view
        return view('welcome', compact('data'));
    }
});


Route::get('/index', function () {

    return view('task.index');
});

Route::post('/index', function () {
    $to_db = new record();
    $to_db->question = request('question');
    $to_db->answer = request('answer');
    $to_db->save();

    // Redirect to the welcome page with a success message
    return redirect('/')->with('success', 'Data saved successfully!');
});

Route::delete("/deleteRecord/{id}", [Answer::class, "deleteRecord"])->name("delete.record");

Route::get('/record/{id}/edit', [Answer::class, 'edit']);

// Route::GET('/record/{id}/edit',function(){

//     return view('edit.update');
// });


Route::patch('/edit/update/{id}' , [Answer::class, 'update'])->name('edit.update');
