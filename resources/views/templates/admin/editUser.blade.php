@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('css')
   <link rel="stylesheet" href="/css/flaticon.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">  
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection

@section('content')
<form action="{{route('users.update',$user->id)}}" enctype="multipart/form-data" method="POST">
@csrf
@method('PATCH')
    <div class="text-center">
            <h2>Éditer User</h2>
    </div>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file"  name="photo" value="{{$user->photo}}" id=""/>
    
           
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$user->name}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Email</label>
        <input type="text" name="email" value="{{$user->email}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Description</label>
        <textarea type="text" rows="5" name="description" id="" class="form-control">{{$user->description}}</textarea>
    </div>

    @if (Auth::id()===$user->id)
        <div class="form-group">
            <label for="title">New Password</label>
            <input type="password" name="password"  id="" class="form-control">
        </div>
    @endif

   

    <div class="form-group">
        <label for="Boss">Role</label><br>
        <select class="selectpicker" data-style="btn-warning" name="role" id="">        
            <option {{$user->role==="admin"?'selected':''}} value="admin">Admin</option> 
            @if (Auth::id()!==$user->id)
                <option {{$user->role==="editeur"?'selected':''}} value="editeur">Editeur</option> 
                <option {{$user->role==="guest"?'selected':''}} value="guest">Guest</option>
            @endif
            
        </select> 
            
    </div>
   
    <br>
    <div class="text-center">      
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>


@stop