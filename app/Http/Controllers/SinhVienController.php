<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\SinhVien;

class SinhVienController extends Controller
{
    public function index()
    {

        // $books = Book::with('category')->orderBy('id','DESC')->get();
        // return view('admin.books.index')->with(compact('books'));

        return view('pages.home');
    }

    public function insert()
    {
        return view('pages.insert_sv');
    }

    // SAVE WITH VALIDATE 
    public function save_with_validate(Request $request)
    {
        dd($request->all());
        $data = $request->validate(
            [
                'name'             => 'required|max:255',
                'code'             => 'required|max:255',
                'class'             => 'required|max:255',
                'email'              => 'required|max:255',
                'password'           => 'required|max:255',
                
            ],
            [
                'name.required' => 'Bạn phải nhập tên!',
                'code.required' => 'Bạn phải nhập mã sinh viên!',
                'class.required' => 'Bạn phải nhập lớp!',
                'email.unique'   => 'Bạn phải nhập Email!',
                'password.required'  => 'Bạn phải nhập Password',
            ]);


        $sinhvien = new SinhVien();
        $sinhvien->name         = $data['name'];
        $sinhvien->code         = $data['code'];
        $sinhvien->class        = $data['class'];
        $sinhvien->email        = $data['email'];
        $sinhvien->password     = $data['password'];

        dd($sinhvien);
        $sinhvien->save();

        return redirect()->back()->with('status','Thêm mới sinh viên thành công!');
    }

   

    // KHONG VALIDATE 
    public function save_without_validate()
    {

    }
}
