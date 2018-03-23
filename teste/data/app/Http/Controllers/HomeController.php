<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre as Genre;
use App\Musique as Musique;
use App\Objet as Objet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function acceuil()
    {
        return view ('acceuil');
    }

    public function ajouter()
    {
        return view ('ajouter');
    }

    public function rechercher()
    {
        return view ('rechercher');
    }
    
    public function update(Request $request)
    {
        $objet = Objet::findOrFail($request->input('id'));
        return view('maj',['objet'=>$objet]);
    }
    
    public function up(Request $request)
    {   
        $objet = Objet::find($request->input('id'));
        $objet->Name = $request->Name;
        $objet->Valeur1 = $request->Valeur1;
        $objet->Valeur2 = $request->Valeur2;
        $objet->save();
        return redirect('/liste');
    }

    public function show(){
        $objets = Objet::all();
        return view('liste', ['objets' => $objets]);
    }

    public function add(Request $request)
    {
        $newObjet = new Objet();
        $newObjet->Name = $request->Name;
        $newObjet->Valeur1 = $request->Valeur1;
        $newObjet->Valeur2 = $request->Valeur2;
        $newObjet->save();
        return redirect ('/liste');
    }

    public function supr(Request $request)
    {
        Objet::destroy($request->input('id'));
        return redirect ('/liste');
    }

    public function search(Request $request)
    {
        Objet::search($request->input('id'));
        return redirect ('/liste');
    }
}
