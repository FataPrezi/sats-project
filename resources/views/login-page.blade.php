@extends('default')
@section('content')

<form action='' method='post' >
  <table align='center'  BGCOLOR="#7B68EE" cellpadding="10" >
       <tr><th colspan="2">Déposer sa candidature</th></tr>  
    <tr>
      <td><label for="nom">NOM</label> </td>
      <td> <input type="text" class="form-control" id="nom" aria-describedby="nom" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="nom">PRENOM</label> </td>
        <td> <input type="text" class="form-control" id="prenom" aria-describedby="prenom" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="nom">EMAIL</label> </td>
        <td> <input type="email" class="form-control" id="email" aria-describedby="email" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="nom">TELEPHONE</label> </td>
        <td> <input type="text" class="form-control" id="telephone" aria-describedby="telephone" placeholder=""> </td>
    </tr>
    <tr>
        <td><label for="nom">NAISSANCE</label> </td>
        <td> <input type="text" class="form-control date-picker" value="" data-datepicker-color="primary" /> </td>
    </tr>
    <tr>
        <td><label for="nom">CIN/PASSEPORT</label> </td>
        <td> <input type="text" class="form-control" id="identification" aria-describedby="identification" placeholder=""> </td>
    </tr>
    <tr>
      <td>
        <label class="form-check-label" for="defaultCheck1">
          Marié
        </label> <br> <input class="form-control" type="checkbox" value="" id="defaultCheck1"> </td> 
        <td><label class="form-check-label" for="defaultCheck1">
            Celibataire
          </label> <br> <input class="form-control" type="checkbox" value="" id="defaultCheck1"> </td> </td>
    </tr>
    <tr>
      <td><label for="nom">NIVEAU ETUDES</label></td>
      <td><select class="">
          <option selected>Choisir le niveau</option>
          <option value="elementaire">Elementaire</option>
          <option value="college">College</option>
          <option value="lycee">Lycee</option>
          <option value="superieures">Etudes supérieures</option>
        </select></td>
    </tr>
    <tr>
      <td><button type="button" class="btn btn-dark">Envoyer</button></td>
      <td><button type="button" class="btn btn-dark">Annuler</button></td>
    </tr>
  </table>
</form>
@endsection
  


