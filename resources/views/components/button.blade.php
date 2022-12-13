<?php
    $webstyle = new App\Models\GeneralSettingWebStyle;
    $generalsetting = $webstyle::first();
?>
<style type="text/css">
	.generalsetting_admin{
        color: {{($generalsetting) ? $generalsetting->admin_text_color : null}};
        background-color: {{($generalsetting) ? $generalsetting->admin_background : null}};
    }
</style>
@if(!$generalsetting)
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
@else
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 generalsetting_admin']) }}>
    {{ $slot }}
</button>
@endif
