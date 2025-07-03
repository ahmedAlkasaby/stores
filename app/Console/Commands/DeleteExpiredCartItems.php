<?php

namespace App\Console\Commands;

use App\Models\CartItem;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DeleteExpiredCartItems extends Command
{
    protected $signature = 'cart:clear-expired';

    protected $description = 'Delete cart items older';

    public function handle()
    {
        $setting = Setting::where('active', 1)->first();

        $hours = $setting?->max_time_product_in_carts ?? 1;

        $threshold = now()->subHours($hours);

        $count = CartItem::where('created_at', '<', $threshold)->delete();

        $this->info("Deleted {$count} expired cart items (older than {$hours} hour(s)).");
    }
}
