<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Standard;
use App\Models\Subject;
use App\Models\Syllabus;

use App\Imports\SyllabusImport;
use Maatwebsite\Excel\Facades\Excel;


class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = public_path('file/syllabus.csv');
       
       $customerArr = $this->csvToArray($file);

       foreach ($customerArr as $row) {
        $class = Standard::where('slug',strtolower($row['class_name']))->first();
        $subject = null;

        if ($class) {
          $subject = Subject::where('class_id', $class->id)->where('name',strtolower($row['subject_name']))->first();
        }

        if($subject){
        	Syllabus::create([
                "name" => \Str::limit($row["name"], 240, $end='...'),
                "class_id" => $subject->class_id,
                "subject_id" => $subject->id,
        	]);
        }
        
       }
  

    }


    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }
}
