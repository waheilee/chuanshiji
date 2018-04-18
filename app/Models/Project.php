<?php
namespace App\Models;
/**
 * Created by PhpStorm.
 * User: 华阳
 * Date: 2018/4/18
 * Time: 14:35
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Project extends Model
{
    protected $table = 'project';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'type', 'content',
    ];

    public function add(Request $request)
    {
        $res = new Project();
        $res->title = $request->title;
        $res->type  = $request->type;
        $res->content = $request->editorValue;
        $res->save();

//        dd($res);
    }
}