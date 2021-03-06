@extends('layouts.main')

@section('body')

    <div class="col-md-8">
      <h1 class="my-4">Dashboard</h1>

      @foreach($tweets as $tweet)
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-md-10"><h2 class="card-title">{{ $tweet->title }}</h2></div>
            <div class="col-md-2">
              @if(Auth::user()->id == $tweet->user_id)
                <a href="/dashboard/update/{{ $tweet->id }}">Edit</a>/
                <a href="/dashboard/delete/{{ $tweet->id }}"><span style="color:red">Del</span></a>
              @endif
            </div>
          </div>
          
          <div class="text-muted">
            Pridane dna {{ $tweet->created_at->toFormattedDateString() }} od uzivatela
            <a href="#">{{ $tweet->user->name }}</a>
          </div>
          <p class="card-text">
          	{{ $tweet->body }}
          </p>
      
        @foreach($tweet->comments as $comment)
        <div class="card">
          <div class="card-block">
            <div class="row">
            <div class="col-md-9">
            {{ $comment->body }}
            </div>
            <div class="col-md-2">
            <a href="/dashboard/{{ $comment->user->id }}">{{ $comment->user->name }}</a> 
            </div>
            <div class="col-md-1">
              @if(Auth::user()->id == $comment->user_id)
                <a href="/comment/delete/{{ $comment->id }}"><span style="color:red">Del</span></a>
              @endif
            </div>
            </div>
          </div>
        </div>
        @endforeach

        <br/>
          <form class="col-md-11" method="POST" action="/comment/{{ $tweet->id }}">
            {{ csrf_field() }}
            <div class="form-group">
            <textarea type="text" name="body" id="body" placeholder="komentar" class="form-control" required></textarea><br/>
            <button type="submit" class="btn btn-sm btn-primary">Pridat komentar</button>
            </div>
          </form>
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