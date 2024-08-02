<?php

namespace App\Http\Controllers\unis;

use App\Http\Controllers\Controller;
use App\Models\unis\Unis;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Unset_;

class UnisController extends Controller
{
    //
    public function weUnis(Request $request){
        $unis = Unis::all();
        return view('unis/unis', ['unis' => $unis]);
    }

    public function weUnisMember(Request $request, $id){
        $unis = Unis::findOrFail($id);
        return view('unis/unisMember', compact('unis'));
    }

    public function weUnisUpdate(Request $request, $id){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'nationality' => 'required',
            'age' => 'required',
        ]);

        $unis = Unis::findOrFail($id);
        $unis->name = $data['name'];
        $unis->email = $data['email'];
        $unis->nationality = $data['nationality'];
        $unis->age = $data['age'];
        $unis->save();

        return redirect()->route('weUnis.all');
    }

    public function addMemberForm(Request $request){
        return view('unis/addMember');
    }

    public function addMemberSubmit(Request $request){
        $unis = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'nationality' => 'required|max:50',
            'age' => 'nullable',
        ]);

        Unis::create($unis);

        return view('unis/addMember');
    }


}
