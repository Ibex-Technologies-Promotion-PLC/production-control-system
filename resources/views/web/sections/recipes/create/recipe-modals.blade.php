@if ($deleteConfirmModal)
    <div x-data="{ deleteConfirmModal: @entangle('deleteConfirmModal') }" x-cloak>
        <x-confirm active="deleteConfirmModal" color="red" confirm="{{ __('common.delete') }}"
            deny="{{ __('common.cancel') }}" atConfirm="removeRecipe()" atDeny="closeDeleteConfirmModal()">
            {{ __('recipes.are_you_sure_you_want_to_delete_this_recipe') }}
        </x-confirm>
    </div>
@endif

@if ($formChangedModal)
    <div x-data="{ formChangedModal: @entangle('formChangedModal') }" x-cloak>
        <x-confirm :active="$active ?? 'deleteConfirmModal'" color="red" confirm="{{ __('common.delete') }}" deny="{{ __('common.cancel') }}"
            atConfirm="removeRecipe()" atDeny="closeDeleteConfirmModal()">
            {{ __('recipes.are_you_sure_you_want_to_delete_this_recipe') }}
        </x-confirm>
    </div>
@endif
