@extends('admin.layouts.partials.crud-components.edit-page')
@php
    $clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
    $products = App\Models\Product::select('id', 'name', 'selling_price')->get();
@endphp
@section('form')

    {{ \App\Helper\Field::selectWithSearch(name: 'client_id', label: 'العملاء', required: 'true', placeholder: 'العملاء', options: $clients) }}
    <div class="form-group">
        <label class="mb-1" for="">المنتجات</label>
        <div style="text-align: center">
            <select class="form-select" name="product_id" id="product" onchange="changePrice()">
                <option value="" disabled selected>يرجى اختيار المنتج</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}" data-price="{{ $product->selling_price }}">{{ $product->name }}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('product_id'))
                <span class="help-block">
                    {{ $errors->first('product_id') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label class="mb-1" for="">الكمية</label>
        <div style="text-align: center">
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="الرجاء ادخال الكمية"
                spellcheck="false" data-ms-editor="true" required min="1" value="1" onchange="changePrice()"
                value="{{ $record->quantity }}">
            @if ($errors->has('quantity'))
                <span class="help-block">
                    {{ $errors->first('quantity') }}
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label class="mb-1" for="">المبلغ الكلي</label>
        <div style="text-align: center">
            <input type="number" class="form-control" id="total_price" name="total_price"
                value="{{ $record->total_price }}" placeholder="المبلغ" disabled>
            @if ($errors->has('quantity'))
                <span class="help-block">
                    {{ $errors->first('total_price') }}
                </span>
            @endif
        </div>
    </div>


@stop
@push('scripts')
    <script>
        function changePrice() {
            var productSelect = document.getElementById("product");
            var price = parseFloat(productSelect.options[productSelect.selectedIndex].getAttribute("data-price"));
            var quantity = parseFloat(document.getElementById("quantity").value);

            if (isNaN(price) || isNaN(quantity)) {
                document.getElementById("total_price").value = 0;
            } else {
                var totalPrice = price * quantity;
                document.getElementById("total_price").value = totalPrice.toFixed(2);
            }
        }
    </script>
@endpush
