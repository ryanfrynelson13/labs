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
<form action="{{route('users.index')}}">
    <button type="submit" class="close bg-danger p-2" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</form>
<form action="{{route('users.store')}}" enctype="multipart/form-data" method="POST">
@csrf
@method('POST')
    <div class="text-center">
            <h2>Ajouter User</h2>
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
        <input type="file"  name="photo" value="{{old('photo')}}" id=""/>
    
           
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{old('name')}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Email</label>
        <input type="text" name="email" value="{{old('email')}}" id="" class="form-control">
    </div>
    <div class="form-group">
        <label for="title">Description</label>
        <textarea type="text" rows="5" name="description" value="{{old('description')}}" id="" class="form-control"></textarea>
    </div>

    
    <div class="form-group">
        <label for="title">New Password</label>
        <input type="password" name="password"  id="" class="form-control">
    </div>


   

    <div class="form-group">
        <label for="Boss">Role</label><br>
        <select class="selectpicker" data-style="btn-warning" name="role" id="">        
            <option  value="admin">Admin</option>        
            <option  value="editeur">Editeur</option> 
            <option selected value="guest">Guest</option>
        
            
        </select> 
            
    </div>
   
    <br>
    <div class="text-center">      
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>


@stop