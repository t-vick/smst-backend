<?php

namespace app\smst\controller;

use think\Controller;
use think\Request;
use app\common\model\Map;

class MapController extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $list = Map::all();
//        $list = Map::with('floors.roads')->select(1);//select传可以传一个id
//        $list = Map::with('floors.roads')->select([1]);//select传空数组会返回一个空数组
//        $list = Map::all([],'floors.roads');//查询所有的map预载入floors,和roads
        return $list;
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
        $data = $request->param();
        $result = Map::create($data);
        return $result;
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
//        $list = Map::with('floors.roads','floors.cells')->select($id);//select传可以传一个id

//        $list = Map::with(['floors'=>function($query) {
//            $query->with('roads')->with('cells');
//        }])->select([$id]);
//        return $list;
        $map = Map::get($id,['floors' => function($query) {
            $query->with('roads')->with('cells');
        }]);
        return $map;
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->param();
        $result = Map::update($data,['id' => $id]);
        return $result;
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $result = Map::destroy($id);
        return $result;
    }
}
