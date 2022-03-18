<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Award;

class AwardController extends Controller
{
    public function index()
    {
        $award = Award::all();
        return view('user.award.award_index', compact('award'));
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'award' => ['required'],
            'company_name' => ['required'],
            'year_from' => ['required'],
            'year_to' => ['required'],
        ]);

        if($request->year_from > $request->year_to)
        {
            Toastr::error('Date-To must onwards to Date-from', 'Error');
            return redirect()->back();
        }

        $award = new Award;
        $award->award_title = $request->award;
        $award->company_name = $request->company_name;
        $award->year_from = $request->year_from;
        $award->year_to = $request->year_to;
        $award->user_id = $request->user_id;
        $award->save();

        Toastr::success('Award Title has been save', 'Success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $award = Award::find($id);
        return response()->json($award);
    }

    public function update(Request $request)
    {
        $validateDate = $request->validate([
            'award' => ['required'],
            'company_name' => ['required'],
            'year_from' => ['required'],
            'year_to' => ['required'],
        ]);

        if($request->year_from > $request->year_to)
        {
            Toastr::error('Date-To must onwards to Date-from', 'Error');
            return redirect()->back();
        }

        $award = Award::find($request->id);
        $award->award_title = $request->award;
        $award->company_name = $request->company_name;
        $award->year_from = $request->year_from;
        $award->year_to = $request->year_to;
        $award->save();

        Toastr::success('Award Title has been save', 'Success');
        return redirect()->back();
    }

    public function delete($id)
    {
        $delete = Award::find($id)->delete();
        Toastr::success('Award title succesfully deleted', 'Success');
        return redirect()->back();
    }
}
