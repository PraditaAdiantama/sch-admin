<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('students',[
            'title' => "Siswa",
            'students' => Student::all()
        ]);
    }

    public function show($id){
        return view('student',[
            'title' => 'Detail',
            'student' => Student::find($id)
        ]);
    }
    
    public function create(){
        return view('modif.create', [
            'title' => 'Modif'
        ]);
    }
    
    public function createData(Request $request){
        $this->validate($request,[
            'nis' => 'required|unique|min:1700|max:1799',
            'name' => 'required|min:2|max:100',
            'gender' => 'required',
            'address' => 'required|max:100',
            'birth_place' => 'required|max:100',
            'birth_date' => 'required|date',
            'class' => 'required|min:10|max:12'
        ]);

        $student = $request->all();
        
        Student::create($student);
        return redirect()->route('students')->with('success', 'Data added successfully');
    }

    public function edit($id){
        return view('modif.edit',[
            'title' => 'Edit',
            'edit' => Student::find($id)
        ]);
        return view('student');   
    }
    
    public function editData(Request $request, $id){
        $editData = Student::find($id);
        $editData->update($request->all());
    
        return redirect()->route('students')->with('success', 'Data edit successfully');
    }
    
    public function delete($id){
        $delete = Student::find($id);
        $delete->delete();
        
        return redirect()->route('students')->with('success', 'Data delete successfully');
    }
}
