<?php

namespace App\Imports;

use App\wallet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class walletImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new wallet([
            'bep20'  => $row['bep20'], 
            'sol' => $row['sol'],
            'terra' => $row['terra'],
            'acc_name'=>$row['acc_name']
        ]);
    }
}