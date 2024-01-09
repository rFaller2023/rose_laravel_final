<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
        $courses = course::all();
        return view ('course.index')->with('courses', $courses);
    }
 
    public function create(): View
    {
        return view('course.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Course::create($input);
        return redirect('course')->with('flash_message', 'Course Addedd!');
    }
    public function show(string $id): View
    {
        $courses = Course::find($id);
        return view('course.show')->with('courses', $courses);
    }
    public function edit(string $id): View
    {
        $courses = Course::find($id);
        return view('course.edit')->with('courses', $courses);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $courses = Course::find($id);
        $input = $request->all();
        $courses->update($input);
        return redirect('course')->with('flash_message', 'Course Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Course::destroy($id);
        return redirect('course')->with('flash_message', 'Course deleted!'); 
    }
}
