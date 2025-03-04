<?php
namespace App\Interfaces;

use App\Models\Product;
use Illuminate\Http\Request;

interface ProductRepositoryInterface
{
    public function getAll(Request $filters);
    public function findById($id);
    public function create(array $data);
    public function update(Product $product, array $data);
    public function delete(Product $product);
}
