<?php

namespace App\Http\Controllers;

use App\Devis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devis_non_traites = Devis::where('etat', 0)->get();
        $devis_traites = Devis::where('etat', 1)->get();
        return view('devis', compact('devis_non_traites', 'devis_traites'));
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

        $validatedData = $request->validate([
           'nom_contact' => 'string|max:255',
            'nom_projet' => 'required|max:255',
            'email' => 'required|email',
            'duree' => 'required|integer',
            'cout' => 'required|integer',
            'logo' => 'required|image',
            'cahier_charge' => 'required|mimes:pdf|max:10000',
            'description' => 'required|string',

        ]);
        $cahier_de_charge = $this->upload($request, 'cahier_charge');
        $logo = $this->upload($request, 'logo');

        Devis::create(
            [
                'user_id' => auth()->user()->id,
                'nom_contact' => $request->nom_contact,
                'nom_projet' => $request->nom_projet,
                'email' => $request->email,
                'duree' => $request->duree,
                'date_debut' => $request->debut,
                'cout' => $request->cout,
                'descriprtion' => $request->description,
                'cahier_charge' => $cahier_de_charge,
                'logo' => $logo,
                'etat' => 0,
            ]
        );

        return redirect()->to('/devis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function show(Devis $devis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function edit(Devis $devis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devis $devis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devis $devis)
    {
        //
    }
}
