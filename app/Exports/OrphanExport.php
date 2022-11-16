<?php

namespace App\Exports;

use App\Models\Orphan;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\withMapping;
use Maatwebsite\Excel\Concerns\withHeadings;



class OrphanExport implements FromQuery, withMapping, withHeadings
{

    use Exportable;
    protected $SelectedRows;
    public function __construct($SelectedRows)
    {
      $this -> $SelectedRows = $SelectedRows;
    }

    public function map($OrphansFields) : array
    {

        return
         [
            $OrphansFields -> id,
            $OrphansFields -> FirstName,
            $OrphansFields -> LastName
         ];
    }

    public function headings() : array
    {
        return
         [
            '#ID',
            'First Name',
            'Last Name',
         ];
    }

    public function query()
    {
        return Orphan::whereIn('id', $this -> SelectedRows);
    }
}
