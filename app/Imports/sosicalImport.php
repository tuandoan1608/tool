<?php

namespace App\Imports;

use App\tb_links;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class sosicalImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new tb_links([
            'link_tw' => $row['link_tw'],
            'link_yt' => $row['link_yt'],
            'link_fb' => $row['link_fb'],
            'link_medium' => $row['link_medium'],
            'link_red' => $row['link_red'],
            'link_email' => $row['link_email'] ,
            'link_lk' => $row['link_lk'],
            'acc_name' => $row['acc_name'],
            'link_ins' => $row['link_ins']
        ]);
    }
}