<?php

namespace App\Http\Controllers;

use App\Models\Domaine_Application;
use App\Models\HomePage;
use App\Models\Resume_Domaine_Application;
use Illuminate\Http\Request;

class Info_IA_Controller extends Controller
{
    // Home Page
    public function index()
    {

        // Get HomePage Text from Database
        $homepage = HomePage::all()->firstOrFail();

        // Get All Resume Domaine Application
        $resumes = Resume_Domaine_Application::all();

        // Add to View
        $data['homepage'] = $homepage;
        $data['resumes'] = $resumes;

        return view('FrontOffice/index',$data);
    }

    // Details Domaine Application
    public function getdetaildomaineapplication($url){

        // Separate url by -
        $array = explode("-",$url);

        // foreach($array as $value){
        //     echo $value. "\n";
        // }

        // Get Id From Array
        $id = $array[1];

        // Get Domaine From Id
        $domaineapplication = Domaine_Application::find($id);

        // Add to View
        $data['domaineapplication'] = $domaineapplication;


        return view('FrontOffice/DetailDomaineApplication',$data);
    }
}
