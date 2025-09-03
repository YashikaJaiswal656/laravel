<?php

namespace App\Http\Controllers;
use App\Models\test;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(){
        return view('test');
    }
    public function store(Request $request){
$request->validate([
'name'=>'required|string',
'email'=>'required|email|unique:tests,email',
'number'=>'required|numeric|digits:10',
]);
test::create([
'name'=>$request->name,
'email'=>$request->email,
'number'=>$request->number,
]);
return redirect('test');
    }
    public function index(){
        $tests=test::all();
        return view('user',compact('tests'));
    }
    public function destroy($id){
$test=test::findorfail($id);
$test->delete();

 return redirect()->route('user')
                     ->with('success', 'Record deleted successfully!');
    }
    public function edit($id){
        $test=test::findorfail($id);
        return view('edit_2',compact('test'));
    }
public function update(Request $request,$id){
    $request->validate([
'name'=>'required|string',
'email'=>'required|email',
'number'=>'required|numeric|digits:10',
    ]);
    $test=test::findorfail($id);
    $test->update($request->only(['name','email','number']));
    return redirect()->route('user');
}
}
