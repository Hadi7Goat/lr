<?php

namespace App\Http\Controllers\Demande;

use App\Http\Controllers\Controller;
use App\Http\Requests\DemandeRequest;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DemandeController extends Controller
{


    public function GetAllDemandes(Request $request)
    {

        if ($request->query('id')) {
            // $demandes = Demande::find($request->query('id'));
            $demandes = Demande::where('id','=',$request->query('id'))->orderBy('created_at', 'desc')->paginate(15);
        }else{
            $demandes = Demande::orderBy('created_at', 'desc')->paginate(15);
        }
        // return dd($demandes);

        if ($demandes) {
            return view('demandes.index',compact('demandes'));
        }else{
            return view('demandes.index',compact('demandes'));
        }

    }

    public function GetDemandeParId(Request $request)
    {
        $demande = Demande::find($request->query('id'));

        if ($demande) {
            return view('demandes.parid',compact('demande'));
        }else{
            return abort(404);
        }

    }
    public function Index(Request $request)
    {
        $demande = Demande::find($request->query('id'));

        if ($demande) {
            return response([
                'find' => true,
                'data' => $demande
           ], 200);
        }else{
            return response([
                'find' => false,
           ], 200);

        }

    }
    public function Store(DemandeRequest $request)
    {

        //     return response([
        //         'hh' => 'jj'
        //    ], 201);
        $request->validated();

    //    return dd($request);

        $Demande = new Demande();


        // $Demande->user_id =  auth('sanctum')->id();

        $Demande->civilite = $request['civilite'];
        $Demande->nom = $request['nom'];
        $Demande->prenom = $request['prenom'];
        $Demande->prenom_pere = $request['prenom_pere'];
        $Demande->nom_mere = $request['nom_mere'];
        $Demande->prenom_mere = $request['prenom_mere'];
        $Demande->date_naissance = $request['date_naissance'];
        $Demande->wilaya_naissance = $request['wilaya_naissance'];
        $Demande->communen_naissance = $request['communen_naissance'];
        $Demande->num_act_naissance = $request['num_act_naissance'];
        $Demande->type_act_naissance = $request['type_act_naissance'];
        $Demande->situation_familiale = $request['situation_familiale'];
        $Demande->niveau_dinstructions = $request['niveau_dinstructions'];
        $Demande->numbre_enfants = $request['numbre_enfants'];
        $Demande->numbre_personnes = $request['numbre_personnes'];
        $Demande->age = $request['age'];
        $Demande->activite = $request['activite'];
        $Demande->duree = $request['duree'];
        $Demande->certificat = $request['certificat'];
        $Demande->experience = $request['experience'];

        $Demande->service = $request['service'];
        $Demande->wilaya = $request['wilaya'];
        $Demande->daira = $request['daira'];
        $Demande->commune = $request['commune'];
        $Demande->codepostal = $request['codepostal'];
        $Demande->adresse = $request['adresse'];
        $Demande->mobile = $request['mobile'];
        $Demande->mobile2 = $request['mobile2'];
        $Demande->email = $request['email'];
        $Demande->nin = $request['nin'];
        $Demande->piece_identite_num = $request['piece_identite_num'];
        $Demande->piece_identite_date = $request['piece_identite_date'];
        $Demande->piece_identite_wilaya = $request['piece_identite_wilaya'];
        $Demande->piece_identite_commune = $request['piece_identite_commune'];
        $Demande->habitation = $request['habitation'];
        $Demande->certificat_type = $request['certificat_type'];
        $Demande->credit_immobilier = $request['credit_immobilier'];
        $Demande->mensualite_credit_immobilier = $request['mensualite_credit_immobilier'];
        $Demande->organisme_credit_immobilier = $request['organisme_credit_immobilier'];
        $Demande->date_fin_credit_immobilier = $request['date_fin_credit_immobilier'];


        $Demande->credit_voiture = $request['credit_voiture'];
        $Demande->mensualite_credit_voiture = $request['mensualite_credit_voiture'];
        $Demande->organisme_credit_voiture = $request['organisme_credit_voiture'];
        $Demande->date_fin_credit_voiture = $request['date_fin_credit_voiture'];

        $Demande->autre_credit = $request['autre_credit'];
        $Demande->mensualite_autre_credit = $request['mensualite_autre_credit'];
        $Demande->organisme_autre_credit = $request['organisme_autre_credit'];
        $Demande->date_fin_autre_credit = $request['date_fin_autre_credit'];

        $Demande->loyer = $request['loyer'];
        $Demande->mensualite_loyer = $request['mensualite_loyer'];




        $seuccess = $Demande->save();

        if ($seuccess) {
            return response([
                'inserted' => true,
                'id' => $Demande->id
            ], 201);
        }else{
            return response([
                'inserted' => false,
                // 'token' => $token
            ], 201);
        }







    }


    public function Remove($id)
    {
        $demande = Demande::find($id);

        if ($demande) {
            $demande->delete();
        }

        return Redirect::back();
    }
}
