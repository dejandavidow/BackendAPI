<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function GetCategories()
    {
        return DB::table('categories')->paginate(5);
    }
    public function GetCategory($id)
    {
        return DB::table('categories')->find($id);
    }
    public function PostCategory(Request $request)
    {
        DB::table('categories')->insert(['categoryname' => $request->categoryname]);
    }
    public function UpdateCategory($id,Request $request)
    {
        DB::table('categories')->where('id',$id)->update(['categoryname' => $request->categoryname]);
    }
    public function DeleteCategory($id)
    {
        DB::table('categories')->where('id',$id)->delete();
    }
    public function Search(Request $request)
    {
        $querystring = $request->query('search');
        return DB::table('clients')->where('categoryname','LIKE','%'.$querystring.'%')->get();
    }
}
