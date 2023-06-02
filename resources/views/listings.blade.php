<h1> {{ $heading }} </h1>

@if (count($listings) == 0)
<p>No listings found.</p>
    
@endif

<?php foreach($listings as $listing): ?>
    <h2> <?php echo $listing['title'] ?> </h2>
    <p><?php echo $listing['desc'] ?></p>
<?php endforeach ?>

@unless (count($listings) == 0)
@foreach($listings as $listing)
    <a href="/listings/{{$listing['id']}}">
        <h2> {{$listing['title']}} </h2>
    </a>
    
    <p>{{$listing['desc'] }}</p>
@endforeach

@else
<p>No listings found.</p>

@endunless

@php
    $test=1
@endphp

{{ $test }}