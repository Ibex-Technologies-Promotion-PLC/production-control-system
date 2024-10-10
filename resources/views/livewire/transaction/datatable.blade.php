<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <x-table-toolbar :perPage="$perPage">
        <x-slot name="filters">
            <div class="responsive-grid-3-4">

                {{-- <div>
                    <label for="wofilterselect-wo-code">{{ __('validation.attributes.wo_code') }}: </label>
                <select wire:model="filterWoCode" id="wofilterselect-wo-code" class="basic-select text-xs">
                    <option value="" selected>{{ __('common.all') }}</option>
                    @foreach ($this->woCodes as $wo_code)
                    <option value="{{ $wo_code }}">
                        {{ $wo_code }}
                    </option>
                    @endforeach
                </select>
            </div> --}}

</div>
</x-slot>
</x-table-toolbar>
<div>

    <x-table class="sortable">
        <thead>
            <x-table-row>
                <x-thead-item class="center aligned"> {{ __('validation.attributes.prd_name') }} </x-thead-item>

                <x-thead-item class="center aligned">{{ __('validation.attributes.cmp_name') }}</x-thead-item>
                <x-thead-item class="center aligned">{{ __('validation.attributes.total') }}</x-thead-item>

                <x-thead-item class="center aligned">{{ __('validation.attributes.quantity') }}</x-thead-item>
                <x-thead-item class="center aligned">Transaction Date</x-thead-item>

                <x-thead-item></x-thead-item>
            </x-table-row>
        </thead>
        <tbody>
            @forelse ($transactionData as $key => $transaction)
            <x-table-row wire:key="{{ $key }}">

                <x-tbody-item class="center aligned font-bold collapsing">{{ $transaction->product->prd_name }}</x-tbody-item>
                <x-tbody-item class="center aligned">{{ $transaction->company->cmp_name }}</x-tbody-item>
                <x-tbody-item class="center aligned">{{ $transaction->total }} Br</x-tbody-item>
                <x-tbody-item class="center aligned">{{ $transaction->product->dispatchProducts->first()->dp_amount }} {{$transaction->product->units->first()->abbreviation}}</x-tbody-item>

                <x-tbody-item class="center aligned"> {{ $transaction->created_at->format('d M Y, h:i A') }}
                </x-tbody-item>



            </x-table-row>
            @empty
            <tr>
                <x-tbody-item colspan="10">
                    <x-placeholder icon="brown open box">{{ __('common.no_results') }}</x-placeholder>
                </x-tbody-item>
            </tr>
            @endforelse
        </tbody>
        <tfoot class="mt-5">
            <tr>
                <td></td>

                <td colspan="3" class="right aligned -pr-10">
                    <strong>{{ __('Total:') }} {{ number_format($transactionData->sum('total'), 2) }} Br</strong>
                </td>
              

                <td></td>
            </tr>
        </tfoot>


    </x-table>

</div>


</div>