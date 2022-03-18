<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Brian2694\Toastr\Facades\Toastr;

class EducationController extends Controller
{
    
    public function index()
    {
        $education = Education::all();
        return view('user.education.education_index', compact('education'));
    }

   
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'course' => ['required'],
            'school_name' => ['required'],
            'year_from' => ['required'],
            'year_to' => ['required'],
        ]);

        if($request->year_from > $request->year_to)
        {
            Toastr::error('Date-To must onwards to Date-from', 'Error');
            return redirect()->back();
        }

        $education = new Education;
        $education->course = $request->course;
        $education->school_name = $request->school_name;
        $education->year_from = $request->year_from;
        $education->year_to = $request->year_to;
        $education->user_id = $request->user_id;
        $education->save();

        Toastr::success('Education inserted successfully', 'Error');
        return redirect()->back();

    }
  
    public function edit($id)
    {
        $education = Education::find($id);
        return response()->json($education);

    }

    
    public function update(Request $request)
    {
        $validateDate = $request->validate([
            'course' => ['required'],
            'school_name' => ['required'],
            'year_from' => ['required'],
            'year_to' => ['required'],
        ]);

        if($request->year_from > $request->year_to)
        {
            Toastr::error('Date-To must onwards to Date-from', 'Error');
            return redirect()->back();
        }

        $education = Education::find($request->id);
        $education->course = $request->course;
        $education->school_name = $request->school_name;
        $education->year_from = $request->year_from;
        $education->year_to = $request->year_to;
        $education->save();

        Toastr::success('Education inserted successfully', 'Error');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $education = Education::find($id)->delete();
        Toastr::success('Item have been deleted successfully', 'Success');
        return redirect()->back();
    }
}
