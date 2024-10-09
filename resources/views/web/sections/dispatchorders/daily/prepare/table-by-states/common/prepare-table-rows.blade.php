<x-tbody-item class="two wide">
    @if ($dp->isReady())
    <span>
        <i class="green check circle icon"></i>
        <span class="text-sm">{{ __('common.ready') }}</span>
    </span>
    @else
    <span>
        <i class="red clock icon"></i>
        <span class="text-sm">{{ __('dispatchorders.not_prepared_yet') }}</span>
    </span>
    @endif
</x-tbody-item>
<x-tbody-item class="three wide">
    <span class="font-bold">{{ $dp->product->prd_code }}</span>
    <span class="text-xs text-ease">{{ $dp->product->prd_name }}</span>
</x-tbody-item>
<x-tbody-item class="">
    <span class="font-bold">{{ (float)$dp->dp_amount }} </span>
    <span class="text-sm">{{ $dp->unit->name }}</span>
</x-tbody-item>
@if (!$dispatchOrder->isAllReady())

<x-tbody-item>

    <div class="py-3  px-4 shadow font-bold text-sm flex justify-start">
        <div>
            <span>{{ __('dispatchorders.prd_sales') }}:</span>
            <span class="text-green-600">
                {{ $selling_prices[$dp->product->id] ?? $dp->product->prd_sales }} Br
            </span>
        </div>
        <div class="mx-5">
            <span>{{ __('dispatchorders.prd_cost') }}:</span>
            <span class="text-green-600">
                {{ $dp->product->prd_cost }} Br

            </span>
        </div>
        <div>
            <span>{{ __('dispatchorders.total') }}:</span>
            <span class="text-green-600">
                {{ ($selling_prices[$dp->product->id] ?? $dp->product->prd_sales) * (float)$dp->dp_amount }} Br

            </span>
        </div>
    </div>
</x-tbody-item>
@endif