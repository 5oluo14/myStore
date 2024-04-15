@extends('admin.layouts.partials.crud-components.create-page')

@php
$clients = App\Models\Client::select('id', 'name')->pluck('name', 'id');
$products = App\Models\Product::select('id', 'name', 'selling_price')->get();
$edit = false;
@endphp
@section('form')
{{ \App\Helper\Field::selectWithSearch(name: 'client_id', label: 'العملاء', required: 'true', placeholder: 'العملاء', options: $clients) }}

<div class="form-group">
    <div id="inputContainer">
        <label class="mb-1" for="">المنتجات</label>
        <div style="text-align: center">
            <select class="form-select" id="product" onchange="changePrice()">
                <option value="" disabled selected>يرجى اختيار المنتج</option>
                @foreach ($products as $product)
                <option value="{{ $product->id }}" data-price="{{ $product->selling_price }}">{{ $product->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('productList'))

            <span class="help-block">
                {{ $errors->first('productList') }}

            </span>
            @endif
        </div>

        <div class="form-group">
            <label class="mb-1" for="">الكمية</label>
            <div style="text-align: center">
                <input type="number" class="form-control" id="quantity" placeholder="الرجاء ادخال الكمية" spellcheck="false" data-ms-editor="true" required min="1" value="1" onchange="changePrice()">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="mb-1" for="">المبلغ الكلي</label>
        <div style="text-align: center">
            <input type="number" class="form-control" id="total_price" value="0" placeholder="المبلغ" disabled>
        </div>
    </div>

</div>
<button class="btn btn-primary my-4" type="button" onclick="addInput()">اضافة</button>

<div class="mt-4">
    <table class="table mb-4 w-50">
        <p>المنتجات</p>
        <thead>
            <tr>
                <th scope="col">المنتج</th>
                <th scope="col">الكمية</th>
                <th scope="col">السعر</th>
            </tr>
        </thead>
        <tbody id="tbody">
        </tbody>
    </table>
</div>

<input type="hidden" id="productList" name="productList">

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

    function addInput() {
        var productSelect = document.getElementById("product");
        var quantityInput = document.getElementById("quantity");
        var priceInput = document.getElementById("total_price");


        var productName = productSelect.options[productSelect.selectedIndex].text;
        var quantityValue = quantityInput.value;
        var priceValue = priceInput.value;

        if (productName && quantityValue && priceValue) {
            var tableBody = document.getElementById("tbody");
            var newRow = document.createElement("tr");
            var productNameCell = document.createElement("td");
            var quantityCell = document.createElement("td");
            var priceCell = document.createElement("td");

            productNameCell.textContent = productName;
            quantityCell.textContent = quantityValue;
            priceCell.textContent = priceValue;


            newRow.appendChild(productNameCell);
            newRow.appendChild(quantityCell);
            newRow.appendChild(priceCell);


            tableBody.appendChild(newRow);

            // Create hidden input with product and quantity
            var productListInput = document.getElementById("productList");
            var inputValue = {
                product_id: productSelect.value
                , quantity: quantityValue
                , price: priceValue
            };

            if (productListInput.value) {
                var productList = JSON.parse(productListInput.value);
                productList.push(inputValue);
                productListInput.value = JSON.stringify(productList);
            } else {
                productListInput.value = JSON.stringify([inputValue]);
            }

            // Reset the product and quantity fields
            productSelect.selectedIndex = 0;
            quantityInput.value = 1

        }
    }

</script>
@endpush
