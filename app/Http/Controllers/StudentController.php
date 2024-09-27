<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use Inertia\Inertia;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return Inertia::render("Student/Index",[
            "students"=> StudentResource::collection($students),
        ]);
    }
}
