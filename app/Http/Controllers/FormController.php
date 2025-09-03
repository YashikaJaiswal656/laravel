<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FormController extends Controller
{
    
    public function store(Request $request)
    {
        DB::insert(
            "INSERT INTO student (name, email, number) VALUES (?, ?, ?)",
            [$request->name, $request->email, $request->number]
        );

          $student = DB::select("SELECT * FROM student");
        return redirect('/form')->with('success', 'Student added successfully!');
    }
    public function addUser(Request $req){
        
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'number'=>'required|numeric',
        ]);
    }
    public function index(){
        $student=DB::select("SELECT * FROM student");
        return view('hello', compact('student'));
    }
    public function delete($id){
        DB::delete("DELETE FROM student WHERE id=?",[$id]);
        
          $student = DB::select("SELECT * FROM student");
        return redirect('/form')->with('success', 'Student added successfully!');
    }
       public function edit($id)
    {
        $student = DB::select("SELECT * FROM student WHERE id = ?", [$id]);
        
        
        return view('edit', compact('student'));
    }
      public function update(Request $request, $id)
    {
        DB::update(
            "UPDATE student SET name = ?, email = ?, number = ? WHERE id = ?",
            [$request->name, $request->email, $request->number, $id]
        );

        return redirect('/form')->with('success', 'Student updated successfully!');
    }
}


