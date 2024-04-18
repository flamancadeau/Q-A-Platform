<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\record; // Assuming Record model exists

class Answer extends Controller
{
    public function showResult()
    {
        $data = record::latest()->get();
        return view('welcome', compact('data'));
    }

    public function deleteRecord(Request $request)
    {
// dd($request->all());
// return;
        $record = record::find($request->record);

        if ($record) {
            $record->delete();
            return redirect('/')->with('success', 'Record deleted successfully!');
        } else {
            return redirect('/')->with('error', 'Record not found!');
        }
    }


//     // function, retrieve the answer by its ID and pass it to the view
    public function edit($id)
{
    $record = record::find($id);
    return view('edit',compact('record'));
}

// // update function, retrieve the answer, update it with the new input
public function update(Request $request, $id)
{
    $record = record::find($id);
    // dd($request->session()->all());
    $input = $request->all();
    $record->update($input);

    return redirect('/')->with('success','Success updated!');
}
public function index()
{
    $data = record::all();

    if ($data->count() > 0) {
        $sortedData = $data->sortBy('id');
        dd( $sortedData );
        return view('/', compact('sortedData'));
    } else {

        return view('/', compact('noDataMessage', 'No records found!'));
    }
}






}
