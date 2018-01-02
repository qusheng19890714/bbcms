<?php

namespace Modules\Bbs\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Core\Base\AdminController;
//use Modules\Bbs\Models\Bbs;

class BbsController extends AdminController
{
    /**
     * 首页
     *
     * @return Response
     */
    public function index()
    {
        $this->title = trans('bbs::bbs.title');

        // 全部获取
        //$this->bbs = Bbs::all();
        // 部分获取
        //$this->bbs = Bbs::with('some')->where('key','value')->orderby('id','asc')->get();        
        // 分页获取
        //$this->bbs = Bbs::with('some')->where('key','value')->orderby('id','asc')->paginate(25);

        return $this->view();
    }

    /**
     * 新建
     * 
     * @return Response
     */
    public function create()
    {
        $this->title = trans('bbs::bbs.create');

        $this->bbs = Bbs::findOrNew(0);

        return $this->view();
    }

    /**
     * 保存
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $bbs = new Bbs;
        $bbs->fill($request->all());
        $bbs->save();

        return $this->success(trans('core::master.created'), route('bbs.bbs.index'));
    }

    /**
     * 显示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->title = trans('bbs::bbs.show');

        $this->bbs = Bbs::findOrFail($id);

        return $this->view();
    }    

    /**
     * 编辑
     *
     * @return Response
     */
    public function edit($id)
    {
        $this->title = trans('bbs::bbs.edit');
        $this->id    = $id;
        $this->bbs = Bbs::findOrFail($id);

        return $this->view();
    }

    /**
     * 更新
     *
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $bbs = Bbs::findOrFail($id);
        $bbs->fill($request->all());        
        $bbs->save();

        return $this->success(trans('core::master.updated'), route('bbs.bbs.index'));
    }

    /**
     * 删除
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bbs = Bbs::findOrFail($id);
        $bbs->delete();

        return $this->success(trans('core::master.deleted'), route('bbs.bbs.index'));        
    }
}
