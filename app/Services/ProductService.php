<?php
namespace App\Services;

use App\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts(Request $filters)
    {
        return $this->productRepository->getAll($filters);
    }

    public function getProduct($id)
    {
        return $this->productRepository->findById($id);
    }

    public function createProduct($data)
    {
        return $this->productRepository->create($data);
    }

    public function updateProduct($id, $data)
    {
        $product = $this->productRepository->findById($id);
        return $this->productRepository->update($product, $data);
    }

    public function deleteProduct($id)
    {
        $product = $this->productRepository->findById($id);
        return $this->productRepository->delete($product);
    }
}
