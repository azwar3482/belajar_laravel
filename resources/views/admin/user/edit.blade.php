@extends('template.master')

@section('content')
<div class="card">
  <div class="card-header">
     <h4>Edit User</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="nama_galeri">Nama user</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{ $user->email }}">

        </div>
        <div class="form-group">
            <label for="level">level</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="operator"  
                @if($user->level == 'operator')
                     checked
                 @endif>
                 <label class="form-check-label" for="level">operator</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="admin"  
                @if($user->level == 'admin')
                     checked
                 @endif>
                 <label class="form-check-label" for="level">admin</label>
            </div></div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                <label>*) Jika password tidak diganti, kosongkan saja</label>
            </div>
            <div class="form-group">
          <button type="submit" class="btn btn-success">Update</button> 
          <a href="/album" class="btn btn-warning">Batal</a>
      </div>
    </form>
  </div>
</div>
@endsection