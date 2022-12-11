@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">      
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" placeholder="Your Product name" name="name" required value="{{ old('name') }}"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea rows="8" class="form-control nicEdit" placeholder="Product description" name="description" required>{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Product Images</label>
                                <div class="input-images"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-block btn--primary mr-2">Add</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('breadcrumb-plugins')
<a href="{{ route('admin.products.index') }}" class="icon-btn" ><i class="fa fa-fw fa-reply"></i>Back</a> 
@endpush

@push('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" href="{{ asset('css/image-uploader.css') }}" />
@endpush

@push('script-lib')
<script src="{{ asset('/js/image-uploader.js') }}"></script>
<script>
    $(document).ready(function(){

        $('.input-images').imageUploader();

    });
</script>

@endpush