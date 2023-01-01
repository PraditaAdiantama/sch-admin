<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StoreDataStudent extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $validate = $request->validate([
            'nis' => 'required',
            'name' => 'required|min:2|max:100',
            'gender' => 'required',
            'address' => 'required|max:100',
            'birth_place' => 'required|max:100',
            'birth_date' => 'required|date',
            'class' => 'required'
        ]);

        $student = $request->all();

        $student = Student::create($student);
        return redirect()->to('/students')->with('success', 'Data create succesfully');
    }
}
