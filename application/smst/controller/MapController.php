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
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        $list = Map::with('floors.roads')->select($id);//select传可以传一个id
        $map = Map::get($id, ['floors.roads', 'floors.cells']);
        return $map;
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
