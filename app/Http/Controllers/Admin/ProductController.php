<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/22
 * Time: 11:20
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Tree;
class ProductController extends Controller
{
//列表页
    public function index()
    {
        new Product();
//        $aa = Project::all();
        $list = DB::table('article')->paginate(10);
        return view('admin.product.index', ['list' => $list]);
    }
    //添加文章
    public function create(Request $request)
    {
        if ($request->isMethod('POST')){
            $res = new Product();
            $res->add($request);

        }
        return view('admin.product.create');
    }
    //删除文章
    public function del(Request $request)
    {
        $res = new Product();
        $bool= $res->del($request->id);
        if ($bool){
            return response(200);
        }

    }
    //编辑文章
    public function edit(Request $request)
    {
        new Product();
        $edit = Product::find($request->id);
        $t  = new Tree();
        $data = $t->tree();
        return view('admin.product.editor',['con' =>$edit,'data'=>$data]);
    }
    //更新文章
    public function update(Request $request)
    {
        $res = new Product();
        $res->edit($request);
        return response(200);
    }
}