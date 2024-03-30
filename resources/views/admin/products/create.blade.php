@extends('admin.layouts.partials.crud-components.create-page')
@php
    $categories = App\Models\Category::select('id', 'name')->pluck('name','id');
    $vendors = App\Models\Vendor::select('id', 'name')->pluck('name','id');
    $edit = false;
@endphp
@section('form')
{{ \App\Base\Helper\Field::text(name: 'code', label: 'code', required: 'true', placeholder: 'code') }}
    {{ \App\Base\Helper\Field::text(name: 'name', label: 'name', required: 'true', placeholder: 'name') }}
    {{ \App\Base\Helper\Field::text(name: 'description', label: 'description', required: 'true', placeholder: 'description') }}
    {{ \App\Base\Helper\Field::number(name: 'price_before_discount', label: 'price_before_discount', required: 'true', placeholder: 'price_before_discount') }}
    {{ \App\Base\Helper\Field::number(name: 'price_after_discount', label: 'price_after_discount', required: 'true', placeholder: 'price_after_discount') }}
    {{ \App\Base\Helper\Field::number(name: 'price_cost', label: 'price_cost', required: 'true', placeholder: 'price_cost') }}
    {{ \App\Base\Helper\Field::number(name: 'profit_price', label: 'profit_price', required: 'true', placeholder: 'profit_price') }}
    {{ \App\Base\Helper\Field::number(name: 'quntity', label: 'quntity', required: 'true', placeholder: 'quntity') }}
    {{ \App\Base\Helper\Field::radio(name: 'status', label: 'status', options: [0 => 'inactive', 1 => 'active']) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'category_id', label: 'category', required: 'true', placeholder: 'category', options: $categories) }}
    {{ \App\Base\Helper\Field::selectWithSearch(name: 'vendor_id', label: 'vendor', required: 'true', placeholder: 'vendor', options: $vendors) }}
    {{ \App\Base\Helper\Field::multiFileUpload(name: 'media', label: 'image', required: 'true') }}

<button style="margin-bottom: 10px" class="btn btn-primary" id='add_properties'>اضافة خصائص &nbsp;
    <span style="font-size:16px; font-weight:bold;">+ </span>
</button>

<div class="appendElement">

</div>




    @stop

    @push('scripts')
        <script>
            $(document).ready(function() {

                var wrapper = $("#create-form .appendElement");

                var add_properties = $("#add_properties");

                $(add_properties).click(function(e) {
                    e.preventDefault();

                    var amount_wrap = document.getElementById("amount_wrap");

                    $(wrapper).append(`
                    <div class="row">
                        <div class="col-md-2 form-group">
                            <label> لون</label>
                            <div class="">
                                <input type="text" class="form-control pt-3" name="product_properties[]">
                            </div>
                        </div>
                        <div class="col-md-2 form-group">
                            <label>مقاس</label>
                            <div class="">
                                <input type="text" class="form-control pt-3" name="product_properties[]">
                            </div>
                        </div>
                        <div class="col-md-2 form-group">
                            <label>كمية</label>
                            <div class="">
                                <input type="text" class="form-control pt-3" name="product_properties[]">
                            </div>
                        </div>

                        <div class="col-md-2 form-group">
                            <label>السعر قبل الخصم</label>
                            <div class="">
                                <input type="text" class="form-control pt-3" name="product_properties[]">
                            </div>
                        </div>

                        <div class="col-md-2 form-group">
                            <label>السعر بعد الخصم</label>
                            <div class="">
                                <input type="text" class="form-control pt-3" name="product_properties[]">
                            </div>
                        </div>

                        <div class="col-md-2 form-group">
                            <label>التكلفه</label>
                            <div class="">
                                <input type="text" class="form-control pt-3" name="product_properties[]">
                            </div>
                        </div>

                        <div class="col-md-2 form-group">
                            <label>الربح</label>
                            <div class="">
                                <input type="text" class="form-control pt-3" name="product_properties[]">
                            </div>
                        </div>
                        <div style="margin-top: 1%" class="col-md-2 btn btn-primary delete"> حذف &nbsp;
                            <span style="font-size:16px; font-weight:bold;">X </span>
                        </div>
                    </div>

                `);
                });


                $(wrapper).on("click", ".delete", function(e) {
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                })
            });
        </script>
    @endpush
