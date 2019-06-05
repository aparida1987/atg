@extends('layout')
@section('content')
<div class="inner-pages">
	<div class="container">
      <div class="row">
      	<div class="col-lg-3"></div>

      	<div class="col-lg-6">
      		<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --> @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
		<form class="form-5t mt-3" id="atg_test" action="{{ url('create')}}" method="post">
	      		 {{csrf_field()}}
	      		<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}} ">
				    <label for="name">Name</label>
				    <input type="text" class="form-control @error('title') is-invalid @enderror" name="name" id="name" placeholder="Enter name">
				  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
				    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
				    <label for="pincode">Pincode</label>
				    <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode">
				    {!! $errors->first('pincode', '<p class="help-block">:message</p>') !!}
				</div>				
				<button type="submit" class="btn btn-primary">Submit</button>
	      	</form>
      	</div>
      	<div class="col-lg-3"></div>
      </div>
    </div>
</div>
@endsection
