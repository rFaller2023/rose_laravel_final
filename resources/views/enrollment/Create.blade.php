@extends('enrollment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">course Page</div>
  <div class="card-body">
      
  <form action="{{ url('enrollment') }}" method="post">
        {!! csrf_field() !!}
        <label>Enrollment ID</label></br>
        <input type="text" name="enrollment_id" id="enrollment_id" class="form-control"></br>
        <label>Student ID</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control"></br>
        <label>Course ID</label></br>
        <input type="text" name="course_id" id="course_id" class="form-control"></br>
        <label>Enrollment Date</label></br>
        <input type="text" name="enrollment_date" id="enrollment_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop