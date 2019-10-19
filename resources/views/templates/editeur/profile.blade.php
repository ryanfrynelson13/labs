@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="col-md-4">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
            <div class="d-flex justify-content-center">
                <img class="profile-user-img img-responsive " src="/{{$user->photo}}" alt="image article">
            </div>
            <h3 class="profile-username text-center">{{$user->titre}}</h3>
            <div >       
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item  d-flex justify-content-between">
                        <b>Email</b> <a class="pull-right">{{$user->name}}</a>
                    </li> 

                    <li class="list-group-item  d-flex justify-content-between">
                    <b>Email</b> <a class="pull-right">{{$user->email}}</a>
                    </li>                  
                    
                    
                    
                   
                    <li class="list-group-item">
                        <b>Description:</b> <br> <a class="">
                          {{$user->description}}
                        </a>
                    </li>
                    
                   
                    
                </ul>
                <div>

                </div>
                <div class="text-center m-2">
                    <form action="user/edit" method="GET">                    
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
                </div>      
               
                    
                
            </div>
                               

           
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        
        <!-- /.box -->
    </div>

@stop