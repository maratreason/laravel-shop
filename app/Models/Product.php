<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

	// public function getCategory() {
	// 	return Category::find($this->category_id);
	// }

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function getPriceForCount() {
		if (!is_null($this->pivot)) {
			return $this->pivot->count * $this->price;
		}
		return $this->price;
	}
}
