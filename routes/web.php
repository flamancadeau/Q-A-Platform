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
})->middleware(["auth"])->name("Index");

Route::post('/index', function () {
    $to_db = new record();
    $to_db->question = request('question');
    $to_db->answer = request('answer');
    $to_db->save();

    // Redirect to the welcome page with a success message
    return redirect('/')->with('success', 'Data saved successfully!');
});

Route::delete("/deleteRecord/{id}", [Answer::class, "deleteRecord"])
->middleware(["auth"])
->name("delete.record");

Route::get('/record/{id}/edit', [Answer::class, 'edit'])
->middleware(["auth"])
->name("edit");




Route::patch('/edit/update/{id}' , [Answer::class, 'update'])->name('edit.update');
Route::get('/welcome', function () {
    return view('/');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




