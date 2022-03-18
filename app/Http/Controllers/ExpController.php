<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Eperience;

class ExpController extends Controller
{
    public function index()
    {
        $experience = Eperience::all();
        return view('user.experience.experience_index', compact('experience'));
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'job_position' => ['required'],
            'company_name' => ['required'],
            'year_from' => ['required'],
            'year_to' => ['required'],
        ]);

        if($request->year_from > $request->year_to)
        {
            Toastr::error('Date-To must onwards to Date-from', 'Error');
            return redirect()->back();
        }

        $exp = new Eperience;
        $exp->job_position = $request->job_position;
        $exp->company_name = $request->company_name;
        $exp->year_from = $request->year_from;
        $exp->year_to = $request->year_to;
        $exp->user_id = $request->user_id;
        $exp->save();

        Toastr::success('Experience inserted successfully', 'Error');
        return redirect()->back();
    }

    public function edit($id)
    {
        $exp = Eperience::find($id);
        return response()->json($exp);
    }

    public function update(Request $request)
    {
        $validateDate = $request->validate([
            'job_position' => ['required'],
            'company_name' => ['required'],
            'year_from' => ['required'],
            'year_to' => ['required'],
        ]);

        if($request->year_from > $request->year_to)
        {
            Toastr::error('Date-To must onwards to Date-from', 'Error');
            return redirect()->back();
        }

        $exp = Eperience::find($request->id);
        $exp->job_position = $request->job_position;
        $exp->company_name = $request->company_name;
        $exp->year_from = $request->year_from;
        $exp->year_to = $request->year_to;
        $exp->save();

        Toastr::success('Experience updated successfully', 'Error');
        return redirect()->back();
    }

    public function delete($id)
    {
        $delete = Eperience::find($id)->delete();
        Toastr::success('Profesion title succesfully deleted', 'Success');
        return redirect()->back();
    }
}
