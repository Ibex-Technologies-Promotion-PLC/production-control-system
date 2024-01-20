<?php

namespace App\Exports;

use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StockMovesExport extends BaseExport implements FromQuery, WithHeadings, WithMapping
{
    
    protected $fileName = 'StockMoves';

    public function __construct(Builder $injectedQuery)
    {
        $this->injectedQuery = $injectedQuery;
    }

    protected function title() : string
    {
        return 'StockMoves list - Release date: ' . $this->fileName .now()->format('d.m.Y');
    }


    public function headings() : array
    {
        return [
            __('validation.attributes.type'), '',
            __('validation.attributes.prd_name'), '',
            __('validation.attributes.amount'), '',
            __('validation.attributes.total'), '',
            __('validation.attributes.lot_no'), '',        
            __('validation.attributes.status'), ''        
        ];
    }

    public function map($stockMove) : array
    {
        return [
            $stockMove->type, '',
            $stockMove->product->code .'|'.$stockMove->product->prd_name, '',
            $stockMove->direction?'+ ':'- '.$stockMove->base_amount, '',
            $stockMove->direction?'+ ':'- '. $stockMove->total, '',
            $stockMove->lot_number, '',
            $stockMove->approved ? 'Approved' : 'Not Approved',
        ];
    }


    public function query()
    {
        return $this->injectedQuery;
    }
}
