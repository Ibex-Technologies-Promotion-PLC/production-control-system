<div class="shadow p-2 rounded border border-gray-400 bg-white">
    <div class="font-bold flex justify-between">
        <div>
            <i class="red circle icon animate-pulse"></i>
            <span class="text-ease">{{ __('workorders.live_production_reports') }}</span>
        </div>
        <a href="{{ route('work-orders.daily') }}">
            <i class="industry icon"></i>
            <span class="text-xs">{{ __('common.see_all') }}</span>
        </a>
    </div>
    <div class="pt-1">
        <div class="flex flex-col gap-2 p-2 border rounded shadow-inner">
        
            @forelse ($this->liveReports as $report)
            <div class="p-2 flex justify-between hover:bg-gray-100 hover:shadow-md">
                <div>
                    @if ( !$report['status'])
                    <i class="{{ $report['status'] ? $report['status']['icon'] : "" }}"></i>

                    @endif
                    <span class="font-semibold">{{ $report['workOrder']->product->prd_name }}</span>
                    <span class="text-xs text-ease">({{ $report['workOrder']->product->prd_code }})</span>
                    <span class="text-sm font-semibold {{ $report['status'] ? $report['status']['textColor'] : "" }}">{{ $report['status'] ?$report['status']['explanation']:"" }}</span>
                </div>
                <div wire:click="openWoDetailsModal({{ $report['workOrder']->id }})" class="cursor-pointer hover:text-blue-600">
                    <span class="font-bold text-sm">{{ $report['workOrder']->wo_lot_no }}</span>
                    <span class="pl-2">
                        <i class="blue search link icon"></i>
                    </span>
                </div>
            </div>
            @empty
            <div class="text-sm text-ease font-bold">
                <i class="info icon"></i>
                {{ __('common.there_is_currently_no_production') }}...
            </div>
            @endforelse
        </div>
    </div>



    @if ($woDetailsModal)
    <div wire:key="woDetailsModal" x-data="{woDetailsModal: @entangle('woDetailsModal')}">
        <x-custom-modal active="woDetailsModal" header="{{ __('workorders.details.header') }}">
            <x-workorder-details viewOnly :workOrder="$modalSelectedWorkOrder" />
        </x-custom-modal>
    </div>
    @endif

</div>