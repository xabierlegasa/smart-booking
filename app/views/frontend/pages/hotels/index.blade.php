@extends('templates.main')


@section('scripts')
<script>
  $( document ).ready(function()
  {
	fillInStars();
  });

  function fillInStars()
  {
	  $( ".star" ).each(function() {
			var stars = $(this).attr( "num" );
			console.log('stars: ' + stars);

			$(this).raty({
		    	width: 150,
		    	readOnly: true,
		    	score: stars,
		    	starOff: 'img/star-off.png',
		    	starOn : 'img/star-on.png',
		    	starHalf: 'img/star-half.png'	  
		    });
		});
  }
</script>
@stop


@section('content')
	<a href="{{ route('hotel.create') }}">
		<button type="button" class="btn btn-default" onClick="">+ Add Hotel</button>
	</a>
	<div>
		<h1>{{ count($hotels); }} Hotels found</h1>
		<div class="row">
		  @foreach ($hotels as $hotel)
		  <div class="col-sm-6 col-md-4">
	        <div class="thumbnail">
	          <img data-src="holder.js/300x200" alt="300x200" src="img/hotel{{ rand(1,9) }}.jpg" style="width: 300px; height: 200px;">
	          <div class="caption">
	            <h3>{{ $hotel->name }}</h3>
	            <div class="star" num="{{ $hotel->stars }}" ></div>
	            <p>{{ $hotel->address }}</p>
	            <p>
	            	<a href="#" class="btn btn-success" role="button">Book</a>
	            	<a href="{{ route('hotel.edit', array('id' => $hotel->id)) }}" class="btn btn-default" role="button">Edit</a>
	            	<a href="{{ route('hotel.delete', array('id' => $hotel->id)) }}" class="btn btn-danger" role="button">Delete</a>
	            </p>
	          </div>
	        </div>
	      </div>
		  @endforeach
	    </div>
	</div>
@stop