@extends('layouts.app')

@section('title', 'Default Laravel Page')

@section('left')
    @parent
    <p>Child left</p>
@endsection

@section('content')
    <p>Article content</p>

   <form method="post" class="form" action="{{ route('articles') }}">
       @csrf
       <div class="form-group">
           <label for="first_name">Firstname :</label>
           <input type="text" class="form-control" name="first_name"/>
       </div>
       <button type="submit" class="btn btn-primary">Valider</button>
   </form>

@elipsis('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.')

@endsection
