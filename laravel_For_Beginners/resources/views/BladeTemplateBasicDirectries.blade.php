VERSION ONE
<h1>Listing</h1>

<p><?php echo $heading;?></p>

<?php foreach ($listings as $listing): ?>
    <h2> <?php echo $listing['title']; ?></h2>
    <p>  <?php echo $listing['description']; ?>   </p>
<?php endforeach; ?>

VERSION TWO
<h1>Listing</h1>

<p>{{$heading}}</p>

@if (count($listings) == 0)
    <h2> No Listings Found </h2>
@endif

@foreach ($listings as $listing)
    <h2>
    {{$listing['title']}}
    </h2>
    <p>
    {{$listing['description']}}
    </p>

@endforeach