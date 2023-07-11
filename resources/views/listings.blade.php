@extends('layout')

@section('content')
<div  class="flex flex-wrap  bg-neutral-100">

  @unless (count($listings ?? []) == 0)
  <p>We have listings</p>
@foreach ($listings as $listing)
<div class="text-stone-900 card card-side bg-stone-300 shadow-xl m-2 border-neutral-50 ">
  <figure><img src="/images/stock/photo-1635805737707-575885ab0820.jpg" alt="Movie"/></figure>
  <div class="card-body">
    <h2 class="card-title">{{$listing['title']}}</h2>
    <p>{{$listing['description']}}</p>
    <ul>
      <li>Location: {{$listing['location']}}</li>
      <li>Salary: ${{$listing['salary']}}</li>
      <li>{{$listing['tags']}}</li>
    </ul>
    <div class="card-actions justify-end">
      <a href="/listing/{{$listing['id']}}" class="btn btn-neutral">Apply</a>
    </div>
  </div>
</div>
@endforeach

@else
  <p>No listings found</p>
@endunless

</div>
@endsection
