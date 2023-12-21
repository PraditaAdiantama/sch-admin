<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ClassModel;
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
    public function index(Request $request): View
    {
        $classes = ClassModel::all();
        $students = Student::query();

        if ($request->has('search_student')) {
            $students->where('name', 'LIKE', '%' . $request->search_student . '%');
        } else {
            $students = $students->with('class');
        }

        $students = $students->get();

        return view("pages.students.home", [
            "title" => "siswa",
            "students" => $students,
            "classes" => $classes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
            "class_id" => "required|exists:classes,id|integer"
        ]);

        if ($student->fails()) return redirect("/students")->withErrors(["message", $student->errors()]);

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
        $classes = ClassModel::all();
        return view("pages.students.detail", [
            "student" => $student,
            "classes" => $classes,
            "title" => "siswa"
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

        if ($student_validator->fails()) return redirect()->withErrors(["message" => $student_validator->errors()]);

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
    }
}
