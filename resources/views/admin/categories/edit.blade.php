@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                   
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" value="{{ old('name', $category->name) }}" placeholder="Category name" name="name" required/>
                    </div>
                           
                </div>
                <div class="card-footer">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-block btn--primary mr-2">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('breadcrumb-plugins')
<a href="{{ route('admin.categories.index') }}" class="icon-btn" ><i class="fa fa-fw fa-reply"></i>Back</a> 
@endpush