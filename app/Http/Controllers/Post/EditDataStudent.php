<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class EditDataStudent extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request,$id)
    {
        $editData = Student::find($id);
        $editData->update($request->all());

        return redirect()->to('student/' . $id)->with('success', 'Data edit successfully');
    }
}
