<?php

namespace App\Http\Controllers;

use App\Models\tin;
use Illuminate\Http\Request;

class TinController extends Controller
{
    public function index()
    {
        $tins = tin::all();
        return view('Tin/danhsach', compact('tins'));
    }

    public function create()
    {
        $tins = tin::all();
        return view('tin/create', compact('tins'));
    }

    public function store(Request $request){
        tin::create(
            [
                'tieuDe' => $request->input('tieuDe'),
               
                'ngayDang' => $request->input('ngayDang'),
                'urlHinh' => $request->input('urlHinh'),
               
                'view' => $request->input('view'),
                'noiBat' => $request->input('noiBat'),
                'anHien' => $request->input('anHien'),
                'tags' => $request->input('tags')
            ]
            );
        return redirect()->route('tin.index')->with('success', 'Thêm mới thành công');
    }

    public function delete(Request $request)
    {
        $tin = tin::find($request->input('id'));
        if ($tin) {
            $tin->delete();
            return redirect()->route('tin.index')->with('success', 'Xóa thành công');
        } else {
            return redirect()->route('tin.index')->with('error', 'Không tìm thấy bản ghi');
        }
    }
}
