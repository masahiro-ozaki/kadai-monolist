@extends('layouts.app')

@section('content')
    <h1><span style="font : normal 900 40pt 'Monotype Corsiva'">Have Ranking</span></h1>
    @include('items.items', ['items' => $items])
@endsection