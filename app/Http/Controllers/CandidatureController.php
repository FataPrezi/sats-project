<?php 

namespace App\Http\Controllers;

use App\Candidature;
use Illuminate\Http\Request;
use App\Http\Controllers\Validator;
use Illuminate\Database\Eloquent\Model;

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
     /* $validatedData = $request->validate([
      'facture_id' => 'required',
      'montant' => 'required|numeric',
      'type' => 'required',
      'comptable' => 'required', 
  ]); */
 /*  $types=Type::get();
  return view('candidature.create',compact('types'));
*/
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
  return ("nouvelle candidature ajoutée avec succès");
  return view ('login');

   /*  $newcandidature = new candidature([
      'facture' => $request('facture_id'),
      'montant' => $request->('montant'),
      'type' => $request->('type'),
      'comptable' = $request->('comptable')
  ]);
  $newcandidature->save(); */
 /*  $newcandidature = candidature::create ([
      'facture' => request('facture_id'),
       'montant' => request->('montant'),
      'type' => request->('type'),
      'comptable' => request->('comptable')
  ]); */

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