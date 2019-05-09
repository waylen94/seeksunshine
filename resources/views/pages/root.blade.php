@extends('layouts.app')
@section('title', 'homepage')

@section('content')
      <div class="masthead">
      
      <div class="row h-100 align-items-center justify-content-center text-center">
     @include('shared._messages')
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Seek Your Sunshine</h1>
      </div>
    </div>	
		<div class="row sonar-wrapper">
		<button type ="button" class="sonar-emitter text-center text-white mt-0 btn-lg orange-circle-button btn btn-primary " onclick="window.location.href = '{{ route('events.index') }}';" > Seek <br />your <br />Sunshine
		<div class="sonar-wave"></div>
		</button>
		
		
		</div>
        </div>
        
@stop