@extends('admin.layouts.master')
@section('page-title')
    Header Menu
@endsection
@section('mainContent')
<div class="padding">
    <div class="row">
    {!! Menu::render() !!}
    </div>    
</div>
@endsection
