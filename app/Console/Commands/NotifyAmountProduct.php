<?php

namespace App\Console\Commands;

use App\Helpers\StockAlertHelper;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Console\Command;

class NotifyAmountProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:notify-amount-product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $minAmount = Setting::where('active', 1)->value('min_amount_product_notify');
        $products=Product::where('amount','<=',$minAmount)
            ->where('active',1)
            ->get();
        $admins=User::where('type','admin')->where('notify',1)->get();
        if ($products->isEmpty()) {
            $this->info('No products found with amount less than or equal to ' . $minAmount);
            return;
        }
        foreach ($products as $product) {
            $notificationData=StockAlertHelper::lowStockMessage(
                $product->nameLang('ar'),
                $product->nameLang('en'),
                $product->amount,
                $minAmount,
                $product->code
            );
            Notification::send($admins,$notificationData['title_ar'],$notificationData['title_en'],$notificationData['body_ar'],$notificationData['body_en']);
            $this->info('Notification sent for product: ' . $product->nameLang('ar') . ' (' . $product->code . ')');
        }
        
    }
}
