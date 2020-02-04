<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends AdminController
{
    private $oModel;

    public function __construct()
    {
        parent::__construct();

        $this->oModel = app(Category::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aPaginator = $this->oModel->getAllPaginate(20);

        return view('admin.category.index',compact('aPaginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aCategory = new Category();

        $aCategories = $this->oModel->getForSelect();

        return view('admin.category.create', compact('aCategory','aCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $aData = $request->input();

        if(empty($aData['slug'])){
            $aData['slug'] = Str::slug($aData['title']);
        }

        $oItem = new Category($aData);
        $oItem->save();

        if($oItem){
            return redirect()
                ->route('admin.categories.index')
                ->with(['success'=>'Успешно сохранено!']);
        }else{
            return back()->withErrors(['msq'=>'Ошибка сохранения'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return __METHOD__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aCategory = $this->oModel->getForEdit($id);

        $this->IsExistCategory($aCategory);

        $aCategories = $this->oModel->getForSelect();

        return view('admin.category.edit', compact('aCategory', 'aCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $oCategory = $this->oModel->getForEdit($id);

        $this->IsExistCategory($oCategory);

        $aData = $request->input();

        $result=$oCategory->update($aData);

        if($result){
            return redirect()
                ->route('admin.categories.index')
                ->with(['success'=>"Успешно сохранено"]);
        }else{
            return back()->withErrors(['msg'=>"Ошибка сохранения"])->withInput();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oCategory = $this->oModel->getForEdit($id);

        $this->IsExistCategory($oCategory);

        $result=$oCategory->delete();

        if($result){
            return redirect()
                ->route('admin.categories.index')
                ->with(['success'=>"Успешно удалено"]);
        }else{
            return back()->withErrors(['msg'=>"Ошибка удаления"])->withInput();
        }
    }

    private function IsExistCategory($aCategory)
    {
        if(empty($aCategory))
        {
            abort(404);
        }
    }
}
