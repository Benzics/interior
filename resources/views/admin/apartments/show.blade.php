@extends('admin.products.show')

@push('more')
<li class="list-group-item d-flex justify-content-between align-items-center">
    Price
    <span class="font-weight-bold">{{ $product->price }}</span>
</li>
@endpush