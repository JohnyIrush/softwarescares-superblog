@extends('superblog::layouts.app')
@section('content')
<div class="bg-color-darkblue card Library-height">
    <div class="row ">
        <div class="col-2">
            @include('superblog::Plugins.Library.Media.widgets.sidebar')
        </div>
        <div class="col-10">
            @if ($type=='all')
             @include('superblog::Plugins.Library.Media.widgets.menus.media-menu')
            @endif
            @include('superblog::Plugins.Library.Media.widgets.files')
        </div>
    </div>
</div>
@endsection