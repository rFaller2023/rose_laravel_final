@extends('enrollment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label>Enrollment ID</label></br>
        <input type="text" name="enrollment_id" id="enrollment_id" value="{{$enrollments->enrollment_id}}" class="form-control"></br>
        <label>Student ID</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}" class="form-control"></br>
        <label>Course ID</label></br>
        <input type="text" name="course_id" id="course_id" value="{{$enrollments->course_id}}" class="form-control"></br>
        <label>Enrollment Date</label></br>
        <input type="text" name="enrollment_date" id="enrollment_date" value="{{$enrollments->enrollment_date}}" class="form-control"></br>
         <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop