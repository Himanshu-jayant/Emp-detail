<?php

namespace App\Imports;


use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\withHeadingRow;

class TransactionImport implements ToModel,withHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Transaction([
            'name' =>$row['name'],
            'Account_no' =>$row['account_no'],
            'To' =>$row['to'],
            'Amount' =>$row['amount'],
            
        ]);
        
    }
}
