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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @forelse($sections as $row)
                            <tr>
                                <td data-label="Section Thumbnail">
                                    <div class="user">
                                        <div class="thumb">
                                            <img src="{{ getImage(collect($row->images)->first()?->path, '50x50') }}" alt="{{ $row->name }}">
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Section Name">{{ $row->name }}</td>
                                <td data-label="Section Title">{{ $row->title }}</td>
                                <td data-label="Section Url">{{ url($row->url ?? '/') }}</td>
                                <td data-label="Action">
                                
                                    <a href="{{ route($route . '.edit', $row->id) }}" data-toggle="tooltip" title="Edit" class="icon-btn"><i class="la la-pencil"></i></a>
                                    <form action="{{ route($route . '.destroy', $row->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this Section?')">
                                        @method('delete')
                                        @csrf
                                        <button class="icon-btn bg--danger" data-toggle="tooltip" title="Delete"><i class="la la-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-muted text-center" colspan="100%">No sections found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer py-4">
                {{ $sections->links('admin.partials.paginate') }}
            </div>
        </div>
    </div>
</div>
@endsection
@push('breadcrumb-plugins')
<a href="{{ route($route . '.create') }}" class="icon-btn"><i class="fa fa-plus"></i> Add Section</a> 
@endpush

@push('style')
<style>
table .user .thumb, table .user .thumb img {
    width: 100px;
    height: 100px;
}
</style>
@endpush