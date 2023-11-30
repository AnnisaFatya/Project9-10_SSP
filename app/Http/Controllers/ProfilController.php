<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $name = "Annisa Fatya";
        $alamat = "Kota Cimahi";
        $tanggal_lahir = "11 oktober 2001";

        $data_array = array(
            "nama" => array(
                "Fatya", "Ica", "Ulan",
            ),
            "namaa" => array(
                "Nisa", "Eca", "Ulaniyang"
            )
        );

        return view(
            'profil.profil',
            compact('name', 'alamat', 'tanggal_lahir', 'data_array')
        );
    }
}