<?php

return [

 

    'accepted' => 'The:attribute should be accepted.',
    'active_url' => 'The :attribute must be a valid URL.',
    'after' => 'The :attribute value must be after :date.',
    'after_or_equal' => 'The :attribute value must be after or equal to :date.',
    'alpha' => 'The:attribute must consist of letters only.',
    'alpha_dash' => 'The :attribute must consist of letters, numbers and dashes only.',
    'alpha_num' => 'The :attribute must contain letters and numbers only.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute value must be before :date.',
    'before_or_equal' => 'The :attribute value must be before or equal to :date.',
    'between' => [
        'numeric' => ':attribute must be between :min - :max.',
        'file' => 'The :attribute must have a kilobyte value between :min - :max.',
        'string' => ':attribute must consist of :min - :max characters.',
        'array' => 'The :attribute must have objects between :min - :max.',
    ],
    'boolean' => 'The :attribute must only be true or false.',
    'confirmed' => 'The :attribute occurrence does not match.',
    'date' => 'The :attribute must be a valid date.',
    'date_equals' => 'The :attribute and :date must be the same dates.',
    'date_format' => 'The :attribute does not match the :format format.',
    'different' => 'The :attribute and :other must be different from each other.',
    'digits' => ':attribute :digits must consist of digits.',
    'digits_between' => 'The :attribute must consist of digits between :min and :max.',
    'dimensions' => 'The :attribute image dimensions are invalid.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The email address entered in the :attribute field is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The:attribute field is required to be filled.',
    'ends_with' => ':attribute must end with :values',
    'gt' => [
        'numeric' => ':attribute must be greater than :value.',
        'file' => ':attribute must be larger than :value kilobytes.',
        'string' => ':attribute must be longer than :value characters.',
        'array' => ':attribute must be more than :value.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be equal to or greater than :value.',
        'file' => 'The :attribute must be equal to or larger than the :value kilobyte size.',
        'string' => ':attribute must be as long as :value characters or longer.',
        'array' => 'There must be one or more :attribute, :value.',
    ],
    'image' => 'The :attribute field must be an image file.',
    'in' => 'The :attribute value is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The:attribute must be a valid IP address.',
    'ipv4' => 'The:attribute must be a valid IPv4 address.',
    'ipv6' => 'The:attribute must be a valid IPv6 address.',
    'json' => ':attribute must be a valid JSON variable.',
    'lt' => [
        'numeric' => ':attribute must be less than :value.',
        'file' => ':attribute must be less than :value kilobytes in size.',
        'string' => ':attribute must be shorter than :value characters.',
        'array' => ':attribute must be less than :value.',
    ],
    'lte' => [
        'numeric' => ':attribute must be equal to or less than :value.',
        'file' => 'The :attribute must be the size of :value kilobytes or less.',
        'string' => ':attribute must be as long as :value characters or less.',
        'array' => 'The :attribute must be :value or less.',
    ],
    'max' => [
        'numeric' => 'The :attribute value must be less than :max.',
        'file' => 'The :attribute value must be less than :max kilobytes.',
        'string' => 'The :attribute value must be less than :max characters.',
        'array' => 'The :attribute value must have less than :max objects.',
    ],
    'mimes' => 'The :attribute file format must be :values.',
    'mimetypes' => 'The :attribute file format must be :values.',
    'min' => [
        'numeric' => 'The :attribute value must be greater than :min.',
        'file' => 'The :attribute value must be greater than :min kilobytes.',
        'string' => 'The :attribute value must be greater than :min characters.',
        'array' => 'The :attribute must have at least :min objects.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'Password is invalid.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other has the value :value.',
    'required_unless' => 'The :attribute field is required when the :other field does not have one of the :value values.',
     'required_with' => 'The :attribute field is required when :values is present.',
     'required_with_all' => 'The :attribute field is required with any :values value.',
     'required_without' => 'The :attribute field is required without :values.',
     'required_without_all' => 'The :attribute field is required without any of the :values values.',
     'same' => ':attribute must match :other.',
     'size' => [
         'numeric' => 'The :attribute must be :size.',
         'file' => 'The :attribute :size must be kilobytes.',
         'string' => 'The :attribute must be :size character.',
         'array' => 'The :attribute must have :size object.',
     ],
     'starts_with' => ':attribute must start with: :values',
     'string' => ':attribute must be string.',
     'timezone' => 'The :attribute must be a valid timezone.',
     'unique' => ':attribute is already registered.',
     'uploaded' => ':attribute upload failed.',
     'url' => 'The :attribute format is invalid.',
     'uuid' => ':attribute must conform to a UUID format.',


     'custom' => [
         'x' => [
             'regex' => 'You must enter data in "a-b.c" format for field x.',
         ],
     ],


     'attributes' => [
         'amount' => 'Amount',
         'lot_no' => 'Lot no',
         'code' => 'Code',

         'created_at' => 'Creation Date',
         'updated_at' => 'Updated date',

         //products
         'category_id' => 'Category',
         'prd_code' => 'Product code',
         'prd_name' => 'Product name',
         'prd_barcode' => 'Barcode',
         'prd_min_threshold' => 'Critical stock',
         'prd_shelf_life' => 'Shelf life',
         'prd_cost' => 'Price',
         'prd_note' => 'Description',
         'prd_is_active' => 'Active',
         'prd_producible' => 'Producible',
         'product_id' => 'Product',

         // companies
         'cmp_name' => 'Company name',
         'cmp_current_code' => 'Current code',
         'cmp_commercial_title' => 'Commercial Title',
         'cmp_tax_number' => 'Tax number',
         'cmp_phone' => 'Contact Number',
         'cmp_note' => 'Description',
         'cmp_supplier' => 'Supplier',
         'cmp_customer' => 'Customer',

         // addresses
         'adr_name' => 'Address description',
         'adr_country' => 'Country',
         'adr_province' => 'City',
         'adr_district' => 'District',
         'adr_body' => 'Address Detail',
         'adr_phone' => 'Contact Number',
         'adr_note' => 'Note',

         // dispatchorders
         'address_id' => 'Address',
         'company_id' => 'Company',
         'sales_type_id' => 'Sales type',
         'do_number' => 'Shipment number',
         'do_planned_datetime' => 'Planned date',
         'do_actual_datetime' => 'Actual date',
         'do_status' => 'Status',
         'do_note' => 'Note',

         //salestype
         'st_name' => 'Sales type name',
         'st_abbr' => 'Sales type abbreviation',

         'de_license_plate' => 'Vehicle plate',
         'de_driver_name' => 'Driver name',
         'de_driver_phone' => 'Driver phone',
         'de_dispatch_expense' => 'Dispatch fee',
         'de_handling_expense' => 'Download cost',

         //categories
         'ctg_name' => 'Category name',

         'wo_code' => 'Work order number',
         'wo_lot_no' => 'Lot no',
         'wo_amount' => 'Amount',
         'wo_datetime' => 'Scheduled date',
         'wo_queue' => 'Charge no',
         'wo_status' => 'Status',
         'wo_note' => 'Note',
         'wo_started_at' => 'Start time',
         'wo_completed_at' => 'End time',
         'rcp_code' => 'Recipe Code',

         //units
         'unit_id' => 'Unit',

     ],

];