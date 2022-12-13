@extends('admin.layouts.app')
@section('panel')
    <div class="row mb-none-30">
        <div class="col">
            <div class="card b-radius--10 overflow-hidden box--shadow1">
                <div class="card-body">
                    <h5 class="card-title mb-50 border-bottom pb-2">Product Information</h5>
        
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Name
                            <span class="font-weight-bold">{{ $product->name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Category
                            <span class="font-weight-bold">{{ $product->category->name }}</span>
                        </li>
                        @stack('more')
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Description
                            {!! $product->description !!}
                        </li>
                        
                       
                       
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Images
                            
                            @foreach($images as $image)
                                
                                <img src="{{ asset($image->name) }}" alt="" class="view-image" />
                                
                            @endforeach
                          
                            
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('breadcrumb-plugins')
<a href="{{ route($route . '.index') }}" class="icon-btn" ><i class="fa fa-fw fa-reply"></i>Back</a> 
@endpush

@push('style')
<style>
.view-image {
    
    width: 100px;
    height: 100px;
}
</style>

@endpush