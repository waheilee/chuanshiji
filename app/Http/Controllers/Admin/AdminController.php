<?php
namespace App\Http\Controllers\Admin;
/**
 * Created by PhpStorm.
 * User: 华阳
 * Date: 2018/4/16
 * Time: 14:56
 */
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }
}