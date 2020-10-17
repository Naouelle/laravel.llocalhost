@extends('layouts.app')

@section('title', 'Default Laravel Page')

@section('left')
    @parent
    <p>Child left</p>
@endsection

@section('content')
    <p>Article content</p>

    @if (count($data) === 1)
        Mon tableau possède un élément
    @elseif( count($data) > 1)
        Mon tableau est > 1
    @else
        Mon tableau est vide
    @endif

    <ul>
    @foreach($data as $d)
        <li>{{ $d }}</li>
    @endforeach
    </ul>

@endsection
