<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{

    protected $fillable = [ 
    'name',
    'description',
    'category',
    'price',
    'product_image',];

    private string $name;

    private string $description;

    private string $category;

    private float $price;

    private string $product_image;

public function getName(): string {
    return $this->name;
}

public function setName(string $name) {
    $this->name = $name;
}

public function getDescription(): string {
 return $this->description;
}
public function setDescription(string $description) {
    $this->description = $description;
}

public function getCategory(): string {
    return $this->category;
}

public function setCategory(string $category) {
    $this->category = $category;
}

 public function getPrice(): float {
        return $this->price;
    }

public function setPrice(float $price) {
    $this->price = $price;
}

public function getProductImage(): string {
    return $this->product_image;
}

public function setProductImage(string $product_image) {
    $this->product_image = $product_image;
}
}