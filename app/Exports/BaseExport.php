<?php

namespace App\Exports;

use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithProperties;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BaseExport implements ShouldAutoSize, WithStyles, WithProperties, Responsable
{
    use Exportable;

    protected $injectedQuery;
    protected $fileName = 'null';


    public function toPdf()
    {
        return $this->download($this->fileName . now()->format('d.m.Y') . '.pdf', \Maatwebsite\Excel\Excel::MPDF);
    }

    public function toExcel()
    {
        return $this->download($this->fileName . now()->format('d.m.Y') . '.xlsx');
    }

    public function properties(): array
    {
        return [
            'creator'        => auth()->user()->name,
            'lastModifiedBy' => auth()->user()->name,
            'title' => method_exists($this, 'title') ? $this->title() : 'File',
        ];
    }


    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}