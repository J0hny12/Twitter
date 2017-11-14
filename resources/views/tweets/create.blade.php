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

      <h1 class="my-4">Create new tweet</h1>


        
        <form method="POST" action="/dashboard/create">
		  {{ csrf_field() }}
          <div class="form-group">
		      <label for="formGroupExampleInput">Title</label>
		    <input type="text" class="form-control" name="title" placeholder="Title" required>
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2">Body</label>
		    <input type="text" class="form-control" name="body" placeholder="Body" required>
		  </div>

          <button type="submit" class="btn btn-primary" style="margin-bottom: 100px">Pridat tweet</button>
       	</form>

        

    </div>


    
@endsection