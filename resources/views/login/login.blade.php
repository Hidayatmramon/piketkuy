@extends('login.main')
@section('login')
<!--Input-->
<div class="col-md-8">
  @if(Session::get('notAllowed'))
  <div class="alert alert-danger">
    {{session('notAllowed')}}
  </div>
  @endif

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="custom-box" style="margin-top:40px;">
    <form action="{{route('auth')}}" method="POST">
      @csrf
      <div class="mb-4">
        <h2>Masuk Untuk Melihat Data Piket Rayon</h2>
        <div class="form-group first">
          <label for="name">Username</label>
          <input type="name" name="name" class="form-control mt-2" id="name">
        </div>
        <div class="form-group last mb-4">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
        </div>
      </div>
      <button class="btn btn-block btn-primary"> Login</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
<!--INPUT-->
@endsection