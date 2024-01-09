@extends('course.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Course Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Course ID : {{ $courses->course_id }}</h5>
        <h5 class="card-title">Course Name : {{ $courses->course_name }}</h5>
        <h5 class="card-text">Course Code : {{ $courses->course_code}}</h5>
        
  </div>
       
    </hr>
  
  </div>
</div>