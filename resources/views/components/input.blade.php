@props(['disabled' => false])
<?php
    $webstyle = new App\Models\GeneralSettingWebStyle;
    $generalsetting = $webstyle::first();
?>

<input style="color: black" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 input-border']) !!} >

<style type="text/css">
	.input-border:focus{
		border :1px solid @if($generalsetting) {{$generalsetting->admin_text_color}} @endif; 
	}
</style>