<?php


namespace App\Http\Controllers;

use App\Models\EntryExitRecord;
use App\Models\Student;
use Illuminate\Http\Request;

class EntryExitController extends Controller
{
    public function store(Request $request, Student $student)
    {
        $request->validate([
            'action' => 'required|in:entry,exit',
        ]);

        EntryExitRecord::create([
            'student_id' => $student->id,
            'action' => $request->action,
            'timestamp' => now(),
        ]);

        return redirect()->route('students.show', $student->id);
    }
}
