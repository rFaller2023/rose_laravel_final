@extends('enrollment.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Course Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment ID : {{ $enrollments->enrollment_id }}</h5>
        <h5 class="card-title">Student ID : {{ $enrollments->student_id }}</h5>
        <h5 class="card-text">Course ID : {{ $enrollments->course_id}}</h5>
        <h5 class="card-title">Enrollment Date : {{ $enrollments->enrollment_date }}</h5>
  </div>
       
    </hr>
  
  </div>
</div>