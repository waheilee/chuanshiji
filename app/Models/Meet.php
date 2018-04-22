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

class Meet extends Model
{
    protected $table = 'article';
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
        $res = new Meet();
        $res->title = $request->title;
        $res->type  = $request->type;
        $res->content = $request->editorValue;
        $res->save();
    }

    public function del($id)
    {
        $del = Meet::find($id);
        $bool = $del->delete();
        if ($bool){
            return $bool;
        }
    }

    public function edit(Request $request)
    {
        $fist = Meet::find($request->id);
        $fist->title = $request->title;
        $fist->type  = $request->type;
        $fist->content = $request->editorValue;
        $fist->update();
    }

}