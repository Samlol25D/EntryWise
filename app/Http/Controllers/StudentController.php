<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'qr_code' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Guardar el QR
        $qrCodePath = $request->file('qr_code')->store('qr_codes', 'public');

        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'qr_code' => $qrCodePath,
        ]);

        return redirect()->route('students.index');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}
