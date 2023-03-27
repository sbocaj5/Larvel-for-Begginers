<h1>Listing</h1>

<p>{{$heading}}</p>

@if (count($listings) == 0)
    <h2> No Listings Found </h2>
@endif

@foreach ($listings as $listing)
    <h2>
    <a href="/listings/{{$listing['id']}}"> {{$listing['title']}}   </a>
    </h2>
    <p>
    {{$listing['description']}}
    </p>

@endforeach