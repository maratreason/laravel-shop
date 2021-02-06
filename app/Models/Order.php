<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

	public function products() {
		return $this->belongsToMany(Product::class)->withPivot("count")->withTimestamps();
	}

	public function getFullPrice() {
		$sum = 0;
		foreach($this->products as $product) {
			$sum += $product->getPriceForCount();
		}
		return $sum;
	}

	public function saveOrder($name, $phone) {
		if ($this->status == 0) {
			$this->name = $name;
			$this->phone = $phone;
			// $order->email = $request->email;
			$this->status = 1;
			$this->save();
			session()->forget("orderId"); // Забываем наш заказ

			return true;
		} else {
			return false;
		}

	}
}
