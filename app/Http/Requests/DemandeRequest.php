<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'email' => 'required|email|unique:users',
            // 'name' => 'required|string|max:50',
            // 'password' => 'required',


            'civilite'=> 'required|string|max:255',
            'nom'=> 'required|string|max:255',
            'prenom'=> 'required|string|max:255',
            'prenom_pere'=> 'required|string|max:255',
            'nom_mere'=> 'required|string|max:255',
            'prenom_mere'=> 'required|string|max:255',
            'date_naissance'=> 'required|date',
            'wilaya_naissance'=> 'required|string|max:255',
            'communen_naissance'=> 'required|string|max:255',
            'num_act_naissance'=> 'required|string|max:255',
            'type_act_naissance'=> 'required|string|max:255',
            'situation_familiale'=> 'required|string|max:255',
            'niveau_dinstructions'=> 'required|string|max:255',
            'numbre_enfants'=> 'required|string|max:255',
            'numbre_personnes'=> 'required|string|max:255',
            'age'=> 'required|string|max:255',
            'activite'=> 'required|string|max:255',
            'duree'=> 'required|string|max:255',
            'certificat'=> 'required|string|max:255',
            'experience'=> 'required|string|max:255',

            'service' => 'required|string|max:255',


            'wilaya' => 'required|string|max:255',
            'daira' => 'required|string|max:255',
            'commune' => 'required|string|max:255',
            'codepostal' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'mobile2' => 'string|max:255|nullable',
            'email' => 'required|email|max:255',
            'nin' => 'required|string|max:255',
            'piece_identite_num' => 'required|string|max:255',
            'piece_identite_date' => 'required|date',
            'piece_identite_wilaya' => 'required|string|max:255',
            'piece_identite_commune' => 'required|string|max:255',
            'habitation' => 'required|string|max:255',
            'certificat_type' => 'string|max:255|nullable',

            'credit_immobilier' => 'required|string|max:255',
            'mensualite_credit_immobilier' => 'string|max:255|nullable',
            'organisme_credit_immobilier' => 'string|max:255|nullable',
            'date_fin_credit_immobilier' => 'date|nullable',

            'credit_voiture' => 'required|string|max:255',
            'mensualite_credit_voiture' => 'string|max:255|nullable',
            'organisme_credit_voiture' => 'string|max:255|nullable',
            'date_fin_credit_voiture' => 'date|nullable',

            'autre_credit' => 'required|string|max:255',
            'mensualite_autre_credit' => 'string|max:255|nullable',
            'organisme_autre_credit' => 'string|max:255|nullable',
            'date_fin_autre_credit' => 'date|nullable',

            'loyer' => 'required|string|max:255',
            'mensualite_loyer' => 'string|max:255|nullable',
        ];
    }
}
