@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route($route . '.update', $section->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="row">      
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" required value="{{ old('name', $section->name) }}"/>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Title" name="title" value="{{ old('title', $section->title) }}"/>
                            </div>
                            <div class="form-group">
                                <label>Subtitle</label>
                                <input type="text" class="form-control" placeholder="Title" name="subtitle" value="{{ old('subtitle', $section->subtitle) }}"/>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea rows="8" class="form-control nicEdit" placeholder="content" name="content">{{ old('content', $section->content) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>URL ( <small>Without {{ url('/') }}</small> )</label>
                                <input type="text" class="form-control" placeholder="Url" name="url" value="{{ old('url', $section->url) }}"/>
                            </div>

                            <div class="form-group">
                                <label>Button Text</label>
                                <input type="text" class="form-control" placeholder="Button Text" name="button_text" value="{{ old('button_text', $section->button_text) }}"/>
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
            label: 'Select Images',
            preloaded: {!! $preloaded !!},
        });

    });
</script>

@endpush