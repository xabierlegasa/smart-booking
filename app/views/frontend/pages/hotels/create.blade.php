@extends('templates.main')

@section('styles')
	{{HTML::style('css/select2.css')}}
	{{HTML::style('css/select2-bootstrap.css')}}
@stop

@section('scripts')

@stop

@section('content')


<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
        @include('_includes._alerts')
        {{ Form::open(array('route' => 'hotel.store','method' => 'POST','accept-charset' => 'UTF-8', 'id'=>'register', 'class' => 'form-horizontal')) }}  
            <legend>New hotel</legend>
            
            <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      {{ Form::text('name', null, array('id' => 'name','class'=>'form-control input-lg','placeholder'=>'Name')) }}
			    </div>
			</div>
			
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
			    <div class="col-sm-10">
			      {{ Form::text('address', null, array('id' => 'name','class'=>'form-control input-lg','placeholder'=>'Address')) }}
			    </div>
			</div>
  
  			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
			    <div class="col-sm-10">
			      {{ Form::select('type', array('hotel' => 'Hotel', 'hostel' => 'Hostel', 'apartment' => 'Apartment', 'holyday_home' => 'Holyday Home'), null, array('class' => 'form-control')) }}
			    </div>
			</div>
            
			<div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Stars</label>
			    <div class="col-sm-10">
			      {{ Form::select('stars', array('0' => 'Unrated', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5'), null, array('class' => 'form-control')) }}
			    </div>
			</div>
			
           		{{ Form::submit('Create',array('class'=>'btn btn-lg btn-primary btn-block signup-btn')) }}
			{{ Form::close() }}       
          </div>
		</div>            
	</div>

	
	<div style="width:500;height:300" id="map"></div>
	<div id="location"></div>

@stop