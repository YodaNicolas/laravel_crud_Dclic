<?php

namespace App\Http\Controllers;

use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ActionController extends Controller
{

    public function index()
    {
        return view('formajout');
    }

    public function ajouter(Request $request)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'string', 'max:255'],
            'date_naissance' => ['required', 'date'],
            
        ]);

        $utilisateur = utilisateur::create([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            
        ]);


        // $utilisateur = new utilisateur();


        // $utilisateur->name = $request->input('name');
        // $utilisateur->prenom = $request->input('prenom');
        // $utilisateur->date_naissance = $request->input('date_naissance');

       
    //     if ($request->hasFile('image')) {
    //     $file = $request->file('image');
    //     // $input = $request->validate([ 'name' => 'required|string',
    //     $extension = $file->getClientOriginalExtension();
    //     $filename = time() . '.' . $extension;
    //     $file->move('upload/utilisateur/', $filename);
    //     $utilisateur->image = $filename;
    //      }else{
    //         return $request;
    //         $utilisateur->image = '';
    //      }
    //     $utilisateur->save();
                  
    //    return ('utilisateur');
        // return view('actions/utilisateur')->with('utilisateur',$utilisateur);
    }
}
