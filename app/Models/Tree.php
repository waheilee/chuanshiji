<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/20
 * Time: 22:27
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Tree extends Model
{

    protected $table = 'tree';
    protected $fillable = [
        'name'
    ];

    public function add(Request $request)
    {

        $res = new Tree();
        $res->name = $request->name;
        $res->pid = $request->pid;
        $res->save();
    }


    public function tree()
    {
        $categorys = $this->all();
        return $this->getTree($categorys,'name','id','pid');
    }
//一般传进三个参数。默认P_id=0；
    public function getTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
    {
        $arr = array();
        foreach ($data as $k=>$v){

            if($v->$field_pid==$pid){
//                dd($v->$field_pid);
                $data[$k]["_".$field_name] = $data[$k][$field_name];
                $arr[] = $data[$k];
//                dd($arr);
                foreach ($data as $m=>$n){
                    if($n->$field_pid == $v->$field_id){
                        $data[$m]["_".$field_name] = '├─ '.$data[$m][$field_name];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
//        dump($arr);die;
        return $arr;
    }

    public function ini($val)
    {
       $name =  Tree::find($val);
       return $name->name;
    }

    public function del($id)
    {
        $del = Tree::find($id);
//        dd($del);
        $bool = $del->delete();
        if ($bool){
            return $bool;
        }
    }

    public function edit(Request $request)
    {

        $res = Tree::find($request->id);

        $res->name = $request->name;
        $res->pid = $request->pid;
        $res->update();
    }
}