<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use File;
use App\Mail\CompanyMail;
use Illuminate\Support\Facades\Mail;



class CompanyController extends Controller
{
    public function index()
    {
        return view('admin.addcom');
    }


    public function store(Request $request)
    {


        $this->validate($request,[
            'name' => 'required|max:120',
            'email' => 'required|email|unique:users',
            'gst' => 'required|lte:100',
            'website'=>['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+com&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'image'=>'required|mimes:jpeg,jpg,png|max:10000'
            ]);

        $company = new Company();
        $company ->name = $request->input('name');
        $company ->email = $request->input('email');
        $company ->gst = $request->input('gst');
        $company ->website = $request->input('website');
       
         if ($request->hasfile('image')){
         $file =$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename = time() . '.' . $extension;
         $file->move('uploads/Company/',$filename);
         $company->image = $filename;
         } else {
             return $request;
             $company->image = '';
         }
         $company->save();
        

         $details = [
            'name' => $company->name,
            'email' =>$company->email,
            'website' =>$company->website,
           
        ];
       
        \Mail::to('himanshujayant167@gmail.com')->send(new \App\Mail\CompanyMail($details));
       
       
        if(Mail::failures() != 0) {
             return redirect('/admin')->with('company',$company);
         }
 
         else {
             return redirect('/company');
         }

        //  $to_email = "ranianchal2001@gmail.com";

        //  Mail::to($to_email)->send(new CompanyMail);
 
        //  if(Mail::failures() != 0) {
        //      return redirect('/admin')->with('company',$company);
        //  }
 
        //  else {
        //      return "<p> Failed! Your E-mail has not sent.</p>";
        //  }

         
        //  return redirect('/send-email');
    }


    public function display()
    {
        $companies = Company::paginate(10);
        return view('admin.dashboard')->with('companies',$companies);
    }



    public function edit($id)
    {
        $companies = Company::find($id);
        return view('admin.compedit')->with('companies',$companies);
    }



    public function update(Request $request, $id)
    {
       
        
      
        $this->validate($request,[
            'name' =>   'required|max:120',
            'email' =>  'required|email|unique:users',
            'gst' =>    'required|lte:100',
            'website' => ['required','regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+com&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'],
            'image' =>   'required|mimes:jpeg,jpg,png|max:10000'
            ]);


        $companies = Company::find($id);
        $companies ->name = $request->input('name');
        $companies ->email = $request->input('email');
        $companies ->gst = $request->input('gst');
        $companies ->website = $request->input('website');
       
         if ($request->hasfile('image')){
         $file =$request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename = time() . '.' . $extension;
         $file->move('uploads/Company/',$filename);
         $companies->image = $filename;

        
         $myFile = '/uploads/Company/'.$filename;
       
         if (File::exists($myFile)) { 
         File::delete($myFile);
             }          
         } 
        else {
             return $request;
             $companies ->image ='';
         }

    //      $myFile = '/path/to/my/image1.png';
    //    if (File::exists($myFile)) { 
    //        File::delete($myFile);
    //    }

         $companies->save();
         return redirect('/admin')->with('companies',$companies)->with('status','Your data is updated');
    }



    public function delete($id)
    {
        $companies = Company::find($id);
        $companies ->delete();
        return response()->json(['status' =>'company deleted successfully']);
        // return redirect('/admin')->with('companies',  $companies);
    }

    public function search(Request $request ){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $companies = Company::query()
            ->where('name', 'LIKE', "%{$search}%")
          
            ->get();
          
        // Return the search view with the resluts compacted
        return view('admin.search')->with('companies',$companies);
        
    }

    public function innerjoin($name){

        // $result= DB::table('companies')
        // ->join('employees','companies.id','=','employees.Company')
        // ->select('companies.name as companyName','employees.First as employeeName')
        // ->get();
       
       
        $data =DB::table('employees')
        ->join('companies','employees.Company',"=",'companies.name')
        ->select('employees.First as First','employees.last as last','companies.name as Company','employees.email as email','employees.phone as phone')
        ->where('companies.name','LIKE', "%{$name}%")->
        get();
        return View('admin.emp.join')->with('objName',$data);
        // return view('admin.emp.join')->with('data',$data);

    }

    // public function sendEmail() 
    // {
    //     $company = new Company();
    //     $to_email = "ranianchal2001@gmail.com";

    //     Mail::to($to_email)->send(new CompanyMail);

    //     if(Mail::failures() != 0) {
    //         return redirect('/admin')->with('company',$company);
    //     }

    //     else {
    //         return "<p> Failed! Your E-mail has not sent.</p>";
    //     }
    // }

   public function sendmail()
   {
    $company = new Company();
    $details = [
        'name' => $company->name(),
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('ranianchal2001@gmail.com')->send(new \App\Mail\CompanyMail($details));
   
    dd("Email is Sent.");}
    
}

    
  


