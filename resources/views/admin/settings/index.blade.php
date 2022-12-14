@extends('admin.layouts.app')
@section('panel')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <form action="{{ route('admin.settings') }}" method="POST">
                @csrf
                <div class="card-body">
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Site Name</label>
                                <input type="text" class="form-control" placeholder="Site name" name="site-name" required value="{{ old('site-name', setting('site-name')) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Mail</label>
                                <input type="email" class="form-control" placeholder="Contact Mail" name="admin-mail" required value="{{ old('admin-mail', setting('admin-mail')) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Currency Name</label>
                                <input type="text" class="form-control" placeholder="Currency name" name="currency" required value="{{ old('currency', setting('currency')) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Currency Symbol</label>
                                <input type="text" class="form-control" placeholder="Currency Symbol" name="currency-symbol" required value="{{ old('currency-symbol', setting('currency-symbol')) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Currency Short</label>
                                <input type="text" class="form-control" placeholder="Currency Short" name="currency-short" required value="{{ old('currency-short', setting('currency-short')) }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" class="form-control" placeholder="Contact Phone" name="phone" required value="{{ old('phone', setting('phone')) }}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control" id="address" placeholder="Address" required>{{ old('address', setting('address')) }}</textarea>
                                
                            </div>
                        </div>
                   </div>       
                </div>
                <div class="card-footer">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-block btn--primary mr-2">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('breadcrumb-plugins')
<a href="{{ route('admin.dashboard') }}" class="icon-btn" ><i class="fa fa-fw fa-reply"></i>Back</a> 
@endpush