<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
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
=======
use App\Models\Major;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $students = Student::all();
        $majors = Major::all();
        return view("pages.students.home", [
            "title" => "siswa",
            "students" => $students,
            "majors" => $majors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Validator::make($request->all(), [
            "nis" => "required|min:1|integer",
            "name" => "required|min:1|string",
            "gender" => "required|in:laki-laki,perempuan|string",
            "address" => "required|min:3|string",
            "birth_date" => "required|date",
            "birth_place" => "required|string|min:3",
            "major_id" => "required|exists:majors,id|integer"
        ]);

        if ($student->fails()) return redirect("/students")->withErrors(["message", "Telah terjadi kesalahan"]);

        Student::create($student->validated());

        return redirect("/students")->with("success", "Siswa berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $majors = Major::all();
        return view("pages.students.detail", [
            "student" => $student,
            "title" => "siswa",
            "majors" => $majors
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student_validator = Validator::make($request->all(), [
            "nis" => "min:1|integer",
            "name" => "min:1|string",
            "gender" => "in:laki-laki,perempuan|string",
            "address" => "min:3|string",
            "birth_date" => "date",
            "birth_place" => "string|min:3",
            "major_id" => "exists:majors,id|integer"
        ]);

        if ($student_validator->fails()) return redirect()->withErrors(["message" => "Telah terjadi kesalahan"]);
        
        $student->update($request->all());

        return redirect("students");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back();
>>>>>>> a622e73 (init)
    }
}
