<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\courses;
use App\Models\Admin;
use App\Models\Contents;

class appcontroller extends Controller
{
     function Dashboard () {
        $courses = courses::orderBy('name','asc')->paginate(10);
         $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('dashboard')->with(['courses'=>$courses,'LoggedUserInfo'=>$data]);
    }
    function MyCourses () {
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('mycourses', $data);
    }
    
    function home () {
        return view('homepage');
    }
    function course_details ($id) {
        // $courses_detail = courses::join('courses', 'courses.instructor','=','admins.id')
        //                 ->get(['courses.name','courses.	c_code','courses.banner','courses.section','instractorsinfo.Name','instractorsinfo.Designation','instractorsinfo.Department','instractorsinfo.Email']);
        $courses_detail = courses::find($id);
        $instructor = Admin::find($courses_detail["instructor"]);
        $allcontetns = Contents::find($courses_detail["id"]);
        return view('course_details')->with(['course_detail'=>$courses_detail,'instructor'=>$instructor,'allcontetns'=>$allcontetns]);

        // return view('course_details',compact('course_details','instructor'));
        // $data= courses::with('instructor')->find($id);
        // return $data;
        // return view('course_details')->with('courses_detail',$courses_detail);
    }

    function signup () {
        return view('signup');
    }

    function contact () {
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];

        return view('Contact',$data);
    }

    function login () {
        return view('login');
    }

    function save(Request $request) {
        $request->validate([
            'name'=>'required',
            'universityid'=>'required|unique:admins',
            'dept'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:10',
            'profession'=>'required'
        ]);

        $user = new Admin;
        $user->name = $request->name;
        $user->universityid = $request->universityid;
        $user->dept = $request->dept;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->profession = $request->profession;
        // $user->image = $request->image;
        if($request->hasfile("image")){
            $imgfile = $request->file("image");
            $imgfilename = time().'.'.strtolower($imgfile->getClientOriginalExtension());
            $imgfile->move('media/courses/',$imgfilename);
            $user->image = $request->$imgfilename;
        }
        $save = $user->save();
        
        if($save){
        return redirect('/')->with('success','Sign up sucessfull');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
        return $request->input();

    }

    function loginCheck(Request $request){
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('/dashboard');

            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function profile(){
         $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('profile', $data);
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

    function create_course(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
        return view('course_create', $data);
    }

    function save_course(Request $request){
        $create_course = new courses;
        $create_course->name = $request->input("name");
        $create_course->c_code = $request->input("c_code");
        if($request->hasfile("banner")){
            $file = $request->file("banner");
            // $extension = $file.getClientOriginalExtension();
            // $filename = time().'.'.$extension;
            $filename = time().'.'.strtolower($file->getClientOriginalExtension());
            $file->move('media/courses/',$filename);
            $create_course->banner = $filename;
        }
        $create_course->section = $request->input("section");
        $create_course->instructor = $request->input("instructor");

        $create_course->save();
        return redirect('/dashboard');
    }
    
}
