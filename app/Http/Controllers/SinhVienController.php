<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\SinhVien;

class SinhVienController extends Controller
{
    public function index()
    {
        $sinhviens = SinhVien::all();
        foreach($sinhviens as $sinhvien)
        {
            $encript_password = $sinhvien->password;
            $decript_password = base64_decode($encript_password);
            $sinhvien->password = $decript_password;
        }
        return view('pages.home')->with(compact('sinhviens'));
    }

    public function insert()
    {
        return view('pages.insert_sv');
    }

    public function edit( $id)
    {
        $sinhvien = SinhVien::find($id);
        $decript_password = base64_decode($sinhvien->password);
        $sinhvien->password = $decript_password;
        return view('pages.edit_sv')->with(compact('sinhvien'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name'             => 'required|max:255',
                'code'             => 'required|max:255',
                'class'            => 'required|max:255',
                'email'            => 'required|max:255',
                'password'         => 'required|max:255',

            ],
            [
                'name.required'         => 'Bạn phải nhập tên!',
                'code.required'         => 'Bạn phải nhập mã sinh viên!',
                'class.required'        => 'Bạn phải nhập lớp!',
                'email.unique'          => 'Bạn phải nhập Email!',
                'password.required'     => 'Bạn phải nhập Password',
            ]);
        $sinhvien = SinhVien::find($id);
        $sinhvien->name         = $data['name'];
        $sinhvien->code         = $data['code'];
        $sinhvien->class        = $data['class'];
        $sinhvien->email        = $data['email'];
        $encript_password = base64_encode($data['password']);
        $sinhvien->password     = $encript_password;
        $sinhvien->save();
        return redirect()->back()->with('status','Update sinh viên thành công!');
    }

    // SAVE WITH VALIDATE
    public function save(Request $request)
    {
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
        $encript_password = base64_encode($data['password']);
        $sinhvien->password     = $encript_password;
        $sinhvien->save();
        return redirect()->back()->with('status','Thêm mới sinh viên thành công!');
    }



    // KHONG VALIDATE
    public function save_without_validate()
    {

    }

    public function delete($id)
    {

        SinhVien::find($id)->delete();
        return redirect()->back()->with('status','Xoa sinh vien thanh cong!');
    }
}
