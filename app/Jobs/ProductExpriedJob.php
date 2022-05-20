<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Telegram\Bot\Laravel\Facades\Telegram;

class ProductExpriedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $product;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $productname = '[' . $this->product->id . '] - ' .  $this->product->name;
        $telegram_channel_id = env('TELEGRAM_CHANNEL_ID', '');
        if ($telegram_channel_id) {
            Telegram::sendMessage([
                'chat_id' => $telegram_channel_id,
                'parse_mode' => 'HTML',
                'text' => 'Sản phẩm <strong>' . $productname . '</strong> đã hết hạn !'
            ]);
        }
        //cập nhật lại trạng thái sản phẩm
        $this->product->status = 'expired';
        $this->product->save();
    }
}