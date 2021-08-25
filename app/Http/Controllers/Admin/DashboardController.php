<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class DashboardController extends Controller
{
     public function registered()
     {
         $users= User::all();
         return view('admin.registered')->with('users',$users);
     } //
     public function registedit(Request $request, $id)  
     {
       $users= User::findOrFail($id);
        return view('admin.registeredit')->with('users',$users);
     }
     public function registerupdate(Request $request,$id)
     {
       $users=User::find($id);
       $users->name=$request->input('username');
       $users->usertype=$request->input('usertype');
       $users->update();
       return redirect('/user-registered')->with('status','Your data is updated');
     }
     public function registerdelete($id)
     {
        
         $users=User::findOrFail($id);
         $users->delete();
         return response()->json(['status' =>'User deleted successfully']);
        //  return redirect('/user-registered')->with('status','Your data is Deleted');

     }
    public function downloadpdf()
    {
      $users=User::all();
      $pdf = PDF::loadView('admin.loadvu',compact('users'));
      return $pdf->download('register.pdf');
    }
}
