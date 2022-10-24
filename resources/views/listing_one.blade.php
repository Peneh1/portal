@extends('layout')

@section('content')

<h2>{{$listing['title']}}</h2>

<p>{{$listing['description']}}</p>
<ul>
    <li>Company: {{$listing['company']}}</li>
    <li>Location: {{$listing['location']}}</li>
    <li><a href="mailto:{{$listing['email']}}">Contact Seller</a></li>
    <li><a href="https://{{$listing['website']}}">Visit Website</a></li>
    <li>Tags: {{$listing['tags']}}</li>
</ul>


<a href="../listing/">← All Listing</a>
@endsection