<tr class="positive">
    <td class="center aligned collapsing">
        <span data-tooltip="{{ __('common.approved') }} - {{ $workOrder->completedAt() }}" data-variation="mini" data-position="top left">
            <i class="large double check checkmark icon"></i>
        </span>
    </td>
    <td>{{ $workOrder->product->prd_name }}</td>
    <td>
        <span>{{ $workOrder->wo_amount }} {{ $workOrder->unit->name }}</span>
        @if ( ! $workOrder->unitIsAlreadyBase())
            <span class="text-xs text-ease">({{ round($workOrder->convertedBaseAmount(),3) }} {{ $workOrder->convertedBaseUnit()->name }})</span>
        @endif
    </td>
    <td class="">{{ $workOrder->wo_lot_no }}</td>
    <td class="center aligned collapsing">{{ $workOrder->wo_queue }}</td>
    <td class="center aligned collapsing">{{ $workOrder->wo_code }}</td>
    <td class="collapsing right aligned">
        <x-menu-dropdown main="{{ __('common.see_details')}}" action="openDetailsModal({{ $workOrder->id }})" color="green" icon="search icon">
            {{-- <div wire:click.prevent="openDetailsModal({{ $workOrder->id }})" class="item text-red-600"> 
                <i class="link eye icon"></i>
                {{ __('common.see_details' ) }}
            </div> --}}
            {{-- <div wire:click.prevent="showReservedSources({{ $workOrder->id }})" class="item text-red-600"> 
                <i class="link box icon"></i>
                {{ __('workorders.used_sources' ) }}
            </div> --}}
            {{-- <a href="{{ route('work-orders.edit', ['work_order' => $workOrder->id])}}" class="item text-red-600"> 
                <i class="edit icon"></i>
                {{ __('common.edit')}}
            </a>
            <div wire:click.prevent="delete({{ $workOrder->id }})" class="item text-red-600">
                <i class="trash icon"></i>
                {{ __('common.delete')}}
            </div> --}}
        </x-menu-dropdown>
    </td>
</tr>