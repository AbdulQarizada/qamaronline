<?php

namespace App\Exports;

use App\Models\Orphan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

class OrphanExport implements FromCollection
{

    public function collection()
    {
        return Orphan::all();
    }
}
