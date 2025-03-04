<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Services\ProductService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        return response()->json($this->productService->getAllProducts($request));
    }

    public function store(ProductRequest $request)
    {
        return response()->json($this->productService->createProduct($request->validated()),201);
    }

    public function show($id)
    {
        return response()->json($this->productService->getProduct($id));
    }

    public function update(ProductRequest $request, $id)
    {
        return response()->json($this->productService->updateProduct($id, $request->validated()),201);
    }

    public function destroy($id)
    {
        return response()->json($this->productService->deleteProduct($id));
    }
}
