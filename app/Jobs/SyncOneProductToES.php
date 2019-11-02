<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

// ShouldQueue 代表异步
class SyncOneProductToES implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function handle()
    {
        $data = $this->product->toESArray();
        app('es')->index([
            'index' => 'products',
            'id'    => $data['id'],
            'body'  => $data,
        ]);
    }
}
