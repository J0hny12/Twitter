@extends('layouts.main')

@section('body')

	<!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4">Dashboard</h1>

      @foreach($tweets as $tweet)
      	<div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title">{{ $tweet->title }}</h2>
          <p class="card-text">
          	{{ $tweet->body }}
          </p>
        </div>
        <div class="card-footer text-muted">
          Pridane dna {{ $tweet->created_at->toFormattedDateString() }} od uzivatela
          <a href="#">{{ $tweet->user->name }}</a>
        </div>
      </div>
      @endforeach
    </div>


    <div class="col-md-4">
    @include('layouts.sidebarusers')

    @if(Auth::user()->id == request('user')->id)
      <a href="/dashboard/create" class="btn btn-lg btn-primary">Pridat tweet&rarr;</a>
    @endif

    </div>
@endsection