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
}
