<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Domaine_Application;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    // get login info
    public function login(Request $request){
        // Verify if User or Admin

        // Get parameters
        $email = $request->email;
        $motdepasse = md5($request->motdepasse);

        // echo $email, $motdepasse;

        // If Admin exists
        $admin = Admin::where('email',$email)->where('motdepasse',$motdepasse)->first();

        // echo $admin;
        if ($admin != null){

            // Get Images Domaine Application
            $domaineapplication = Domaine_Application::all();

            // Add to View
            $data['domainesapplication'] = $domaineapplication;

            return view('BackOffice/index',$data);
        }

        // Return to Login
        return view('Login');
    }


}
