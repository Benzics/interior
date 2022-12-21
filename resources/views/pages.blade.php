@extends('layouts.app')

@extends('partials.banner')

@section('content')
<div class="section-full p-tb80">
    <!-- LOCATION BLOCK-->
    <div class="container">
        {!! $page->content !!}
    </div>
</div>
@endsection

@section('breadcrumb')
<li> {{ $pageTitle ?? 'test' }} </li>
@endsection