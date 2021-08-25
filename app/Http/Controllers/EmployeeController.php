<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
use Illuminate\Support\Facades\Validator;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.emp.addemp');
    }


    
    // public function store(Request $request)
    // {
    //     $employee = new Employee();
    //     $employee ->name = $request->input('First name');
    //     $employee ->email = $request->input('last name');
    //     $employee->gst = $request->input('email');
    //     $employee ->website = $request->input('phone');
    //     $employee ->website = $request->input('company');
       
        
    //     $employee->save();
    //      return redirect('/admin')->with('employee',$employee);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'First' => 'required|max:120',
            'last' => 'required|max:120',
            
            'email' => 'required|email|unique:users',
            'phone' => 'required|digits:10',
            'Company'=>'required'
            ]);
        
        $employee = new Employee();
        $employee ->First = $request->input('First');
        $employee ->last = $request->input('last');
        $employee->email= $request->input('email');
        $employee ->phone = $request->input('phone');
        $employee ->Company = $request->input('Company');
      
        
        $employee->save();
         return redirect('/employee')->with('employee',$employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $employees = Employee::paginate(10);
        return view('admin.emp.employee')->with('employees',$employees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('admin.emp.editemp')->with('employees',$employees);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'First' => 'required|max:50',
            'last' => 'required|max:50',  
            'email' => 'required|email|unique:users',
            'phone' => 'required|digits:10',
            'Company'=>'required'
            ]);
        
        $employees = Employee::find($id);
        $employees->First = $request->input('First');
        $employees->last = $request->input('last');
        $employees ->email = $request->input('email');
        $employees ->phone = $request->input('phone');
        $employees ->Company = $request->input('Company');
        $employees->save();
         return redirect('/employee')->with('employees',$employees)->with('status','Your data is updated');
    }


    
    public function search(Request $request ){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $employees = Employee::query()
            ->where('First', 'LIKE', "%{$search}%")
          
            ->get();
          
        // Return the search view with the resluts compacted
        return view('admin.emp.employee')->with('employees',$employees);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employee::find($id);
        $employees ->delete();
        return response()->json(['status' =>'Employee deleted successfully']);
        // return redirect('/employee')->with('employee',  $employees);
    }
    // public function innerjoin(){

    //     $result= DB::table('employees')
    //     ->join('companies','employees.Company','=','companies')
    // }

    public function srch(Request $request ){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $objName = Employee::query()
            // ->where('first', 'LIKE', "%{$search}%")
            // ->oRwhere('last', 'LIKE', "%{$search}%")
            ->orWhereRaw("concat(first, ' ', last) like '%{$search}%' ")
            
              
            ->get();
           
          
          
        // Return the search view with the resluts compacted
        return view('admin.emp.join')->with('objName',$objName);
        
    }
    public function downloadpdf()
    {
      $employees=Employee::all();
      $pdf = PDF::loadView('admin.emp.loadveu',compact('employees'));
      return $pdf->download('employee.pdf');
    }

}
