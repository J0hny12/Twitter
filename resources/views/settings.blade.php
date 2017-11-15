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

      <h1 class="my-4">Edit User Settings</h1>


        
        <form method="POST" action="/settings">
		      {{ csrf_field() }}
          <div class="form-group">
    		    <label for="formGroupExampleInput">Name</label>
    		    <input type="text" class="form-control" name="name" placeholder="Name" required value="{{$user->name}}">
    		  </div>
    		  <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Body" required value="{{$user->email}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Password again</label>
            <input type="password" class="form-control" name="password_confirm" required>
          </div>

          <button type="submit" class="btn btn-primary" style="margin-bottom: 100px">Upravit</button>
       	</form>

    </div>

@endsection
