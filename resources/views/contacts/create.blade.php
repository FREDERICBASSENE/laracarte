@extends('layouts.default',['title'=> 'Contact'])

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<h2>Get In Touch</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
		</div>
		<form action="#" method="POST">
			<div class="form-group">
				<label for="name" class="control-label">Name</label>
				<input type="text" name="name" id="name" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label for="email" class="control-label">email</label>
				<input type="text" name="email" id="email" class="form-control" required="">
				
			</div>
			<div class="form-group">
				<label for="message" class="control-label sr-only"></label>
				<textarea id="message" class="form-control" name="message" required="" rows="10" cols="10">
					
				</textarea>
				
			</div>
			<br>
			<div class="form-group">
				<input type="submit" name="" class="btn btn-primary form-control" value="Submit Enquiry &raquo;">
			</div>
		</form >
	</div>

		
</div>
@stop