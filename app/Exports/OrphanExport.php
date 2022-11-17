<?php

namespace App\Exports;

use App\Models\Orphan;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class OrphanExport implements FromQuery, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    use Exportable;
    protected $FormIds;
    public function __construct($FormIds)
    {
        $this->FormIds = $FormIds;
    }

    public function map($orphan): array
    {
        return
            [
                $orphan->FirstName,
                $orphan->LastName,
                $orphan->FatherName,
                $orphan->PrimaryNumber,
                $orphan->SecondaryNumber,
                $orphan->Sponsored_StartDate,
                $orphan->Sponsored_EndDate,


            ];
    }

    public function headings(): array
    {
        return
            [
                'First Name',
                'Last Name',
                'Father Name',
                'Primary Number',
                'Secondary Number',
                'Sponsor Started Date',
                'Sponsor End Date',

            ];
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $event->sheet->getStyle('A2:G10000')->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                ]);
                $event->sheet->getStyle('A1:G1')->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '31869B'],
                        ],
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => ['argb' => '31869B']
                    ],
                    'font'=> [
                        'name'      =>  'Calibri',
                        'size'      =>  14,
                        'bold'      =>  true,
                        'color' => array('rgb' => 'FFFFFF')
                    ],
                ]);
            }
        ];
    }

    public function query()
    {
        return Orphan::whereIn('id', $this->FormIds);
    }
}
