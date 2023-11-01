<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::all();
        $major_options = [
            "Broadcast TV & Film",
            "Desain Komunikasi Visual",
            "Kimia Analisis",
            "Teknik Instalasi Tenaga Listrik",
            "Teknik Otomasi Industri",
            "Teknik Jaringan Komputer dan Telekomunikasi",
            "Teknik Otomotif",
            "Teknik Las",
            "Teknik Mesin",
        ];
        return view("pages.majors.home", [
            "majors" => $majors,
            "major_options" => $major_options,
            "title" => "jurusan"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function students(Major $major)
    {
        $students = Student::where("major_id", $major->id)->get();
        return view("pages.majors.students", [
            "students" => $students,
            "major" => $major,
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
            "major" => "required|in:Broadcast TV & Film,Desain Komunikasi Visual,Kimia Analisis,Teknik Instalasi Tenaga Listrik,Teknik Otomasi Industri,Teknik Jaringan Komputer dan Telekomunikasi,Teknik Otomotif,Teknik Las,Teknik Mesin"
        ]);

        if ($majors->fails()) return redirect("classes")->withErrors(["message" => $majors->errors()]);

        Major::create($majors->validated());

        return redirect("classes")->with("success", "Berhasil");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {
        return view("pages.majors.detail", [
            "major" => $major,
            "title" => "jurusan"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
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
    public function update(Request $request, Major $major)
    {
        $validator = Validator::make($request->all(), [
            "name" => "string|min:3",
            "school_year" => "string|min:3",
            "grade" => "in:X,XI,XII|string",
            "major" => "in:Broadcast TV & Film,Desain Komunikasi Visual,Kimia Analisis,Teknik Instalasi Tenaga Listrik,Teknik Otomasi Industri,Teknik Jaringan Komputer dan Telekomunikasi,Teknik Otomotif,Teknik Las,Teknik Mesin"
        ]);

        if($validator->fails()) return redirect("classes")->withErrors(["message" => $validator->errors()]);

        $major->update($request->all());

        return redirect()->to("classes/$major->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();

        return redirect();
    }
}
