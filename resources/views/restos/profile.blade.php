@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1>{{ __('Mes informations') }}</h1>
<<<<<<< HEAD
        
=======
    <div class="col-md-2">
        @if($user->profileRestaurant->photo != null)
            <img src="/photoProfile/{{ $user->profileRestaurant->photo }}" alt="" class="ronded-circle ml-5" width="100px" >
        @else
        <img src="{{asset('photoProfile/default.jpg')}}" alt="" class="ronded-circle ml-5" width="100px" >
        @endif
         </div>
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
         <div class="col-md-8">
                <div>
                    <h3 class="mr-3">{{ $user->name }}</h3>
                    @foreach($profiles as $profile)
                    @if($user->id === $profile->user_id)
                    <div>Email: {{ $user->email }}</div>
                    <div>Telephone: {{ $profile->telephone }}</div>
                    <div>Lieu: {{ $profile->adresse }}</div>
                    <div>Categorie: {{ $profile->categorie }}</div>
                    <div>Reseau social: {{ $profile->reseausocial }}</div>
<<<<<<< HEAD
=======
                    <div>Latitude: {{ $profile->latitude }}</div>
                    <div>Longitude: {{ $profile->longitude }}</div>
>>>>>>> 5cc7f2269f7c869858743f706e3ce78f83fb0bae
                    <a href="{{ route('restaurant.EditProfile', [$user->name]) }}" class="btn btn-primary">Mettre A Jour</a>
                    @endif 
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
