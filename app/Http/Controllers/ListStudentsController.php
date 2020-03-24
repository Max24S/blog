<?php

namespace App\Http\Controllers;
use App\Models\ListStudents;
use Illuminate\Http\Request;

class ListStudentsController extends Controller
{
    public function show($id)
    {
        $student=(new ListStudents())->GetStudents($id);
        return view('student.index',compact('student'));
    }
    public  function  name($name='mark')
    {
        $name=(new ListStudents())->GetNameStudent($name);
        return view('student.index',compact('name'));
    }
}
