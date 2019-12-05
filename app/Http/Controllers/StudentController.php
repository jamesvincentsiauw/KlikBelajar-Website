<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function showRegularPackageForm(){
        return view('package.regular');
    }
    public function showPremiumPackageForm(){
        $tutor=User::all();
        return view('package.premium')->with('tutor',$tutor);
    }
    public function registerStudent($package, Request $request){
        $student=new Student();
        $student->id=Str::random(15);
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->idLine=$request->idLine;
        $student->address=$request->address;
        $student->address=$request->country;
        $student->address=$request->province;
        $student->address=$request->postalCode;
        $student->jamBelajar=$request->jamBelajar;
        if ($package=="regular"){
            $student->package="Regular";
            $student->idtutor="TBA";
        }
        elseif ($package=="premium"){
            $student->package="Premium";
            $student->idtutor=$request->tutor;
        }
        $student->save();
        return redirect()->back()->with(['success'=>"Sukses Daftar ".$package." Package"]);
    }
}
