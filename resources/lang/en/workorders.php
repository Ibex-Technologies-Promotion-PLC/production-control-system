<?php

return [

    // states
    'approved' => 'Approved',
    'completed' => 'Completed',
    'in_progress' => 'In production',
    'prepared' => 'Ready for production',
    'preparing' => 'Preparing',
    'active' => 'Active',
    'suspended' => 'Suspended',


    //details
    'belonged_workorder' => 'Belongs to work order',

    'product_id' => 'Recipe number ???',
    'lot_no' => 'Lot No',
    'amount' => 'Amount',
    'datetime' => 'Planned Date',
    'code' => 'Work Order No',
    'queue' => 'Charge no',
    'is_active' => 'Active',
    'is_completed' => 'Completed',
    'note' => 'Description',


    'daily_production' => 'Daily production',

    'create' => [
        'header' => 'Create Work Order',
        'subheader' => '',
    ],

    'details' => [
        'header' => 'Work order detail',
        'subheader' => ':workorder',
    ],

    'edit' => [
        'header' => 'Edit work order',
        'subheader' => ':workorder',
    ],

    'no_workorder_found' => 'No work order found',
    'create_workorder' => 'create work order',
    'select_lot_number' => 'Select lot',
    'necessary_amount' => 'Required amount',
    'reserve_sources' => 'Reserve resources',
    'reserved_sources' => 'Reserved resources',
    'reserve_sources_for_product' => 'Reserve Resources for:product Production',
    'specified_sources_are_enough_for_manufacturing' => 'The specified resources are sufficient to cover production.',
    'amount_more_required' => ':amount more required',
    'reserved' => 'Reserved',
    'reserve_lot' => 'Reserve lot',
    'reserve_amount' => 'Reserve amount',
    'reserved_amount' => 'Reserved amount',
    'reserved_resources_for_manufacturing_product' => ':Resources reserved for product production',
    'wo_will_fallback_to_inprogress_state' => 'The work order will be in progress',
    'specified_resources_reserved_to_use_in_production' => 'The specified resources are reserved for use in production',
    'reserved_resources_will_be_used_as_needed_when_production_is_finalized' => 'When production is completed, the reserved resources are used as needed.',
    'insufficient_sources' => 'Insufficient resources',
    'please_reserve_enough_amount_of_resources_in_order_to_continue_production' => 'You must reserve sufficient resources to continue production.',

    'necessary_items_and_amounts_will_be_shown_here' => 'Materials and quantities required for production will be displayed here',
    'please_fill_in_the_amount_and_unit_fields' => 'Please fill in the quantity and unit fields.',
    'specify_sources' => 'Specify sources',
    'please_specify_all_necessary_sources_for_production' => 'Please specify the resources required for production',
    'items_to_be_used_in_production' => 'Materials to be used in production',
    'recipe_ingredients_must_be_correct_for_keep_inventory_flawless' => 'The bill of materials must be complete in order to keep accurate stock tracking.',
    'workorder_saved_successfully' => 'Work order saved',
    'daily_work_orders' => 'Daily work order',
    'production_is_completed' => 'Production completed, awaiting approval',
    'production_continues' => 'Production continues',
    'on_hold' => 'On hold',

    'create_work_order' => 'Create work order',
    'wo_status' => 'Status',
    'wo_suspended' => 'Work order suspended',
    'wo_unsuspended' => 'Work order is awaiting production',
    'wo_complete' => 'Finish',
    'wo_start' => 'Start job',
    'wo_delete' => 'Delete work order',
    'abort_this_work_order' => 'Stop production',
    'production_aborted' => 'Production aborted',
    'reserved_sources_deducted_from_stocks_and_product_added_to_stock' => 'Reserved resources have been removed from stock, :product has been added to stock.',
    'production_results_will_not_be_processed' => 'The production result will not be processed into stock.',

    'waiting_for_production' => 'Waiting for production...',
    'production_started' => 'Production has started',
    'started_at_time' => ':time started',
    'production_started_at_time' => 'Production :time started',
    'production_results_will_be_added_to_stock' => 'The production result will be added to stock',

    'there_is_no_any_schuled_work_today' => 'No work schedule has been created for today',
    'mark_as_ready_when_all_sources_picked' => 'Once resources are selected they should be marked as \'prepared\'.',
    'all_sources_are_prepared_and_wo_can_get_start' => 'All resources specified, job ready to start!',
    'edit_sources_before_start' => 'Edit sources',
    'examine_sources_and_edit' => 'Review or edit sources',
    'activate_first_to_get_in_progress' => 'Activate to produce',
    'get_sources_ready_to_be_prepared' => 'Select resources and quantities to start production',
    'resources_are_preparing' => 'Preparing resources to be used in production',
    'resources_are_prepared_waiting_for_start_signal' => 'Resources are prepared, production is ready to start!',
    'waiting_for_approval' => 'Waiting for administrator approval',
    'used_sources' => 'Used resources',
    'completed_at_time' => 'Job end: :time',

    'live_production_reports' => 'Live production reports',

    'efficiency_limits_exceeded' => 'Efficiency is over/under!',
    'efficiency_limits_exceeded_for_this_production' => 'The production result data exceeds the %:efficiency tolerance value specified for the BOM. Please make sure you entered the result correctly. If you wish, you can change the efficiency value in the relevant recipe.',
];
