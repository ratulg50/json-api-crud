<?php

namespace App\Observers;
use App\Models\Item;
use Illuminate\Support\Facades\Log;
class ItemObserver
{
   public function creating(Item $item)
   {
      $item->name = strtoupper($item->name);
      Log::info("hello from observer");
   }

   public function deleted(Item $item)
   {
      Log::info("Deleted");
   }

   public function updated(Item $item)
   {
      $item->name = strtolower($item->name);
      Log::info("Deleted");
   }
}