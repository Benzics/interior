@extends('admin.products.create')

@push('more')
<div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" placeholder="Price" name="price" required value="{{ old('price') }}"/>
</div>
@endpush