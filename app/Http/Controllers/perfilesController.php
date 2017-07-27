<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App;

class perfilesController extends Controller
{
    
        public function profile()
    {
        return view('profile');
    }

    public function updateprofile(Request $request){
        $rules = ['image' => 'required|image|max:1024*1024*1',];
        $messages = [
            'image.required' => 'La imagen es requerida',
            'image.image' => 'Formato no permitido',
            'image.max' => 'El máximo permitido es 1 MB',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()){
            return redirect('perfiles/profile')->withErrors($validator);
        }
        else{
            $name = str_random(30) . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('perfiles', $name);
            $user = new User;
            $user->where('email', '=', Auth::user()->email)
                 ->update(['perfiles' => 'perfiles/'.$name]);
            return redirect('perfiles')->with('status', 'Su imagen de perfil ha sido cambiada con éxito');
        }
    }
}
