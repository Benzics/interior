@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route($route . '.store') }}" method="POST">
                @csrf
                <div class="card-body">
                   
                    <div class="form-group">
                        <label>Page Name</label>
                        <input type="text" class="form-control" placeholder="Page name" name="name" required value="{{ old('name') }}" />
                    </div>

                    <div class="form-group">
                        <label>Page Url(<small> Without {{ url('/') }}</small>)</label>
                        <input type="text" class="form-control" placeholder="Page URL" name="url" required value="{{ old('url') }}" />
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea rows="20" class="form-control nicEdit" placeholder="Content here" name="content">{{ old('content') }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-block btn--primary mr-2">Create</button>
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