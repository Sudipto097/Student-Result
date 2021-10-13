<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class StudentsImport implements ToModel, WithHeadingRow
{

    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Students([
            'student_name'=>$row['student_name'],
            'student_father'=>$row['student_father'],
            'student_mother'=>$row['student_mother'],
            'email'=>$row['email'],
        ]);
    }

//    public  function onError(Throwable $e)
//    {
//        // TODO: Implement onError() method.
//    }
}
