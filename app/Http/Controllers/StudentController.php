<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function index(){
        return view("home",["students" => Student::all()]);
    }
    public function store(Request $req){
        $req->validate([
            "name" => "required",
            "contact" => "required|size:10",
            

        ]);
        $std = new Student();
        $std->name = $req->name;
        $std->contact = $req->contact;
       
        $std->save();

        return redirect()->route("homepage")->with("msg","Data inserted successfully");
    }

    public function destroy($std_id){
        $data = Student::find($std_id);
        $data->delete();

        return redirect()->route("homepage")->with("msg","data deleted successfully");
    }

}