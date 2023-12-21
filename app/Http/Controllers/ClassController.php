<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $classes = ClassModel::query();
        $majors = Major::all();

        if ($request->has('class')) {
            $classes->where('name', 'LIKE', '%' . $request->class . '%');
        }

        $classes = $classes->get();

        return view("pages.classes.home", [
            "classes" => $classes,
            "majors" => $majors,
            "title" => "jurusan"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function students(ClassModel $class)
    {
        $students = Student::where('class_id', $class->id)->get();
        return view("pages.classes.students", [
            "students" => $students,
            "class" => $class,
            "title" => "jurusan"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $majors = Validator::make($request->all(), [
            "name" => "required|string|min:3",
            "school_year" => "required|string|min:3",
            "grade" => "required|in:X,XI,XII|string",
            "major_id" => "required|exists:majors,id"
        ]);

        if ($majors->fails()) return redirect("classes")->withErrors(["message" => $majors->errors()]);

        ClassModel::create($majors->validated());

        return redirect("classes")->with("success", "Berhasil");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(ClassModel $class)
    {
        $majors = Major::all();
        return view("pages.classes.detail", [
            "class" => $class,
            "majors" => $majors,
            "title" => "jurusan"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassModel $major)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassModel $class)
    {
        $validator = Validator::make($request->all(), [
            "name" => "string|min:3",
            "school_year" => "string|min:3",
            "grade" => "in:X,XI,XII|string",
            "major_id" => "string|exists:majors,id"
        ]);

        if ($validator->fails()) return redirect("classes")->withErrors(["message" => $validator->errors()]);

        $class->update($request->all());

        return redirect()->route('classes.show', $class->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassModel $major)
    {
        $major->delete();

        return redirect();
    }
}
