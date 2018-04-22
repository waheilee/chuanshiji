<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/22
 * Time: 11:26
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Tree;
use Illuminate\Http\Request;
use App\Models\Market;
use Illuminate\Support\Facades\DB;

class MarketController extends Controller
{
//列表页
    public function index()
    {
        new Market();
//        $aa = Project::all();
        $list = DB::table('article')->paginate(10);
        return view('admin.market.index', ['list' => $list]);
    }
    //添加文章
    public function create(Request $request)
    {
        if ($request->isMethod('POST')){
            $res = new Market();
            $res->add($request);

        }
        return view('admin.market.create');
    }
    //删除文章
    public function del(Request $request)
    {
        $res = new Market();
        $bool= $res->del($request->id);
        if ($bool){
            return response(200);
        }

    }
    //编辑文章
    public function edit(Request $request)
    {
        new Market();
        $edit = Market::find($request->id);
        $t  = new Tree();
        $data = $t->tree();
        return view('admin.market.editor',['con' =>$edit,'data'=>$data]);
    }
    //更新文章
    public function update(Request $request)
    {
        $res = new Market();
        $res->edit($request);
        return response(200);
    }
}