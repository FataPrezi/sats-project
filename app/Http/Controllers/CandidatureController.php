<?php 

namespace App\Http\Controllers;

use App\Candidature;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;

class CandidatureController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
     // validation des donnees
       $validatedData = $request->validate(
        [
            'nom' => ['required','string','max:200'],
            'prenom' => ['required','string','max:255'],
            'naissance' => ['required','string','max:255'],
            'identification_nationale' => ['required','string','max:500'],
            'statut' => ['required','string','max:255'],
            'etudes' => ['required','string','max:255'],
            'telephone' => ['required','integer'],
            'email' => ['required','email','max:50','unique:candidature,email'],
        ]
    ); 
   // return view('login-page'); 

//enregistrement des donnees dans la base
  $candidature=new Candidature;
  $candidature->nom = request ('nom');
  $candidature->prenom = request ('prenom');
  $candidature->naissance = request('naissance');
  $candidature->identification_nationale = request ('identification_nationale');
  $candidature->statut = request ('statut');
  $candidature->etudes = request ('etudes');
  $candidature->telephone = request ('telephone');
  $candidature->email = request ('email');
      $candidature->save();
      session()->flash('message','Candidature enregistrée avec succès');
      return back();
      
      //return redirect('login')->with('key', 'You have done successfully');
//flash("candidature enregistrée avec succès")->succes();
      //return ("candidature enregistrée avec succès");
//return redirect('/login');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>