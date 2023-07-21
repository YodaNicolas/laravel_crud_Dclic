<?php
// Illuminate\Database\Eloquent\Model
namespace App\Http\Controllers;

use App\Models\utili;
use App\Models\utilisateurs;
// use Illuminate\Database\Eloquent\Model::updated();

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register()
    {
        $users = utili::all();
        return view('admin/formajout', compact('users'));
    }

    // public function enregistrer(Request $request)
    // {
    //     $input = $request->validate([
    //         'name' => 'required|string',
    //         'prenom' => 'required|string',
    //         'date_naissance' => 'required|date',
    //         'password' => 'required|string',
            
    //         'image' => 'required|string',
    //     ]);
    //     utili::create([
    //         'name' => $request->name,
    //         'prenom' => $request->prenom,
    //         'date_naissance' => $request->date_naissance,
    //         'password' => Hash::make($request->password),

    //     ]);
    //     // $users = utili::all();
    //     return view('dashboard', compact('users'));
    // }

    public function enregistrer(Request $request)
    {
        $util = new utili();
        $util->name = $request->input('name');
        $util->prenom = $request->input('prenom');
        $util->date_naissance = $request->input('date_naissance');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/utilisateur/', $filename);
            $util->image = $filename;
        }
        $util->save();
        // return ('enregistré avec succes.');
        $users = utili::all();
        return redirect('dashboard');
    }




    public function delete($id){
        $utilisat = utili::find($id);
        $utilisat->delete();
        // $nom_complet = $user->name." ".$user->prenom;
        // utili::find($user)->delete();
        // return back()->with("successDelete", "L'utilisateur nom_complet supprimé avec succès");
        return redirect('dashboard');
    }


    public function edit($id){
        $utilisat = utili::find($id);
        return view('formedit', compact('utilisat'));
    }

    public function modifier(Request $request, $utili){
        $utilisat = utili::find($utili);
        $utilisat->name = $request->input('name');
        $utilisat->prenom = $request->input('prenom');
        $utilisat->date_naissance = $request->input('date');
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/utilisateur/', $filename);
            $utilisat->image = $filename;
        }
        $utilisat->update();
        $users = utili::all();
        
        return view('dashboard', compact('users'));
    }
}
