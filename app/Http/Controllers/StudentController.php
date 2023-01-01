<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $students = Student::where('name', 'LIKE', '%' .$request->search.'%')->paginate(5);
        }else{
            $students = Student::paginate(5);
        }
        return view('students', [
            'title' => "Student",
            'students' => $students
        ]);
    }

    public function show($id)
    {
        return view('student', [
            'title' => 'Detail',
            'student' => Student::find($id)
        ]);
    }

    public function delete($id)
    {
        $delete = Student::find($id);
        $delete->delete();

        return redirect()->route('students')->with('success', 'Data delete successfully');
    }
}
