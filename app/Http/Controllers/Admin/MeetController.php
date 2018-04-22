<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/22
 * Time: 11:04
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meet;
use Illuminate\Support\Facades\DB;
use App\Models\Tree;
class MeetController extends Controller
{

    //列表页
    public function index()
    {
        new Meet();
//        $aa = Project::all();
        $list = DB::table('article')->paginate(10);
        return view('admin.meet.index', ['list' => $list]);
    }
    //添加文章
    public function create(Request $request)
    {
        if ($request->isMethod('POST')){
            $res = new Meet();
            $res->add($request);

        }
        return view('admin.meet.create');
    }
    //删除文章
    public function del(Request $request)
    {
        $res = new Meet();
        $bool= $res->del($request->id);
        if ($bool){
            return response(200);
        }

    }
    //编辑文章
    public function edit(Request $request)
    {
        new Meet();
        $edit = Meet::find($request->id);
        $t  = new Tree();
        $data = $t->tree();
        return view('admin.meet.editor',['con' =>$edit,'data'=>$data]);
    }
    //更新文章
    public function update(Request $request)
    {
        $res = new Meet();
        $res->edit($request);
        return response(200);
    }
}