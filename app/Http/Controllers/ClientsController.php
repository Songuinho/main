<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    //
    public function store(Request $request)
    {

        $name = $request->name;
        $tel = $request->tel;

        $request->validate([
            "name" => "required",
            "tel" => "required",
        ]);

        Clients::create([
            "name" => $name,
            "tel" => $tel
        ]);

        $liste_clients = Clients::all();
        return view('clients')->with(["liste_clients" => $liste_clients]);
    }
}
