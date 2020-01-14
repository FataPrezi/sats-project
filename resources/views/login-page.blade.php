@extends('default')
@section('content')

<form action='{{route('candidatures.store')}}' method='' >
  <table align='center'  BGCOLOR="#7B68EE" cellpadding="10" >
       <tr><th colspan="2">Déposer sa candidature</th></tr>  
    <tr>
      <td><label for="nom">NOM</label> </td>
      <td> <input type="text" class="form-control" id="nom" name="name" aria-describedby="nom" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="prenom">PRENOM</label> </td>
        <td> <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenom" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="email">EMAIL</label> </td>
        <td> <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="telephone">TELEPHONE</label> </td>
        <td> <input type="text" class="form-control" id="telephone" name="telephone" aria-describedby="telephone" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="naissance">NAISSANCE</label> </td>
        <td> <input type="text" class="form-control date-picker" placeholder="ANNEE/MM/JJ"name="naissance" id="naissance" value="" data-datepicker-color="primary" /> </td>
    </tr>
    <tr>
        <td><label for="identification_nationale">CIN/PASSEPORT</label> </td>
        <td> <input type="text" class="form-control" id="identification_nationale" name="identification_nationale" aria-describedby="identification_nationale" placeholder=""> </td>
    </tr>
    <tr>
      <td>
        <label class="form-check-label" for="statut">
          Marié
        </label> <br> <input class="form-control" type="checkbox" value="marie" id="statut" name="statut"> </td> 
        <td><label class="form-check-label" for="statut">
            Celibataire
          </label> <br> <input class="form-control" type="checkbox" value="celibat" id="statut" name="statut" checked="checked"> </td> </td>
    </tr>
    <tr>
      <td><label for="etudes">NIVEAU ETUDES</label></td>
      <td><select name="etudes" id="etudes">
          <option selected>Choisir le niveau</option>
          <option value="elementaire">Elementaire</option>
          <option value="college">College</option>
          <option value="lycee">Lycee</option>
          <option value="superieures">Etudes supérieures</option>
        </select></td>
    </tr>
    <tr>
      <td><button type="submit" class="btn btn-dark">Envoyer</button></td>
      <td><button type="cancel" class="btn btn-dark">Annuler</button></td>
    </tr>
  </table>
</form>
@endsection
  


