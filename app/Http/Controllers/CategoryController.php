<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function Category(Request $rq) {
        // Request
        $categoryId = $rq->all()['id'];
        // Config page
        $title = "Category";
        // Data
        $subCategory = Category::getSubCategoryById($categoryId);
        $products = Products::getByCategoryId($categoryId);

        // Handle

        // Return
        return view('category', [
            'title' => $title,
            'subCategory' => $subCategory,
            'products' => $products,
        ]);
    }
}
