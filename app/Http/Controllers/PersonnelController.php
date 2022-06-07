<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Personnel;
use App\Models\Ville;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnel = Personnel::all();
        $bank = Bank::all();
        $ville = Ville::all();
        return view('personnel.index',compact('personnel','ville','bank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personnel = new Personnel();
        $personnel->nom_complet = $request->nom_complet;
        $personnel->ville_id = $request->ville_id;
        $personnel->bank_id = $request->bank_id;
        $personnel->telephone = $request->telephone;
        $personnel->civilite = $request->civilite;
        $personnel->sexe = $request->sexe;
        $personnel->date_de_naissance = $request->date_de_naissance;
        $personnel->numero_passport = $request->numero_passport;
        $personnel->addres_personnel = $request->addres_personnel;
        $personnel->save();
        return redirect()->route('personnel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personnel = Personnel::find($id);
        $bank = Bank::all();
        $ville = Ville::all();
        return view('personnel.edit',compact('personnel','ville','bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personnel = Personnel::find($id);
        $personnel->ville_id = $request->ville_id;
        $personnel->bank_id = $request->bank_id;
        $personnel->telephone = $request->telephone;
        $personnel->civilite = $request->civilite;
        $personnel->sexe = $request->sexe;
        $personnel->date_de_naissance = $request->date_de_naissance;
        $personnel->numero_passport = $request->numero_passport;
        $personnel->addres_personnel = $request->addres_personnel;
        $personnel->update();
        return redirect()->route('personnel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnel = Personnel::find($id);
        $personnel->delete();
        return redirect()->route('personnel.index');
    }
}
