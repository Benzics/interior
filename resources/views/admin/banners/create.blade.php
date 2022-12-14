@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route($route . '.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">      
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" required value="{{ old('name') }}"/>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Title" name="title" required value="{{ old('title') }}"/>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="8" class="form-control" placeholder="description" name="description">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>URL ( <small>Without {{ url('/') }}</small> )</label>
                                <input type="text" class="form-control" placeholder="Url" name="url" required value="{{ old('url') }}"/>
                            </div>

                            <div class="form-group">
                                <label>Banner Image</label>
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
<a href="{{ route($route . '.index') }}" class="icon-btn" ><i class="fa fa-fw fa-reply"></i>Back</a> 
@endpush

@push('style')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" href="{{ asset('css/image-uploader.css') }}" />
@endpush

@push('script-lib')
<script src="{{ asset('/js/image-uploader.js') }}"></script>
<script>
    $(document).ready(function(){

        $('.input-images').imageUploader({
            maxFiles: 1,
            imagesInputName: 'image',
            label: 'Select an Image'
        });

    });
</script>

@endpush