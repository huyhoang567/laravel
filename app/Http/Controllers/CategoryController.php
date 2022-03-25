<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Validator;

class CategoryController extends Controller
{
    //xuất dữ liệu trang subcategory
    public function getSubCategory(){
        //lấy dữ liệu
        $category = Category::getAll();
        $subcateory = SubCategory::viewSubCategory();
        //return
        return view('admin/subcategory',[
            'category' => $category,
            'subcategory' => $subcateory,
            'create' => false,
            'delete' => false,
        ]);
    }
    //xuất dữ liệu trang category
    public function getCategory(){
        //lấy dữ liệu
        $category = Category::getAll();
        //return
        return view('admin/category',[
            'category' => $category,
            'delete' => false,
            'create' => false,
        ]);
    }
    //
    public function Category(Request $rq) {
        dd(Session::all());
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
    //create category
    public function createCategory(Request $request){
        //xử lý validate
        $validator = Validator::make($request->all(), [
            'category' => 'required|unique:category,"categoryName"|min:6',
            'description' => 'required|min:6',
        ]);
        if ($validator -> fails()){
            return redirect('admin/category')
                    -> withErrors($validator)
                    -> withInput();
        }else{
            //lấy giá trị từ input
            $categoryName = $request -> get('category');
            $categoryDescription = $request -> get('description');
            
            //thêm dữ liệu vào database
            $insert = Category::insert($categoryName, $categoryDescription);   
            if($insert != 0){
                $category = Category::getAll();
                // echo '<script> alert ("Tạo thành công")</script>';
                // echo '<meta http-equiv="refresh" content="0; url=category"/>';
                return redirect('admin/category')
                        ->with([
                            'category' => $category,
                            'create' => true,
                            'title' => 'Create Category',
                            'delete' => false,
                        ]);
            }else{
                echo '<script> alert ("Tạo lỗi")</script>';
                echo '<meta http-equiv="refresh" content="0; url=category"/>';
            }
        }       
    }
    //create subcategory
    public function createSubCategory(Request $request){
        //xử lý validate
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'subcategory' => 'required|unique:subcategory,"subcategory"|min:6',
        ]);
        if ($validator -> fails()){
            return redirect('admin/subcategory')
                    -> withErrors($validator)
                    -> withInput();
        }else{
            //lấy giá trị từ input
            $categoryId = $request -> get('category');
            $subcategory = $request -> get('subcategory');
            //thêm dữ liệu vào database
            $insert = SubCategory::insert($categoryId, $subcategory);   
            if($insert != 0){
                $category = Category::getAll();
                $subcateory = SubCategory::viewSubCategory();
                // echo '<script> alert ("Tạo thành công")</script>';
                // echo '<meta http-equiv="refresh" content="0; url=subcategory"/>';
                return view('admin/subcategory',
                        [
                            'category' => $category,
                            'subcategory' => $subcateory,
                            'create' => true,
                            'title' => 'Create Category',
                            'delete' => false,
                        ]);
            }else{
                echo '<script> alert ("Tạo lỗi")</script>';
                echo '<meta http-equiv="refresh" content="0; url=subcategory"/>';
            }
        }
    }
    //delete category
    public static function deleteCategory(Request $request){
        $id = $request->all('id');

        $delete = Category::del($id);
        $category = Category::getAll();
        return redirect('admin/category')
                ->with([
                    'category' => $category,
                    'delete' => true,
                    'create' => false,
                ]);
    }
    //delete subcategory
    public static function deleteSubCategory(Request $request){
        $id = $request->all('id');

        $delete = SubCategory::del($id);
        $category = Category::getAll();
        $subcategory = SubCategory::viewSubCategory();
        return view('admin/subcategory',
                [
                    'category' => $category,
                    'subcategory' => $subcategory,
                    'delete' => true,
                    'create' => false,
                ]);
    }
    //edit category
    public static function editCategory(Request $request){
        $id = $request->all('id');
        $category = Category::getById($id);
        return view('admin/edit-category',[
            'category' => $category,
            'update' => false,
        ]);
    }
    //update category
    public static function updateCategory(Request $request){
        //lấy dữ liệu edit
        $id = $request->all('id');
        $category = Category::getById($id);
        //xử lý validate
        $validator = Validator::make($request->all(), [
            'category' => 'required|min:6',
            'description' => 'required|min:6',
        ]);
        if ($validator -> fails()){
            return redirect("admin/category")
                    -> withErrors($validator)
                    -> withInput();
        }else{
            //lấy giá trị từ input
            $id = $request->all('id');
            //cập nhật dữ liệu vào database
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $updationDate = date('Y-m-d H:i:s',time());
            $category = $request -> get('category');
            $creationDate = $request -> get('creationdate');
            // dd($creationDate);
            $categoryDescription = $request -> get('description');
            $update = Category::updt($id, $category, $categoryDescription, $creationDate, $updationDate);
            return view('admin/edit-category')
                    ->with(['update' => true]);
        }
    }
    //edit subcategory
    public static function editSubCategory(Request $request){
        $id = $request->all('id');
        $subcategory = SubCategory::getById($id);
        $categoryid = $subcategory[0] -> categoryid;
        $category = Category::getById($categoryid);
        return view('admin/edit-subcategory',[
            'category' => $category,
            'subcategory' => $subcategory,
            'update' => false,
        ]);
    }
    public static function updateSubCategory(Request $request){
        //lấy dữ liệu edit
        $id = $request->all('id');
        //xử lý validate
        $validator = Validator::make($request->all(), [
            'subcategory' => 'required|unique:subcategory,"subcategory"|min:6',
        ]);
        if ($validator -> fails()){
            return redirect("admin/subcategory")
                    -> withErrors($validator)
                    -> withInput();
        }else{
            //lấy giá trị từ input
            $id = $request->all('id');
            //cập nhật dữ liệu vào database
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $updationDate = date('Y-m-d H:i:s',time());
            $categoryid = $request -> get('category');
            $subcategory = $request -> get('subcategory');
            $creationDate = $request -> get('creationdate');
            $update = SubCategory::updt($id, $categoryid, $subcategory, $creationDate, $updationDate);
            return view('admin/edit-subcategory')
                    ->with(['update' => true]);
        }
    }
}
