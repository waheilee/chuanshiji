<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/20
 * Time: 22:14
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Tree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class TreeController extends Controller
{

    public function index()
    {
        $categorys = (new tree)->tree();

        return view('admin.tree.index')->with('data',$categorys);
    }

    //添加文章
    public function create(Request $request)
    {
        if ($request->isMethod('POST')){
//            dd($request->all());
            $res = new Tree();
            $res->add($request);
        }
        $categorys = (new tree)->tree();
        return view('admin.tree.create')->with('data',$categorys);
    }


    public function category()
    {
        $categorys = (new tree)->tree();
        return view('admin.tree.create')->with('data',$categorys);
    }

    //删除分类
    public function del(Request $request)
    {
        $res = new Tree();
        $bool= $res->del($request->id);
        if ($bool){
            return response(200);
        }

    }

    public function edit(Request $request)
    {

        new Tree();
        $edit = Tree::find($request->id);
        $t  = new Tree();
        $data = $t->tree();
        return view('admin.tree.editor',['con' =>$edit,'data'=>$data]);
    }

    public function update(Request $request)
    {

        $res = new Tree();
        $res->edit($request);
        return response(200);
    }


}