<?php

namespace App\Imports;

use App\username;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class usernameImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new username([
            'name_tw' => $row['name_tw'],
             'name_tele' => $row['name_tele'],
             'name_ins' => $row['name_ins'],
             'name_discord' => $row['name_discord'],
             'name_medium'=> $row['name_medium'],
             'acc_name'=>$row['acc_name']
        ]);
    }
}