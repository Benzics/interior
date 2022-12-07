@extends('admin.layouts.app')

@section('panel')
<div class="row">

    <div class="col-lg-12">
        <div class="card b-radius--10">
            <div class="card-body p-0">
                <div class="table-responsive--sm table-responsive">
                    <table class="table table--light style--two">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($products as $row)
                            <tr>
                                <td data-label="Product Name">{{ $row->name }}</td>
                               
                                <td data-label="Action">
                                    <a href="{{ route('admin.products.edit', $row->id) }}" data-toggle="tooltip" title="Edit" class="icon-btn"><i class="la la-pencil"></i></a>
                                    <form action="{{ route('admin.products.destroy', $row->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                        @method('delete')
                                        @csrf
                                        <button class="icon-btn bg--danger" data-toggle="tooltip" title="Delete"><i class="la la-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">No products found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-4">
                {{ $products->links('admin.partials.paginate') }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('breadcrumb-plugins')
<a href="{{ route('admin.products.create') }}" class="icon-btn"><i class="fa fa-plus"></i> Add Product</a> 
@endpush