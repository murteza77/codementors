@extends('layouts.app')
@section('content')

<form action="" method="POST" role="form" class="col-sm-6 col-sm-offset-3">
	<legend>If you want to support computer science in Afghanistan fill the bellow form</legend>
	
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Last Name</label>
		<input type="text" class="form-control" id="" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Specialty</label>
		<select name="specialty" id="input" class="form-control" required="required">
			<option value="">UI/UX</option>
			<option value="">Backend</option>
			<option value="">Database Development</option>
			<option value="">Programming</option>
			<option value="">Android Programming</option>
			<option value="">IOS Programming</option>
		</select>
	</div>
	<div class="form-group">
		<label for="">Education</label>
		<select name="education" id="input" class="form-control" required="required">
			<option value="">Bachelor</option>
			<option value="">Master</option>
			<option value="">PHD</option>
			<option value="">12 Pas</option>
			<option value="">I don't belevive in Fucking Education I learn in my Style</option>
		</select>
	</div>
	<div class="form-group">
		<label for="">Experience</label>
		<select name="experience" id="input" class="form-control" required="required">
			<option value="">1 year</option>
			<option value="">2 years</option>
			<option value="">3 years</option>
			<option value="">4 years</option>
			<option value="">Above 4 years</option>
		</select>
	</div>
	
	
	<button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection