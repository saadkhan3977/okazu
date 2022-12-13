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
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 generalsetting_admin">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
