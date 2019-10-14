@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('css')
   <link rel="stylesheet" href="/css/all.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">  
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection

@php
    $arr= [
        "flaticon-001-picture",
        "flaticon-002-caliper",
        "flaticon-003-energy-drink",
        "flaticon-004-build",
        "flaticon-005-thinking-1",
        "flaticon-006-prism",
        "flaticon-007-paint",
        "flaticon-008-team",
        "flaticon-009-idea-3",
        "flaticon-010-diamond",
        "flaticon-011-compass",
        "flaticon-012-cube",
        "flaticon-013-puzzle",
        "flaticon-014-magic-wand",
        "flaticon-015-book",
        "flaticon-016-vision",
        "flaticon-017-notebook",
        "flaticon-018-laptop-1",
        "flaticon-019-coffee-cup",
        "flaticon-020-creativity",
        "flaticon-021-thinking",
        "flaticon-022-branding",
        "flaticon-023-flask",
        "flaticon-024-idea-2",
        "flaticon-025-imagination",
        "flaticon-026-search",
        "flaticon-027-monitor",
        "flaticon-028-idea-1",
        "flaticon-029-sketchbook",
        "flaticon-030-computer",
        "flaticon-031-scheme",
        "flaticon-032-explorer",
        "flaticon-033-museum",
        "flaticon-034-cactus",
        "flaticon-035-smartphone",
        "flaticon-036-brainstorming",
        "flaticon-037-idea",
        "flaticon-038-graphic-tool-1",
        "flaticon-039-vector",
        "flaticon-040-rgb",
        "flaticon-041-graphic-tool",
        "flaticon-042-typography",
        "flaticon-043-sketch",
        "flaticon-044-paint-bucket",
        "flaticon-045-video-player",
        "flaticon-046-laptop",
        "flaticon-047-artificial-intelligence",
        "flaticon-048-abstract",
        "flaticon-049-projector",
        "flaticon-050-satellite",        
    ];

@endphp

@section('content')
<form action="{{route('services.update',$service->id)}}" method="POST">
@csrf
@method('PATCH')
    <div class="text-center">
            <h2>Éditer Service</h2>
    </div>
    <br>
    <div class="form-group">
        <label for="logo">Logo</label>
        <select class="selectpicker" name="logo" id="">
            @foreach ($arr as $item)
                <option data-icon={{$item}} value={{$item}}></option> 
            @endforeach
        </select>      
        </div>
        <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" name="titre" value="{{$service->titre}}" id="" class="form-control">
        </div>
        <div class="form-group">
        <label for="text">Texte</label>
        <textarea  name="text" id=""  rows="5" class="form-control">{{$service->text}}</textarea>
            
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br>
    <div class="text-center">      
        <button class="btn btn-primary" type="submit">Valider</button>
    </div>
</form>


@stop