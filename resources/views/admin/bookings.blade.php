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
                                <th>User Email</th>
                                <th>Product</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($bookings as $row)
                            <tr>
                                <td data-label="User Email">
                                    {{ $row->email }}
                                </td>
                                <td data-label="Product Name">{{ $row->product->name }}</td>
                                <td data-label="Category Name">{{ ($row->status) ? 'Read': 'Unread' }}</td>
                                <td data-label="Action">
                                    @if($row->status === 0)
                                    <a href="" class="icon-btn bg--7" data-toggle="tooltip" title="Mark As Read"><i class="fas fa-eye"></i></a>
                                    @else
                                    <a href="" class="icon-btn bg--7" data-toggle="tooltip" title="Mark As Unread"><i class="fas fa-eye-slash"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">No bookings found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-4">
                {{ $bookings->links('admin.partials.paginate') }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('breadcrumb-plugins')
<a href="{{ route('admin.dashboard') }}" class="icon-btn"><i class="fa fa-home"></i> Dashboard</a> 
@endpush

@push('style')
<style>
table .user .thumb, table .user .thumb img {
    width: 100px;
    height: 100px;
}
</style>
@endpush