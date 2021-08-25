<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Excel;
use App\Imports\TransactionImport;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        return view('Transaction.tran');
    }
    public function store(Request $request)
    {
        
        $transaction = new Transaction();
        $transaction ->name = $request->input('name');
        $transaction->Account_no= $request->input('Account_no');
        $transaction ->To = $request->input('To');
        $transaction ->Amount = $request->input('Amount');
        $transaction->save();
         return redirect('/tranadd');
    }
    public function importForm()
    {
    return view('transaction.import');

    }
    public function import(Request $request)
    {
       
        $this->validate($request,[
         
            'file'=>'mimes:csv,xlsx|max:10000'
            ]);


        Excel::import(new TransactionImport,$request->file);
    return redirect('/transaction');

    }
    public function show()
    {
        $transactions = Transaction::paginate(10);
        return view('transaction.transactions')->with('transactions',$transactions);
    }

    
    public function search(Request $request ){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $transactions = Transaction::query()
            ->where('name', 'LIKE', "%{$search}%")
          
            ->get();
          
        // Return the search view with the resluts compacted
        return view('transaction.transactions')->with('transactions',$transactions);
        
    }
    public function destroy()
    {
        DB::table('transactions')->delete(); 
        return response()->json(['status' =>'Transactions deleted successfully']);
        // return redirect('/transaction');
    }
     
}
