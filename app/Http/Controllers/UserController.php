<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function regis(Request $request){

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('idCard');

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'uploads/tutors/images/idCard/';

        // upload file
        $fileName=$request->name;
        $file->move($tujuan_upload,$fileName);


        $user=new User();
        $user->id = Str::random(15);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt('password');
        $user->address=$request->address;
        $user->country=$request->country;
        $user->province=$request->province;
        $user->postalCode=$request->postalCode;
        $user->isAdmin=false;
        $user->idCard=$fileName;
        $user->save();

//        Auth::login($user);
        return redirect('/register')->with(['success'=>'Tutor Berhasil Ditambahkan']);
    }
}
