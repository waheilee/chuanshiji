<?php
/**
 * Created by PhpStorm.
 * User: 华阳
 * Date: 2018/4/16
 * Time: 17:11
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class ProjectController extends Controller
{

    public function index()
    {
        return view('admin.project.index');
    }

    public function create()
    {
        return view('admin.project.create');
    }
}