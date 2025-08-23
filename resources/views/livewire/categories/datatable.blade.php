<div>
    <x-table-toolbar :perPage="$perPage">
        <x-slot name="filters">
            <div class="responsive-grid-3-4">
                <!-- Add filters here if needed -->
            </div>
        </x-slot>
    </x-table-toolbar>
    <div>
        <x-table class="ui celled sortable table tablet stackable very compact">
            <x-thead>
                <x-table-row>
                    <x-thead-item>{{ __('common.no') }}</x-thead-item>
                    <x-thead-item sortBy="ctg_name">{{ __('validation.attributes.ctg_name') }}</x-thead-item>
                    <x-thead-item>{{ __('common.products') }}</x-thead-item>
                    <x-thead-item>{{ __('common.date') }}</x-thead-item>
                    <x-thead-item></x-thead-item>
                </x-table-row>
            </x-thead>
            <x-tbody>
                @forelse ($data as $key => $category)
                    <x-table-row wire:key="{{ $loop->index }}">
                        <x-tbody-item class="collapsing center aligned text-sm">{{ $key + 1 }}</x-tbody-item>
                        <x-tbody-item class="collapsing">{{ $category->ctg_name }}</x-tbody-item>
                        <x-tbody-item class="center aligned">{{ $category->products->count() }}</x-tbody-item>
                        <x-tbody-item class="collapsing">{{ $category->created_at->format('d.m.Y H:i') }}</x-tbody-item>
                        <x-tbody-item class="collapsing">
                            <div>
                                <x-crud-actions delete edit modelName="category" :modelId="$category->id">
                                    <a href="{{ route('categories.show', $category->id) }}"
                                        data-tooltip="{{ __('common.detail') }}" data-variation="mini">
                                        <i class="link eye icon"></i>
                                    </a>
                                </x-crud-actions>
                            </div>
                        </x-tbody-item>
                    </x-table-row>
                @empty
                    <tr>
                        <td colspan="5">
                            <x-placeholder icon="sitemap">
                                {{ __('common.no_results') }}
                            </x-placeholder>
                        </td>
                    </tr>
                @endforelse
            </x-tbody>
        </x-table>
    </div>
    {{ $data->links('components.tailwind-pagination') }}

    @include('web.helpers.deletable')
</div>
