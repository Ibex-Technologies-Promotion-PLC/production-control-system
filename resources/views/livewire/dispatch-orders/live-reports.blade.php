<div class="shadow p-2 rounded border border-gray-400 bg-white">
    <div class="font-bold flex justify-between">
        <div>
            <i class="red circle icon animate-pulse"></i>
            <span class="text-ease">{{ __('dispatchorders.live_dispatch_reports') }}</span>
        </div>
        <a href="{{ route('dispatchorders.daily') }}">
            <i class="fast shipping icon"></i>
            <span class="text-xs"> {{ __('common.see_all') }}</span>
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
                    <span class="font-semibold">{{ $report['dispatchOrder']->company->cmp_name }}</span>
                    <span class="text-xs text-ease">({{ $report['dispatchOrder']->address->adr_name }})</span>
                    <span class="text-sm font-semibold {{ $report['status'] ? $report['status']['textColor'] : "" }}">{{ $report['status'] ? $report['status']['explanation'] : "" }}</span>
                </div>
                <div wire:click="openDoDetailsModal({{ $report['dispatchOrder']->id }})" class="cursor-pointer hover:text-blue-600">
                    <span class="font-bold text-sm">{{ $report['dispatchOrder']->do_number }}</span>
                    <span class="pl-2">
                        <i class="blue search link icon"></i>
                    </span>
                </div>
            </div>
            @empty
            <div class="text-sm text-ease font-bold">
                <i class="info icon"></i>
                {{ __('common.no_shipments_are_currently_available') }} ...
            </div>
            @endforelse
        </div>
    </div>


    @if ($doDetailsModal)
    <div wire:key="doDetailsModal" x-data="{doDetailsModal: @entangle('doDetailsModal')}">
        <x-custom-modal active="doDetailsModal">
            <x-dispatchorder-details :dispatchOrder="$modalSelectedDispatchOrder" />
        </x-custom-modal>
    </div>
    @endif

</div>