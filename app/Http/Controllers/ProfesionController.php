<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Profesion;


class ProfesionController extends Controller
{
    public function index($id)
    {   
        $profesion = Profesion::all();
        $prof_count = 0;
        $last_activity = '';
        foreach($profesion as $profesions)
        {
            if($profesions->user_id == $id)
            {
                $prof_count++;
            }
            $last_activity = $profesions->created_at;
        }

        return view('user.profesion.profesion_index',compact('profesion','prof_count','last_activity'));
    }
    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'profesion' => ['required', 'min:5']
        ]);

        $profesion = Profesion::all();
        $prof_count = 0;
        foreach($profesion as $profesions)
        {
            if($profesions->user_id == $request->id)
            {
                $prof_count++;
            }
        }

        echo $prof_count;

        if($prof_count < 4)
        {
            $profesion = new Profesion;
            $profesion->user_id = $request->id;
            $profesion->title = $request->profesion;
            $profesion->save();

            Toastr::success('Profesion title succesfully added', 'Success');
            return redirect()->back();
        }
        else
        {
            Toastr::info('You have reached the end of your listing professions', 'info');
            return redirect()->back();
        }
    }

    
    public function edit($id)
    {
        $profesion = Profesion::find($id);
        return response()->json($profesion);

    }

    
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'profesion' => ['required','min:5']
        ]);

        $profesion = Profesion::find($request->id);
        $profesion->title = $request->profesion;
        $profesion->save();

        Toastr::success('Profesion title succesfully updated', 'Success');
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $delete = Profesion::find($id)->delete();
        Toastr::success('Epercience title succesfully deleted', 'Success');
        return redirect()->back();
    }
}
