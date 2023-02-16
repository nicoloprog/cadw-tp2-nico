<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fait;
use Illuminate\Support\Facades\DB;

class FaitController extends Controller
{
    /**
     *
     *
     */
    public function index()
    {
        return view('fait', [
            "fait" => Fait::all()[rand(0, 50)]
        ]);
    }

    public function listeFaits()
    {
        return view('faits', [
            "faits" => Fait::all()
        ]);
    }

    public function ajoutFait()
    {
        return view('ajoutFait');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            "fact" => 'required',
        ], [
            'fact.required' => "Le champ fait est requis",
        ]);

        // Envoyer les infos au modèle
        $fait = new Fait();
        $fait->fact = $request->fact;
        $fait->length = strlen($request->fact);

        $fait->save();

        // Redirection
        return redirect()
            ->route('ajoutFait')
            ->with('ajout-fait', 'Le fait a été ajouté!');
    }

    public function destroy($id)
    {
        $fait = Fait::findOrFail($id);

        $fait->delete();

        return redirect()
            ->route('listeFaits')
            ->with('suppression-fait', 'Le fait a été supprimé!');
    }

    // /**
    //  * Affiche les détails d'une nouvelle
    //  *
    //  * @param Nouvelle $nouvelle La nouvelle
    //  */
    // public function show(Fait $fait)
    // {
    //     return view('nouvelle', [
    //         "nouvelle" => $fait
    //     ]);
    // }

    // /**
    //  * Affiche la liste des nouvelles par auteur
    //  *
    //  * @param int $id Id de l'auteur ciblé
    //  */
    // public function parAuteur($id) {
    //     $auteur = Auteur::findOrFail($id);
    //     return view('nouvelles', [
    //         "nouvelles" => Fait::where('auteur_id', $id)
    //                         ->get(),
    //         "auteur" => $auteur->nom_complet
    //     ]);
    // }


    // public function edit($id)
    // {
    //     return view('modifier', [
    //         "nouvelle" => Nouvelle::findOrFail($id),
    //         "auteurs" => Auteur::all(),
    //         "categories" => Categorie::all()
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $fait = Fait::findOrFail($id);

    //     $fait->titre = $request->titre;
    //     $fait->texte = $request->texte;
    //     $fait->longueur = Str::length($request->texte);
    //     $fait->auteur_id = $request->auteur_id;
    //     $fait->categorie_id = $request->categorie_id;

    //     $fait->save();

    //     return redirect()
    //         ->route('accueil')
    //         ->with('modification-nouvelle', 'La nouvelle a été modifiée!');
    // }
}
