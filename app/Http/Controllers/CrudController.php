<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use App\Models\Crud as ModelsCrud;

class CrudController extends Controller
{
    public function addProduct()
    {
        return view('addProduct');
    }

    //addProduct
    public function upProduct(Request $request)
    {
        $data = new Crud();

        $data->name = $request->pName;
        $data->desc = $request->pDes;

        $img = $request->pImg;
        $imgName = time().' . '.$img->getClientOriginalExtension();
        $img->move('ProductFolder',$imgName);
        $data->img = $imgName;

        $data->save();
        return redirect('/view');

    }
    //viewPage
    public function viewPage()
    {
        $data = Crud::all();
        return view('view',compact('data'));
    }
    //deleteData
    public function deleteData($id)
    {
        $del = Crud::find($id);
        $del->delete();
        return redirect()->back();
    }

    //edit data
    public function edit($id)
    {
        $data = Crud::find($id);
        return view('edit',compact('data'));
    }

    //updateProduct
    public function updateProduct(Request $request,$id){
        $update = Crud::find($id);

        $update->name = $request->editName;
        $update->desc = $request->editDes;

        $updImg = $request->editImg;
        $updImgName = time().' . '.$updImg->getClientOriginalExtension();
        $updImg->move("ProductFolder",$updImgName);
        
        $update->img = $updImgName;
        $update ->save();
        return redirect('/view');
    }
}
