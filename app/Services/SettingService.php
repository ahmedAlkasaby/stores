<?php
namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

class SettingService
{
    protected $cacheKey = 'app_settings';

    public function get($key, $default = null)
    {
        $settings = $this->load();
        return $settings->$key ?? $default;
    }

    public function all()
    {
        return $this->load();
    }

    public function refresh()
    {
        Cache::forget($this->cacheKey);
        return $this->load();
    }

    protected function load()
    {
        return Cache::rememberForever($this->cacheKey, function () {
            return Setting::where('active', 1)->first() ;
        });
    }
}
