@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route($route . '.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">      
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" required value="{{ old('name', $product->name) }}"/>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required="">
                                    <option disabled selected>Select a category</option>

                                    @forelse ($categories as $item)
                                        @if($route == 'admin.apartments')
                                        <option value="{{ $item->id }}" {{ $item->id == old('category_id', $product->apartment_category_id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @else
                                        <option value="{{ $item->id }}" {{ $item->id == old('category_id', $product->category_id) ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endif
                                    @empty
                                        <option disabled>Please create a category</option>
                                    @endforelse
                                </select>
                            </div>
                            @stack('more')
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="8" class="form-control nicEdit" placeholder="description" name="description">{{ old('description', $product->description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Images</label>
                                <div class="input-images"></div>
                            </div>
                        </div>
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
            preloaded: {!! $imageGallery !!}
        });
 
        $(document).on('click', '.delete-image', function(){
            console.log('clicked image delete');
        })
   
    });

   
</script>

@endpush