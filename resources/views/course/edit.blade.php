@extends('course.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('course/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Course ID</label></br>
        <input type="text" name="enrollment_id" id="enrollment_id" value="{{$courses->course_id}}" class="form-control"></br>
        <label>Course Name</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$courses->course_name}}" class="form-control"></br>
        <label>Course Code</label></br>
        <input type="text" name="course_id" id="course_id" value="{{$courses->course_code}}" class="form-control"></br>
         <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop