<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\enrollment;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    public function index(): View
    {
        $enrollments = enrollment::all();
        return view ('enrollment.index')->with('enrollments', $enrollments);
    }
 
    public function create(): View
    {
        return view('enrollment.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollment')->with('flash_message', 'Student Addedd!');
    }
    public function show(string $id): View
    {
        $enrollments = Enrollment::find($id);
        return view('enrollment.show')->with('enrollments', $enrollments);
    }
    public function edit(string $id): View
    {
        $enrollments = Enrollment::find($id);
        return view('enrollment.edit')->with('enrollments', $enrollments);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $enrollments = Enrollment::find($id);
        $input = $request->all();
        $enrollments->update($input);
        return redirect('enrollment')->with('flash_message', 'Enrollment Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollment')->with('flash_message', 'Enrollment deleted!'); 
    }
}
