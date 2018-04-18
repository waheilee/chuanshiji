<?php
/**
 * Created by PhpStorm.
 * User: 华阳
 * Date: 2018/4/16
 * Time: 17:11
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{

    public function index()
    {
        return view('admin.project.index');
    }

    public function create(Request $request)
    {

        return view('admin.project.create');
    }

    public function add(Request $request)
    {
        $res = new Project();
        $res->add($request);
        if ($res){
            return response(200);
        }
    }

}