<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;


class studentController extends Controller
{
    public function index(){
        $student = student::all();
        return view('table',compact(['student']));
    }

    public function create(){
        return view('crud');
    }

    public function store(Request $request){
    //    dd($request->all() );

    // lebih spesifik
        // $student = student::create([
        //     'nama'=>$request->input('nama'),
        //     'kesalahan'=>$request->input('kesalahan'),
        //     'sanksi'=>$request->input('sanksi')
        // ]);
    
        // lebih gampang
        $student=student::create($request -> all());
        
        return redirect('table');
    }

    // menampilkan halaman edit
    public function edit($id){
        $student = student::find($id);
        
        return view('update.edit',compact(['student']));
    }

    //menjalankan update
    public function update($id, Request $request){
        $student = student::find($id);
        $student->update($request -> all());
        
        return redirect('table');
    }

    // hapus
    public function destroy($id){
        $student = student::find($id);
        $student ->delete();
        return redirect('table');
    }

}
