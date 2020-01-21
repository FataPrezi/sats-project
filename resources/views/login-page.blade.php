@extends('default')
@section('content')

<form action='{{route('candidatures.store')}}' method='' >
    {{ csrf_field() }}
  <table align='center'  BGCOLOR="#7B68EE" cellpadding="10" >
       <tr><th colspan="2">Déposer sa candidature</th></tr>  
    <tr>
      <td align='left'><label for="nom">NOM</label> </td>
      <td> <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom')}}" aria-describedby="nom" placeholder=""> 
        
        {{-- validation des donnees --}}
        @if ($errors->has('nom'))          
        <p>{{ $errors->first('nom') }}</p> 
       @endif
        {{-- <small id="input-nom-help" class="form-text text-muted">
          @if ($errors->has('nom'))
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->get('nom') as $message)
                  <li>{{ $message }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
      </small> --}}
      </td>  
    </tr>
    <tr>
        <td align='left'><label for="prenom">PRENOM</label> </td>
    <td> <input type="text" class="form-control" id="prenom" name="prenom" value="{{old('prenom')}}" aria-describedby="prenom" placeholder=""> 
      @if ($errors->has('prenom'))          
      <p>{{ $errors->first('prenom') }}</p> 
      @endif
        </td>
      </tr>
    <tr>
        <td align='left'><label for="email">EMAIL</label> </td>
        <td> <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" aria-describedby="email" placeholder=""> 
          @if ($errors->has('email'))          
          <p>{{ $errors->first('email') }}</p> 
          @endif
        </td>
      </tr>
    <tr>
        <td align='left'><label for="telephone">TELEPHONE</label> </td>
        <td> <input type="text" class="form-control" id="telephone" name="telephone" value="{{old('telephone')}}" aria-describedby="telephone" placeholder=""> 
          @if ($errors->has('telephone'))          
          <p>{{ $errors->first('telephone') }}</p> 
          @endif
        </td>
    </tr>
    <tr>
        <td align='left'><label for="naissance">NAISSANCE</label> </td>
        <td> <input type="text" class="form-control date-picker" value="{{old('naissance')}}" placeholder="ANNEE/MM/JJ"name="naissance" id="naissance" value="" data-datepicker-color="primary" /> 
          @if ($errors->has('naissance'))          
          <p>{{ $errors->first('naissance') }}</p> 
         @endif
        </td>
    </tr>
    <tr>
        <td align='left'><label for="identification_nationale">CIN/PASSEPORT</label> </td>
        <td> <input type="text" class="form-control" id="identification_nationale" value="{{old('identification_nationale')}}" name="identification_nationale" aria-describedby="identification_nationale" placeholder=""> 
          @if ($errors->has('identification_nationale'))          
                  <p>{{ $errors->first('identification_nationale') }}</p> 
          @endif
        </td>
    </tr>
    <tr>
      <td>
        <label class="form-check-label" for="statut">
          Marié
        </label> <br> <input class="form-control" type="checkbox" value="marie" id="statut" name="statut"> 
        @if ($errors->has('statut'))          
        <p>{{ $errors->first('statut') }}</p> 
        @endif
      </td> 
        <td><label class="form-check-label" for="statut">
            Celibataire
          </label> <br> <input class="form-control" type="checkbox" value="celibat" id="statut" name="statut" checked="checked"> 
          @if ($errors->has('statut'))          
          <p>{{ $errors->first('statut') }}</p> 
          @endif
        </td> 
    </tr>
    <tr>
      <td align='left'><label for="etudes">NIVEAU ETUDES</label></td>
      <td><select name="etudes" id="etudes">
          <option selected>Choisir le niveau</option>
          <option value="elementaire">Elementaire</option>
          <option value="college">College</option>
          <option value="lycee">Lycee</option>
          <option value="superieures">Etudes supérieures</option>
        </select>
        @if ($errors->has('etudes'))          
        <p>{{ $errors->first('etudes') }}</p> 
        @endif
      </td>
    </tr>
    <tr>
      <td><button type="submit" class="btn btn-dark">Envoyer</button></td>
      <td><button type="cancel" class="btn btn-dark">Annuler</button></td>
    </tr>
    <!-- Modal -->
  {{-- <div class="modal fade" id="modal-delete-client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form method="POST" action="" id="form-delete-client">
        @csrf
        @method('DELETE')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Suppression</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Etes vous sûr de vouloir supprimer?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Supprimer</button>
        </div>
      </div>
    </div>
</form>
  </div> --}}
 <!-- Modal -->
  </table>
</form>

{{-- //POUR LA VALIDATION DES DONNEES
 <div class="row justify-content-center">
  @if ($errors->any())

  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif --}}
@endsection
  


