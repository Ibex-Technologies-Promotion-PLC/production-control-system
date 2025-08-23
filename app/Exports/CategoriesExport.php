<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CategoriesExport extends BaseExport implements FromQuery, WithMapping, WithHeadings
{

    protected $fileName = 'Kategoriler';


    public function __construct(Builder $query)
    {
        $this->injectedQuery = $query;
    }

    protected function title(): string
    {
        return 'Kayıtlı Kategoriler - Çıktı tarihi: ' . now()->format('d.m.Y');
    }



    public function headings(): array
    {
        return [
            __('validation.attributes.ctg_name'),
            ' ',
            __('common.products') . ' ' . __('common.total'),
            ' ',
            __('common.date'),
            ' ',
        ];
    }


    public function map($category): array
    {

        return [
            $category->ctg_name,
            ' ',
            $category->products->count(),
            ' ',
            $category->created_at->format('d.m.Y H:i'),
            ' ',
        ];
    }



    public function query()
    {
        return $this->injectedQuery;
    }
}
