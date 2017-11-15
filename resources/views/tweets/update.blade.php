@extends('layouts.main')

@section('body')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<!-- Blog Entries Column -->
    <div class="col-md-8">

      <h1 class="my-4">Edit tweet</h1>


        <form method="POST" action="/dashboard/update/{{ $tweet->id }}">
		  {{ csrf_field() }}
          <div class="form-group">
		      <label for="formGroupExampleInput">Title</label>
		    <input type="text" class="form-control" name="title" placeholder="Title" required value="{{$tweet->title}}">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Body</label>
		    <input type="text" class="form-control" name="body" placeholder="Body" required value="{{$tweet->body}}">
		  </div>

          <button type="submit" class="btn btn-primary" style="margin-bottom: 100px">Upravit tweet</button>
       	</form>

    </div>

@endsection
