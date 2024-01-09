@extends('course.layout')
@section('content')
 
<div class="card">
  <div class="card-header">course Page</div>
  <div class="card-body">
      
  <form action="{{ url('course') }}" method="post">
        {!! csrf_field() !!}
        <label>Course ID</label></br>
        <input type="text" name="course_id" id="course_id" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="course_name" id="course_name" class="form-control"></br>
        <label>Course Code</label></br>
        <input type="text" name="course_code" id="course_code" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop