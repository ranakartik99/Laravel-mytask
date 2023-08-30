<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
   public function RegisterUser() {
    return view('register/registeruser');
   }

   
   public function RegisterSubmit(Request $request) {
    // dd($request->all());

    $pas = Hash::make($request->psw);
    $student = new Student;
    $student->name = $request->name;
    $student->email = $request->email;
    $student->password = $pas;
    $student->save();
    return back()->with('success','You have registered Successfully!!');
   }

   public function showData() {
    $dd1 = Student::get();
    // dd($dd1);
    return view('register/allstudents',['dd1'=>$dd1]);
   }

   public function DeleteStudent($id){
    $dd2= Student::find($id);
    $dd2->delete();
    // $dd2->save();

    return back()->with('success','You have Deleted Successfully!!');
   }

   public function updateStudent($id) {
    $dd2= Student::find($id);

    return view('register/updateinfo',['dd2'=>$dd2]);

   }

   public function UpdateSubmit(Request $request, $id) {

    $student = Student::find($id);
    if ($student) {
        $student->name = $request->name;
        $student->email = $request->email;
        
        // If you're updating the password too, you can use Hash::make
        // $student->password = Hash::make($request->new_password);

        if ($student->save()) {
            return redirect()->route('data1')->with('success', 'Student updated successfully.');
        } else {
            return back()->with('error', 'Error updating student.');
        }
    }

    return back()->with('error', 'Student not found.');

        

        
        // $user = Student::get($id)->first();
        // dd($user); // Or however you're getting the user

        // if ($user) {
        //     // Update the attributes
        //     $user->name = $request->name;
        //     $user->email = $request->email;

        //     // Save the changes
        //     $user->save();
        //     return back()->with('success','You have registered Successfully!!');

        // }
    
    // dd($request->all());
   }
}
    // $dev = new
//     $dd = Student::where('id',$id)->first();
//     $dd->name = $request->name;
//    $dd->email = $request->email;

// $user = Student::findOrFail($request->id); 
// $user->name = $request->name;
// $user->email = $request->email;
// $user->save();

//    $dd->save();


   

