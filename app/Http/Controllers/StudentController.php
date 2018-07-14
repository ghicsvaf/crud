<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student_index', compact('student'));
    }
    public function create()
    {
        return view('student_create');
    }
    //store in DB
    public function store(Request $request)
    {
       $student = new Student();
       $student->name = $request->student_name;
       $student->age = $request->student_age;
       $student->address = $request->student_address;
       $student->save();
        
       return redirect()->route('student.index');
    }
    //edit
    public function edit($id)
    {
        $student = Student::find($id);
        
        return view('student_edit', compact('student'));
    }
    //update
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->student_name;
        $student->age = $request->student_age;
        $student->address = $request->student_address;
        $student->save();

        return redirect()->route('student.index');
    }
    //delete
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}

?>