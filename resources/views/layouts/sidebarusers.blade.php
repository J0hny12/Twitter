
<div class="card my-4">
  <h5 class="card-header">Registered users</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-unstyled mb-0">
          @foreach($users as $user)
          <li>
            <a href="/dashboard/{{ $user->id}}">{{ $user->name }}</a>
          </li>
        @endforeach 
        </ul>
      </div>
    </div>
  </div>
</div>
