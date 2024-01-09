@extends('student.layout')
@section('content')
 
<div class="card">
  <div class="card-header">course Page</div>
  <div class="card-body">
      
  <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="first_name" id="first_name" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="last_name" id="last_name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Email_Address</label></br>
        <input type="text" name="email_address" id="email_address" class="form-control"></br>
        <label>Grade Level</label></br>
        <input type="text" name="grade_level" id="grade_level" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop