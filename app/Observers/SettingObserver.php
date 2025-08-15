<?php

namespace App\Observers;

use App\Models\Setting;
use App\Facades\SettingFacade as AppSettings;

class SettingObserver
{
    public function saved(Setting $setting)
    {
        if ($setting->active) {
            AppSettings::refresh();
        }
    }

    public function deleted(Setting $setting)
    {
        if ($setting->active) {
            AppSettings::refresh();
        }
    }


}
