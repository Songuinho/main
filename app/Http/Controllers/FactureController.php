<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factures;
use App\Models\SessionModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class FactureController extends Controller
{
    public function create(Request $req)
    {

        $session = SessionModel::all();

        dd($session);
        // dd(Session::all());

        // session(["user_session" => "connected"]); 

        // $req->session()->put("name", ["BJFT"]);
        // $req->session()->push("name", "WORKFLOW");
        // $req->session()->put("age", [12,55,49,8]);
        // // $req->session()->forget("name");
        // // $req->session()->regenerate();
        // dd($req->session()->all());

        if ($req->hasFile("facture")) {


            $name_image = $req->file("facture")->getClientOriginalName();

            $path =  $req->file("facture")->store("public/images");
        }

        $url = asset(Storage::url($path));

        Factures::create([
            "name" => $name_image,
            "path" => $url
        ]);

        $list_images = Factures::all();


        return view('welcome')->with(["list_images" => $list_images, "hasImage" => true]);
    }


    public function download(Factures $facture)
    {

        $path = $facture->path;
        $newpath = ltrim($path, 'http://127.0.0.1:8000');
        $name = $facture->name;

        return response()->download($newpath, $name);
    }
}
