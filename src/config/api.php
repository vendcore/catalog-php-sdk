<?php

return array (
    'product' =>
        array (
            'endpoints' =>
                array (
                    'create' =>
                        array (
                            'route' => 'catalog/api/v1/product/create',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'active',
                                            'name' => 'active',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>1</strong>, <strong class=\'code text-danger\'>0</strong>.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'brand-id',
                                            'name' => 'brand_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'sku',
                                            'name' => 'sku',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                    4 =>
                                        array (
                                            'slug' => 'title',
                                            'name' => 'title',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    5 =>
                                        array (
                                            'slug' => 'country-of-origin',
                                            'name' => 'country_of_origin',
                                            'description' => '',
                                        ),
                                    6 =>
                                        array (
                                            'slug' => 'eccn',
                                            'name' => 'eccn',
                                            'description' => '',
                                        ),
                                    7 =>
                                        array (
                                            'slug' => 'gtin',
                                            'name' => 'gtin',
                                            'description' => '',
                                        ),
                                    8 =>
                                        array (
                                            'slug' => 'harmonized-tariff-code',
                                            'name' => 'harmonized_tariff_code',
                                            'description' => '',
                                        ),
                                    9 =>
                                        array (
                                            'slug' => 'hazmat-flag',
                                            'name' => 'hazmat_flag',
                                            'description' => '',
                                        ),
                                    10 =>
                                        array (
                                            'slug' => 'height',
                                            'name' => 'height',
                                            'description' => '',
                                        ),
                                    11 =>
                                        array (
                                            'slug' => 'length',
                                            'name' => 'length',
                                            'description' => '',
                                        ),
                                    12 =>
                                        array (
                                            'slug' => 'marketing-description',
                                            'name' => 'marketing_description',
                                            'description' => '',
                                        ),
                                    13 =>
                                        array (
                                            'slug' => 'minimum-order-qty',
                                            'name' => 'minimum_order_qty',
                                            'description' => '',
                                        ),
                                    14 =>
                                        array (
                                            'slug' => 'mpn',
                                            'name' => 'mpn',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                    15 =>
                                        array (
                                            'slug' => 'nafta-preference-criterion-code',
                                            'name' => 'nafta_preference_criterion_code',
                                            'description' => '',
                                        ),
                                    16 =>
                                        array (
                                            'slug' => 'oversize-flag',
                                            'name' => 'oversize_flag',
                                            'description' => '',
                                        ),
                                    17 =>
                                        array (
                                            'slug' => 'product-description',
                                            'name' => 'product_description',
                                            'description' => '',
                                        ),
                                    18 =>
                                        array (
                                            'slug' => 'selling-increment',
                                            'name' => 'selling_increment',
                                            'description' => '',
                                        ),
                                    19 =>
                                        array (
                                            'slug' => 'slug',
                                            'name' => 'slug',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    20 =>
                                        array (
                                            'slug' => 'weight',
                                            'name' => 'weight',
                                            'description' => '',
                                        ),
                                    21 =>
                                        array (
                                            'slug' => 'width',
                                            'name' => 'width',
                                            'description' => '',
                                        ),
                                ),
                        ),
                    'delete' =>
                        array (
                            'route' => 'catalog/api/v1/product/delete',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'getProducts' =>
                        array (
                            'route' => 'catalog/api/v1/products',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'brand-name',
                                            'name' => 'brand_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'brand-id',
                                            'name' => 'brand_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'mpn',
                                            'name' => 'mpn',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'page',
                                            'name' => 'page',
                                            'description' => '',
                                        ),
                                    4 =>
                                        array (
                                            'slug' => 'per-page',
                                            'name' => 'per_page',
                                            'description' => '',
                                        ),
                                    5 =>
                                        array (
                                            'slug' => 'sku',
                                            'name' => 'sku',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    6 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                ),
                        ),
                    'get' =>
                        array (
                            'route' => 'catalog/api/v1/product',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'sku',
                                            'name' => 'sku',
                                            'description' => '',
                                        ),
                                ),
                        ),
                    'update' =>
                        array (
                            'route' => 'catalog/api/v1/product/update',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'active',
                                            'name' => 'active',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>1</strong>, <strong class=\'code text-danger\'>0</strong>.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'brand-id',
                                            'name' => 'brand_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'country-of-origin',
                                            'name' => 'country_of_origin',
                                            'description' => '',
                                        ),
                                    4 =>
                                        array (
                                            'slug' => 'eccn',
                                            'name' => 'eccn',
                                            'description' => '',
                                        ),
                                    5 =>
                                        array (
                                            'slug' => 'gtin',
                                            'name' => 'gtin',
                                            'description' => '',
                                        ),
                                    6 =>
                                        array (
                                            'slug' => 'harmonized-tariff-code',
                                            'name' => 'harmonized_tariff_code',
                                            'description' => '',
                                        ),
                                    7 =>
                                        array (
                                            'slug' => 'hazmat-flag',
                                            'name' => 'hazmat_flag',
                                            'description' => '',
                                        ),
                                    8 =>
                                        array (
                                            'slug' => 'height',
                                            'name' => 'height',
                                            'description' => '',
                                        ),
                                    9 =>
                                        array (
                                            'slug' => 'jobber-price',
                                            'name' => 'jobber_price',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                                ),
                                        ),
                                    10 =>
                                        array (
                                            'slug' => 'length',
                                            'name' => 'length',
                                            'description' => '',
                                        ),
                                    11 =>
                                        array (
                                            'slug' => 'list-price',
                                            'name' => 'list_price',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                                ),
                                        ),
                                    12 =>
                                        array (
                                            'slug' => 'map-price',
                                            'name' => 'map_price',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                                ),
                                        ),
                                    13 =>
                                        array (
                                            'slug' => 'marketing-description',
                                            'name' => 'marketing_description',
                                            'description' => '',
                                        ),
                                    14 =>
                                        array (
                                            'slug' => 'minimum-order-qty',
                                            'name' => 'minimum_order_qty',
                                            'description' => '',
                                        ),
                                    15 =>
                                        array (
                                            'slug' => 'mpn',
                                            'name' => 'mpn',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                    16 =>
                                        array (
                                            'slug' => 'nafta-preference-criterion-code',
                                            'name' => 'nafta_preference_criterion_code',
                                            'description' => '',
                                        ),
                                    17 =>
                                        array (
                                            'slug' => 'oversize-flag',
                                            'name' => 'oversize_flag',
                                            'description' => '',
                                        ),
                                    18 =>
                                        array (
                                            'slug' => 'product-description',
                                            'name' => 'product_description',
                                            'description' => '',
                                        ),
                                    19 =>
                                        array (
                                            'slug' => 'selling-increment',
                                            'name' => 'selling_increment',
                                            'description' => '',
                                        ),
                                    20 =>
                                        array (
                                            'slug' => 'sku',
                                            'name' => 'sku',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                    21 =>
                                        array (
                                            'slug' => 'slug',
                                            'name' => 'slug',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    22 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                    23 =>
                                        array (
                                            'slug' => 'title',
                                            'name' => 'title',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    24 =>
                                        array (
                                            'slug' => 'weight',
                                            'name' => 'weight',
                                            'description' => '',
                                        ),
                                    25 =>
                                        array (
                                            'slug' => 'width',
                                            'name' => 'width',
                                            'description' => '',
                                        ),
                                ),
                        ),
                ),
            'params' =>
                array (
                    'active' =>
                        array (
                            'slug' => 'active',
                            'name' => 'active',
                            'description' => '',
                            'rules' =>
                                array (
                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>1</strong>, <strong class=\'code text-danger\'>0</strong>.',
                                ),
                        ),
                    'brand_id' =>
                        array (
                            'slug' => 'brand-id',
                            'name' => 'brand_id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'sku' =>
                        array (
                            'slug' => 'sku',
                            'name' => 'sku',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                ),
                        ),
                    'status' =>
                        array (
                            'slug' => 'status',
                            'name' => 'status',
                            'description' => '',
                            'rules' =>
                                array (
                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                ),
                        ),
                    'title' =>
                        array (
                            'slug' => 'title',
                            'name' => 'title',
                            'description' => '',
                            'rules' =>
                                array (
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'country_of_origin' =>
                        array (
                            'slug' => 'country-of-origin',
                            'name' => 'country_of_origin',
                            'description' => '',
                        ),
                    'eccn' =>
                        array (
                            'slug' => 'eccn',
                            'name' => 'eccn',
                            'description' => '',
                        ),
                    'gtin' =>
                        array (
                            'slug' => 'gtin',
                            'name' => 'gtin',
                            'description' => '',
                        ),
                    'harmonized_tariff_code' =>
                        array (
                            'slug' => 'harmonized-tariff-code',
                            'name' => 'harmonized_tariff_code',
                            'description' => '',
                        ),
                    'hazmat_flag' =>
                        array (
                            'slug' => 'hazmat-flag',
                            'name' => 'hazmat_flag',
                            'description' => '',
                        ),
                    'height' =>
                        array (
                            'slug' => 'height',
                            'name' => 'height',
                            'description' => '',
                        ),
                    'length' =>
                        array (
                            'slug' => 'length',
                            'name' => 'length',
                            'description' => '',
                        ),
                    'marketing_description' =>
                        array (
                            'slug' => 'marketing-description',
                            'name' => 'marketing_description',
                            'description' => '',
                        ),
                    'minimum_order_qty' =>
                        array (
                            'slug' => 'minimum-order-qty',
                            'name' => 'minimum_order_qty',
                            'description' => '',
                        ),
                    'mpn' =>
                        array (
                            'slug' => 'mpn',
                            'name' => 'mpn',
                            'description' => '',
                            'rules' =>
                                array (
                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                ),
                        ),
                    'nafta_preference_criterion_code' =>
                        array (
                            'slug' => 'nafta-preference-criterion-code',
                            'name' => 'nafta_preference_criterion_code',
                            'description' => '',
                        ),
                    'oversize_flag' =>
                        array (
                            'slug' => 'oversize-flag',
                            'name' => 'oversize_flag',
                            'description' => '',
                        ),
                    'product_description' =>
                        array (
                            'slug' => 'product-description',
                            'name' => 'product_description',
                            'description' => '',
                        ),
                    'selling_increment' =>
                        array (
                            'slug' => 'selling-increment',
                            'name' => 'selling_increment',
                            'description' => '',
                        ),
                    'slug' =>
                        array (
                            'slug' => 'slug',
                            'name' => 'slug',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'weight' =>
                        array (
                            'slug' => 'weight',
                            'name' => 'weight',
                            'description' => '',
                        ),
                    'width' =>
                        array (
                            'slug' => 'width',
                            'name' => 'width',
                            'description' => '',
                        ),
                    'id' =>
                        array (
                            'slug' => 'id',
                            'name' => 'id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'brand_name' =>
                        array (
                            'slug' => 'brand-name',
                            'name' => 'brand_name',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'page' =>
                        array (
                            'slug' => 'page',
                            'name' => 'page',
                            'description' => '',
                        ),
                    'per_page' =>
                        array (
                            'slug' => 'per-page',
                            'name' => 'per_page',
                            'description' => '',
                        ),
                    'jobber_price' =>
                        array (
                            'slug' => 'jobber-price',
                            'name' => 'jobber_price',
                            'description' => '',
                            'rules' =>
                                array (
                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                ),
                        ),
                    'list_price' =>
                        array (
                            'slug' => 'list-price',
                            'name' => 'list_price',
                            'description' => '',
                            'rules' =>
                                array (
                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                ),
                        ),
                    'map_price' =>
                        array (
                            'slug' => 'map-price',
                            'name' => 'map_price',
                            'description' => '',
                            'rules' =>
                                array (
                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                ),
                        ),
                ),
        ),
    'brand' =>
        array (
            'endpoints' =>
                array (
                    'create' =>
                        array (
                            'route' => 'catalog/api/v1/brand/create',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'brand-name',
                                            'name' => 'brand_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'brand-description',
                                            'name' => 'brand_description',
                                            'description' => '',
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'slug',
                                            'name' => 'slug',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'delete' =>
                        array (
                            'route' => 'catalog/api/v1/brand/delete',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'getBrands' =>
                        array (
                            'route' => 'catalog/api/v1/brands',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'page',
                                            'name' => 'page',
                                            'description' => '',
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'per-page',
                                            'name' => 'per_page',
                                            'description' => '',
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                ),
                        ),
                    'get' =>
                        array (
                            'route' => 'catalog/api/v1/brand',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'brand-name',
                                            'name' => 'brand_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'status,id',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'brand_name,status',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'update' =>
                        array (
                            'route' => 'catalog/api/v1/brand/update',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'brand-description',
                                            'name' => 'brand_description',
                                            'description' => '',
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'brand-name',
                                            'name' => 'brand_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'slug',
                                            'name' => 'slug',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                    4 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                ),
                        ),
                ),
            'params' =>
                array (
                    'brand_name' =>
                        array (
                            'slug' => 'brand-name',
                            'name' => 'brand_name',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'status' =>
                        array (
                            'slug' => 'status',
                            'name' => 'status',
                            'description' => '',
                            'rules' =>
                                array (
                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                ),
                        ),
                    'brand_description' =>
                        array (
                            'slug' => 'brand-description',
                            'name' => 'brand_description',
                            'description' => '',
                        ),
                    'slug' =>
                        array (
                            'slug' => 'slug',
                            'name' => 'slug',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                ),
                        ),
                    'id' =>
                        array (
                            'slug' => 'id',
                            'name' => 'id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'page' =>
                        array (
                            'slug' => 'page',
                            'name' => 'page',
                            'description' => '',
                        ),
                    'per_page' =>
                        array (
                            'slug' => 'per-page',
                            'name' => 'per_page',
                            'description' => '',
                        ),
                ),
        ),
    'category' =>
        array (
            'endpoints' =>
                array (
                    'attachChildren' =>
                        array (
                            'route' => 'catalog/api/v1/category/{category_id}/attach/children',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'category-id',
                                            'name' => 'category_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id.*',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'attachParent' =>
                        array (
                            'route' => 'catalog/api/v1/category/{category_id}/attach/parent/{parent_id}',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'category-id',
                                            'name' => 'category_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'parent-id',
                                            'name' => 'parent_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'attachProducts' =>
                        array (
                            'route' => 'catalog/api/v1/category/{category_id}/attach/products',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'category-id',
                                            'name' => 'category_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id.*',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'create' =>
                        array (
                            'route' => 'catalog/api/v1/category/create',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'category-name',
                                            'name' => 'category_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'category-description',
                                            'name' => 'category_description',
                                            'description' => '',
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'slug',
                                            'name' => 'slug',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'delete' =>
                        array (
                            'route' => 'catalog/api/v1/category/delete',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'getCategories' =>
                        array (
                            'route' => 'catalog/api/v1/categories',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'page',
                                            'name' => 'page',
                                            'description' => '',
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'per-page',
                                            'name' => 'per_page',
                                            'description' => '',
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                ),
                        ),
                    'get' =>
                        array (
                            'route' => 'catalog/api/v1/category',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'category-name',
                                            'name' => 'category_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'id',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'category_name',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'update' =>
                        array (
                            'route' => 'catalog/api/v1/category/update',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'category-description',
                                            'name' => 'category_description',
                                            'description' => '',
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'category-name',
                                            'name' => 'category_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'slug',
                                            'name' => 'slug',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                                ),
                                        ),
                                    4 =>
                                        array (
                                            'slug' => 'status',
                                            'name' => 'status',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                                ),
                                        ),
                                ),
                        ),
                ),
            'params' =>
                array (
                    'category_id' =>
                        array (
                            'slug' => 'category-id',
                            'name' => 'category_id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'id.*' =>
                        array (
                            'slug' => 'id',
                            'name' => 'id.*',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'parent_id' =>
                        array (
                            'slug' => 'parent-id',
                            'name' => 'parent_id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'category_name' =>
                        array (
                            'slug' => 'category-name',
                            'name' => 'category_name',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'status' =>
                        array (
                            'slug' => 'status',
                            'name' => 'status',
                            'description' => '',
                            'rules' =>
                                array (
                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>draft</strong>, <strong class=\'code text-danger\'>live</strong>.',
                                ),
                        ),
                    'category_description' =>
                        array (
                            'slug' => 'category-description',
                            'name' => 'category_description',
                            'description' => '',
                        ),
                    'slug' =>
                        array (
                            'slug' => 'slug',
                            'name' => 'slug',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>30</strong> characters.',
                                ),
                        ),
                    'id' =>
                        array (
                            'slug' => 'id',
                            'name' => 'id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'page' =>
                        array (
                            'slug' => 'page',
                            'name' => 'page',
                            'description' => '',
                        ),
                    'per_page' =>
                        array (
                            'slug' => 'per-page',
                            'name' => 'per_page',
                            'description' => '',
                        ),
                ),
        ),
    'productattribute' =>
        array (
            'endpoints' =>
                array (
                    'attachProduct' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/attach/product',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'attribute-type-id',
                                            'name' => 'attribute_type_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'attribute-value-id',
                                            'name' => 'attribute_value_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'navigable',
                                            'name' => 'navigable',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>1</strong>, <strong class=\'code text-danger\'>0</strong>.',
                                                ),
                                        ),
                                ),
                        ),
                    'attachProductVariation' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/attach/product-variation',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'attribute-type-id',
                                            'name' => 'attribute_type_id.*',
                                            'description' => NULL,
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'attribute-value-id',
                                            'name' => 'attribute_value_id.*',
                                            'description' => NULL,
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'modifier-type',
                                            'name' => 'modifier_type.*',
                                            'description' => NULL,
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'modifier-value',
                                            'name' => 'modifier_value.*',
                                            'description' => NULL,
                                        ),
                                    4 =>
                                        array (
                                            'slug' => 'navigable',
                                            'name' => 'navigable.*',
                                            'description' => NULL,
                                        ),
                                    5 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id.*',
                                            'description' => NULL,
                                        ),
                                ),
                        ),
                    'createType' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/type/create',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'attribute-type-name',
                                            'name' => 'attribute_type_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'createValue' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/value/create',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'attribute-value-name',
                                            'name' => 'attribute_value_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'deleteProduct' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/detach/product',
                            'methods' =>
                                array (
                                    0 => 'DELETE',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'attribute-type-id',
                                            'name' => 'attribute_type_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'attribute-value-id',
                                            'name' => 'attribute_value_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'deleteType' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/type/delete',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'deleteValue' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/value/delete',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'getTypes' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/types',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'page',
                                            'name' => 'page',
                                            'description' => '',
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'per-page',
                                            'name' => 'per_page',
                                            'description' => '',
                                        ),
                                ),
                        ),
                    'getType' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/type/get',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'attribute-type-name',
                                            'name' => 'attribute_type_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'id',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'attribute_type_name',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'getValues' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/values',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'page',
                                            'name' => 'page',
                                            'description' => '',
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'per-page',
                                            'name' => 'per_page',
                                            'description' => '',
                                        ),
                                ),
                        ),
                    'getValue' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/value/get',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'attribute-value-name',
                                            'name' => 'attribute_value_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'id',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'attribute_value_name',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'getAttributes' =>
                        array (
                            'route' => 'catalog/api/v1/attributes',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'page',
                                            'name' => 'page',
                                            'description' => '',
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'per-page',
                                            'name' => 'per_page',
                                            'description' => '',
                                        ),
                                ),
                        ),
                    'updateType' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/type/update',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'attribute-type-name',
                                            'name' => 'attribute_type_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'updateValue' =>
                        array (
                            'route' => 'catalog/api/v1/attribute/value/update',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'attribute-value-name',
                                            'name' => 'attribute_value_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                ),
            'params' =>
                array (
                    'attribute_type_id' =>
                        array (
                            'slug' => 'attribute-type-id',
                            'name' => 'attribute_type_id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'attribute_value_id' =>
                        array (
                            'slug' => 'attribute-value-id',
                            'name' => 'attribute_value_id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'product_id' =>
                        array (
                            'slug' => 'product-id',
                            'name' => 'product_id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'navigable' =>
                        array (
                            'slug' => 'navigable',
                            'name' => 'navigable',
                            'description' => '',
                            'rules' =>
                                array (
                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>1</strong>, <strong class=\'code text-danger\'>0</strong>.',
                                ),
                        ),
                    'attribute_type_id.*' =>
                        array (
                            'slug' => 'attribute-type-id',
                            'name' => 'attribute_type_id.*',
                            'description' => NULL,
                        ),
                    'attribute_value_id.*' =>
                        array (
                            'slug' => 'attribute-value-id',
                            'name' => 'attribute_value_id.*',
                            'description' => NULL,
                        ),
                    'modifier_type.*' =>
                        array (
                            'slug' => 'modifier-type',
                            'name' => 'modifier_type.*',
                            'description' => NULL,
                        ),
                    'modifier_value.*' =>
                        array (
                            'slug' => 'modifier-value',
                            'name' => 'modifier_value.*',
                            'description' => NULL,
                        ),
                    'navigable.*' =>
                        array (
                            'slug' => 'navigable',
                            'name' => 'navigable.*',
                            'description' => NULL,
                        ),
                    'product_id.*' =>
                        array (
                            'slug' => 'product-id',
                            'name' => 'product_id.*',
                            'description' => NULL,
                        ),
                    'attribute_type_name' =>
                        array (
                            'slug' => 'attribute-type-name',
                            'name' => 'attribute_type_name',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'attribute_value_name' =>
                        array (
                            'slug' => 'attribute-value-name',
                            'name' => 'attribute_value_name',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'id' =>
                        array (
                            'slug' => 'id',
                            'name' => 'id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'page' =>
                        array (
                            'slug' => 'page',
                            'name' => 'page',
                            'description' => '',
                        ),
                    'per_page' =>
                        array (
                            'slug' => 'per-page',
                            'name' => 'per_page',
                            'description' => '',
                        ),
                ),
        ),
    'fileupload' =>
        array (
            'endpoints' =>
                array (
                    'addFile' =>
                        array (
                            'route' => 'catalog/api/v1/file/add',
                            'methods' =>
                                array (
                                    0 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'file-url',
                                            'name' => 'file_url',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'active_url' => 'active_url',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'type',
                                            'name' => 'type',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>image</strong>.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'image-name',
                                            'name' => 'image_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                ),
                                        ),
                                ),
                        ),
                    'attachImageProduct' =>
                        array (
                            'route' => 'catalog/api/v1/file/attach/product',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'image-id',
                                            'name' => 'image_id',
                                            'description' => NULL,
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id',
                                            'description' => NULL,
                                        ),
                                ),
                        ),
                    'deleteFile' =>
                        array (
                            'route' => 'catalog/api/v1/file/delete',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'id',
                                            'name' => 'id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'deleteImageProduct' =>
                        array (
                            'route' => 'catalog/api/v1/file/attach/product',
                            'methods' =>
                                array (
                                    0 => 'DELETE',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'image-id',
                                            'name' => 'image_id',
                                            'description' => NULL,
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id',
                                            'description' => NULL,
                                        ),
                                ),
                        ),
                    'uploadFile' =>
                        array (
                            'route' => 'catalog/api/v1/file/upload',
                            'methods' =>
                                array (
                                    0 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'file',
                                            'name' => 'file',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'max' => 'The value must be less than or equal to <strong>10000</strong> characters.',
                                                    'mimes' => 'jpeg,jpg,png,gif',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'type',
                                            'name' => 'type',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>image</strong>.',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'image-name',
                                            'name' => 'image_name',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'unique' => 'Must be unique.',
                                                ),
                                        ),
                                ),
                        ),
                ),
            'params' =>
                array (
                    'file_url' =>
                        array (
                            'slug' => 'file-url',
                            'name' => 'file_url',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'active_url' => 'active_url',
                                ),
                        ),
                    'type' =>
                        array (
                            'slug' => 'type',
                            'name' => 'type',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'in' => 'The value must be one of the following options: <strong class=\'code text-danger\'>image</strong>.',
                                ),
                        ),
                    'image_name' =>
                        array (
                            'slug' => 'image-name',
                            'name' => 'image_name',
                            'description' => '',
                            'rules' =>
                                array (
                                    'unique' => 'Must be unique.',
                                ),
                        ),
                    'image_id' =>
                        array (
                            'slug' => 'image-id',
                            'name' => 'image_id',
                            'description' => NULL,
                        ),
                    'product_id' =>
                        array (
                            'slug' => 'product-id',
                            'name' => 'product_id',
                            'description' => NULL,
                        ),
                    'id' =>
                        array (
                            'slug' => 'id',
                            'name' => 'id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'file' =>
                        array (
                            'slug' => 'file',
                            'name' => 'file',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'max' => 'The value must be less than or equal to <strong>10000</strong> characters.',
                                    'mimes' => 'jpeg,jpg,png,gif',
                                ),
                        ),
                ),
        ),
    'inventorypricing' =>
        array (
            'endpoints' =>
                array (
                    'bulk' =>
                        array (
                            'route' => 'catalog/api/v1/inventory-pricing/update',
                            'methods' =>
                                array (
                                    0 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'base-price',
                                            'name' => 'base_price',
                                            'description' => '',
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id',
                                            'description' => '',
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'quantity',
                                            'name' => 'quantity',
                                            'description' => '',
                                        ),
                                ),
                        ),
                    'get' =>
                        array (
                            'route' => 'catalog/api/v1/inventory-pricing',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                    1 => 'POST',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                ),
                        ),
                    'update' =>
                        array (
                            'route' => 'catalog/api/v1/inventory-pricing/update',
                            'methods' =>
                                array (
                                    0 => 'GET',
                                ),
                            'attributes' =>
                                array (
                                    0 =>
                                        array (
                                            'slug' => 'product-id',
                                            'name' => 'product_id',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required' => 'This argument is required.',
                                                    'exists' => 'The value must already exist.',
                                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                                ),
                                        ),
                                    1 =>
                                        array (
                                            'slug' => 'base-price',
                                            'name' => 'base_price',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'quantity',
                                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                                ),
                                        ),
                                    2 =>
                                        array (
                                            'slug' => 'core-price',
                                            'name' => 'core_price',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                                ),
                                        ),
                                    3 =>
                                        array (
                                            'slug' => 'quantity',
                                            'name' => 'quantity',
                                            'description' => '',
                                            'rules' =>
                                                array (
                                                    'required_without_all' => 'cost',
                                                    'integer' => 'integer',
                                                ),
                                        ),
                                ),
                        ),
                ),
            'params' =>
                array (
                    'base_price' =>
                        array (
                            'slug' => 'base-price',
                            'name' => 'base_price',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required_without_all' => 'quantity',
                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                ),
                        ),
                    'product_id' =>
                        array (
                            'slug' => 'product-id',
                            'name' => 'product_id',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required' => 'This argument is required.',
                                    'exists' => 'The value must already exist.',
                                    'max' => 'The value must be less than or equal to <strong>255</strong> characters.',
                                ),
                        ),
                    'quantity' =>
                        array (
                            'slug' => 'quantity',
                            'name' => 'quantity',
                            'description' => '',
                            'rules' =>
                                array (
                                    'required_without_all' => 'cost',
                                    'integer' => 'integer',
                                ),
                        ),
                    'core_price' =>
                        array (
                            'slug' => 'core-price',
                            'name' => 'core_price',
                            'description' => '',
                            'rules' =>
                                array (
                                    'regex' => '/^\\d+(\\.\\d{1,2})?$/',
                                ),
                        ),
                ),
        ),
);