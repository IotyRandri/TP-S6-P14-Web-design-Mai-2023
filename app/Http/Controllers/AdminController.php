<?php

namespace App\Http\Controllers;

use App\Models\Domaine_Application;
use App\Models\HomePage;
use App\Models\Resume_Domaine_Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // Home Page
    public function home(){

        // Get Images Domaine Application
        $domaineapplication = Domaine_Application::all();

        // Add to View
        $data['domainesapplication'] = $domaineapplication;

        return view('BackOffice/index',$data);
    }

    // Form Domaine Application
    public function formdomaineapplication(Request $request){
        return view('BackOffice/AjoutDomaineApplication');
    }


    // Ajouter Domaine Application
    public function ajoutdomaineapplication(Request $request){

        // Get Parameters
        // Check if parameters are exists

        // Get Resume
        if (isset($request->titreresume)){
            $titreresume = $request->titreresume;
        }

        if (isset($request->descriptionresume)){
            $descriptionresume = $request->descriptionresume;
        }

        // Get Domaine Application
        if (isset($request->titre)){
            $titre = $request->titre;
        }
        if (isset($request->description)){
            $description = $request->description;
        }

        // Get Image and Copy to public folder
        if (isset($request->image)){

            // Get Image from request
            $image = $request->file('image');

            // Generate Unique Name Image
            $imagename = uniqid(). '.' .$image->getClientOriginalExtension();

            // Copy Image to Public Folder
            $image->move(public_path('/public/images_IA'),$imagename);

        }

        // echo $titre,$description,$imagename;


        // Create new Domaine_Application Object
        $domaine_application = new Domaine_Application();
        $domaine_application->titre = $titre;
        $domaine_application->description = $description;
        if (isset($imagename)){
            $domaine_application->image = $imagename;
        }

        

        // Save to Database
        $domaine_application->save();


        // Create new Resume
        $resume_domaine_application = new Resume_Domaine_Application();
        $resume_domaine_application->titre = $titreresume;
        $resume_domaine_application->description = $descriptionresume;

        // Get iddomaineapplication from Database
        $iddomaineapplication = Domaine_Application::where('titre',$titre)->where('description',$description)->first()->id;

        // Set iddomaineapplication of resume
        $resume_domaine_application->iddomaineapplication = $iddomaineapplication;

        // Save Resume to Database
        $resume_domaine_application->save();


        // Get Liste Domaine Application
        $domainesapplication = Domaine_Application::all();


        // Add to View
        $data['domainesapplication'] = $domainesapplication;

        return view('BackOffice/index',$data);
    }

    // Modifier Domaine Application
    public function modifierdomaineapplication(Request $request){
        
        // Get Parameters
        $id = $request->id;

        // Get By Id
        $domaineapplication = Domaine_Application::find($id);

        // Check if parameters are exists

        // Get Resume
        if (isset($request->titreresume)){
            $titreresume = $request->titreresume;
        }

        if (isset($request->descriptionresume)){
            $descriptionresume = $request->descriptionresume;
        }
        
        if (isset($request->titre)){
            $titre = $request->titre;
        }
        if (isset($request->description)){
            $description = $request->description;
        }

        if (isset($request->image)){

            // Get Image from request
            $image = $request->file('image');

            // Generate Unique Name Image
            $imagename = uniqid(). '.' .$image->getClientOriginalExtension();

            // Copy Image to Public Folder
            $image->move(public_path('images_IA'),$imagename);

        }


        // Update Values
        if (isset($titre)){
            $domaineapplication->titre = $titre;
        }
        if (isset($description)){
            $domaineapplication->description = $description;
        }
        if (isset($imagename)){
            $domaineapplication->image = $imagename;
        }

        // Save to Database
        $domaineapplication->save();

        // Get idResume from Database
        $idresume = Resume_Domaine_Application::where('iddomaineapplication',$id)->first()->id;

        // Update Resume
        $resume_domaine_application = Resume_Domaine_Application::find($idresume);

        // Update Values
        if (isset($titreresume)){
            $resume_domaine_application->titre = $titreresume;
        }
        if (isset($descriptionresume)){
            $resume_domaine_application->description = $descriptionresume;
        }
        $resume_domaine_application->save();


        // Get Liste Domaine Application
        $domainesapplication = Domaine_Application::all();

        // Add To View
        $data['domainesapplication'] = $domainesapplication;

        return view('BackOffice/ListeDomaineApplication',$data);
    }


    // Gestion Contenu Domaine Application
    public function listedomaineapplication(Request $request){

        // Get Liste Domaine Application
        $domainesapplication = Domaine_Application::all();

        // Add To View
        $data['domainesapplication'] = $domainesapplication;

        return view('BackOffice/ListeDomaineApplication',$data);
    }

    // Get Detail Domaine Application
    public function getdomaineapplication($id){

        // Get Data Domaine Application from id
        $domaineapplication = Domaine_Application::find($id);

        // Get Resume Domaine Application
        $resume = Resume_Domaine_Application::where('iddomaineapplication',$id)->first();

        // Add To View
        $data['id'] = $id;
        $data['titre'] = $domaineapplication->titre;
        $data['description'] = $domaineapplication->description;
        $data['image'] = $domaineapplication->image;
        $data['resume'] = $resume;


        return view('BackOffice/ModificationDomaineApplication',$data);
    }

    public function supprimerdomaineapplication($id){

        // Delete Resume
        $resume = Resume_Domaine_Application::where('iddomaineapplication',$id)->first();
        $resume->delete();

        // Delete Domaine Application
        $domaineapplication = Domaine_Application::find($id);
        $domaineapplication->delete();


        // Get Liste Domaine Application
        $domainesapplication = Domaine_Application::all();

        // Add To View
        $data['domainesapplication'] = $domainesapplication;

        return view('BackOffice/ListeDomaineApplication',$data);

    }


    public function formhomepage(){

        // Get Home Page Data
        $homepage = HomePage::find(1);

        // Add To View
        $data['titre'] = 'Modification Home Page';
        $data['homepage'] = $homepage;

        return view('BackOffice/ModificationHomePage',$data);
    }

    public function modifierhomepage(Request $request){

        // Get HomePage from Database
        $homepage = HomePage::find(1);


        // Get New Parameters
        if (isset($request->titre)){
            $titre = $request->titre;
        }
        if (isset($request->description)){
            $description = $request->description;
        }
        if (isset($request->image)){

            // Get Image from request
            $image = $request->file('image');

            // Generate Unique Name Image
            $imagename = uniqid(). '.' .$image->getClientOriginalExtension();

            // Copy Image to Public Folder
            $image->move(public_path('images_IA'),$imagename);
        }
        
        // Update Home Page Data
        $homepage->titre = $titre;
        $homepage->description = $description;
        if (isset($imagename)){
            $homepage->image = $imagename;
        }

        // Save to Database
        $homepage->save();

        // Add To View
        $data['titre'] = 'Modification Home Page';
        $data['homepage'] = $homepage;

        return view('BackOffice/ModificationHomePage',$data);

    }
}
