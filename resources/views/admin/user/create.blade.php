@extends('template.master')

@section('content')
<div class="card">
  <div class="card-header">
     <h4>Tambah user</h4>
  </div>
  <div class="card-body">
   @if (count($errors) > 0)
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
    @endif
    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="name">Nama User</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="email">Upload Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="level">level</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="operator" checked>
                <label class="form-check-label" for="level">operator</label>

            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="level" value="admin">
                <label class="form-check-label" for="level">admin<label>
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">
                password confirm
            </label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <div class="form-group">
            
          <button type="submit" class="btn btn-success">Simpan</button> 
          <a href="/galeri" class="btn btn-warning">Batal</a>
      </div>
    </form>
  </div>
</div>
@endsection