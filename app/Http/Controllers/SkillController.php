<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skill = Skill::all();
        return view('user.skill.skill_index', compact('skill'));
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'skill_title' => ['required'],
            'skill_type' => ['required'],
            'skill_mastery' => ['required'],
        ]);

        if($request->skill_mastery < 50)
        {
            Toastr::error('Skill mastery must be greater than 50', 'Error');
            return redirect()->back();
        }
        if($request->skill_mastery > 100)
        {
            Toastr::error('Skill mastery must be less than 100', 'Error');
            return redirect()->back();
        }

        $skill = new Skill;
        $skill->skill_name = $request->skill_title;
        $skill->skill_type = $request->skill_type;
        $skill->mastery = $request->skill_mastery;
        $skill->user_id = $request->user_id;
        $skill->save();

        Toastr::success('Skill have been successfully added', 'Success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $skill = Skill::find($id);
        return response()->json($skill);
    }

    public function update(Request $request)
    {
        $validateDate = $request->validate([
            'skill_title' => ['required'],
            'skill_type' => ['required'],
            'skill_mastery' => ['required'],
        ]);

        if($request->skill_mastery < 50)
        {
            Toastr::error('Skill mastery must be greater than 50', 'Error');
            return redirect()->back();
        }
        if($request->skill_mastery > 100)
        {
            Toastr::error('Skill mastery must be less than 100', 'Error');
            return redirect()->back();
        }

        $skill = Skill::find($request->id);
        $skill->skill_name = $request->skill_title;
        $skill->skill_type = $request->skill_type;
        $skill->mastery = $request->skill_mastery;
        $skill->save();

        Toastr::success('Skill have been successfully updated', 'Success');
        return redirect()->back();
    }

    public function delete($id)
    {
        $delete = Skill::find($id)->delete();
        Toastr::success('Skill have been successfully deleted', 'Success');
        return redirect()->back();
    }
}
