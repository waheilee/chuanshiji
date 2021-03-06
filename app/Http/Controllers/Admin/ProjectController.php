<?php
/**
 * Created by PhpStorm.
 * User: 华阳
 * Date: 2018/4/16
 * Time: 17:11
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Tree;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller
{
    //列表页
    public function index()
    {
        new Project();
//        $aa = Project::all();
        $list = DB::table('article')->paginate(10);
        return view('admin.project.index', ['list' => $list]);
    }
    //添加文章
    public function create(Request $request)
    {
        if ($request->isMethod('POST')){
            $res = new Project();
            $res->add($request);

        }
        return view('admin.project.create');
    }
    //删除文章
    public function del(Request $request)
    {
        $res = new Project();
       $bool= $res->del($request->id);
       if ($bool){
           return response(200);
       }

    }
    //编辑文章
    public function edit(Request $request)
    {
        new Project();
        $edit = Project::find($request->id);
        $t  = new Tree();
        $data = $t->tree();
        return view('admin.project.editor',['con' =>$edit,'data'=>$data]);
    }
    //更新文章
    public function update(Request $request)
    {
        $res = new Project();
        $res->edit($request);
        return response(200);
    }
}