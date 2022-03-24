<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class InsertDataAdminController extends Controller
{
    // ...
    public function InsertProductAdmin () {
        // ... Config
        $title = "Chèn sản phẩm";

        // ... Data




        // Return
        return view('admin.insert-products', [
            'title' => $title,


            // DATa
            'categorys' => Category::getAll(),
            'subcategories' => SubCategory::getAll(),

        ]);
    }
}
