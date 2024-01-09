@extends('enrollment.layout')
@section('content')
   
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Enrollment Monitoring System</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/enrollment/create') }}" class="btn btn-success btn-sm" title="Add New Enrolllment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enrollment ID</th>
                                        <th>Student ID</th>
                                        <th>Course ID</th>
                                        <th>Enrollment Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->enrollment_id }}</td>
                                        <td>{{ $item->student_id }}</td>
                                        <td>{{ $item->course_id }}</td>
                                        <td>{{ $item->enrollment_date}}</td>
                                        
                                        <td>
                                            <a href="{{ url('/enrollment/' . $item->id) }}" title="View Enrollment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/enrollment/' . $item->id . '/edit') }}" title="Edit Enrollment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/enrollment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Enrollment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="http://127.0.0.1:8000/home" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection