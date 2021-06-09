@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Assistant_Restaurant-Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
=======
                    {{ __('Vous etes connecté!') }}

                    <a href="{{url('/')}}" class="btn btn-success">
                    {{ __('VOIR FOOD') }}
                    </a>

                    <!-- ADD FOOD -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    {{ __('AJOUT FOOD') }}
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ __('AJOUT FOOD') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <form method="post" action="{{route('plat.add')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="modal-body">
                                    <div class="form-group row">
                                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                        <div class="col-md-6">
                                            <input id="title" type="text" class="form-control @error('name') is-invalid @enderror" name="title" autocomplete="title" autofocus>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                                        <div class="col-md-6">
                                            <input id="prix" type="text" class="form-control @error('email') is-invalid @enderror" name="prix"  autocomplete="prix" autofocus>

                                            @error('prix')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group row">
                                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                        <div class="col-md-6">
                                        <textarea name="description" placeholder="Description..." class="form-control @error('title') is-invalid @enderror" rows="10"></textarea>

                                            @error('descrition')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-8 offset-md-2 justify-content-center custom-file">

                                        <input id="validatedCustomFile" type="file" class="custom-file-input @error('image') is-invalid @enderror" name="image" >
                                        <label for="validatedCustomFile" class="custom-file-label">{{ __('Choisir une Photo pour votre profile') }}</label>
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Ajouter') }}
                                        </button>
                                   </div>
                                </div>
                            </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div id="map">cc</div>
    <div class="table py-4">
        <h1>Commandes</h1>
        <table class="table table-striped">
        <thead>
    <tr>
      <th scope="col">Commande</th>
      <th scope="col">Plat</th>
      <th scope="col">Prix</th>
      <th scope="col">Image</th>
      <th scope="col">Client</th>
      <th scope="col">Livreurs</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($commandes as $commande)
  @if(Auth::user()->id === $commande->restaurant_id)
  <tr>
      <th scope="row">{{$commande->id}}</th>
      <td>{{$commande->plat->title}}</td>
      <td>{{$commande->plat->prix}}</td>
      <td><img src="{{asset('photoPlat'.'/'.$commande->plat->image)}}" width="100"></td>
      <td>{{$commande->user->name}}</td>
      <td>
      <form method="post" action="{{route('commande.update',$commande->id)}}">
      @csrf
      @method('PUT')
        <select id="livreur" type="text" class="form-control" name="livreur_id" value=""  autocomplete="categorie">
            @foreach ($livreurs as $livreur )
                @if($livreur->role == 'livreur')
                    <option value="{{ $livreur->id  }}">{{ $livreur->name ?? "Choisir" }}</option>       
                @endif    
            @endforeach
            </select>
        </td>
        <td>
        <button type="submit" class="btn btn-success">Valider Commande</button>
            </td>
      </form>
       
    </tr>
    @endif
  @endforeach
   
  </tbody>
        </table>
    </div>
   
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
</div>
@endsection
