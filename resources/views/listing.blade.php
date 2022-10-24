@extends('layout')

@section('content')

<h1>{{$heading}}</h1>


 @if ($listings != null)
    @foreach( $listings as $listing)
        <h2><a href="listing/{{$listing['id']}}">{{$listing['title']}}</a></h2>
        <p>{{$listing['description']}}</p>
    @endforeach
@else
<p>No listing found<p>
@endif
@endsection


