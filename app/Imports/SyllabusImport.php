<?php

namespace App\Imports;

use App\Models\Syllabus;
use App\Models\Standard;
use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;

class SyllabusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

      // dd($row);

      if ($row['class_name'] && $row['subject_name']) {
              $class = Standard::where('slug',strtolower($row['class_name']))->first();
              $subject = Subject::where('slug',strtolower($row['subject_name']))->first();

              if ($class && $subject) {
                return new Syllabus([
                 'name'  => $row['name'],
                 'class_id' => $class->id,
                 'subject_id' => $subject->id
                ]);
              }
      }
       
    }

    public function headingRow(): int
    {
        return 1;
    }
}
