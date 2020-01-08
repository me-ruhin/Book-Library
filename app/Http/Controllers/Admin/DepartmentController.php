<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Department;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= Department::latest()->get();


        

        return view('backend.admin.Department.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.admin.Department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

                'dept_name'=>'required',
                'dept_status'=>'required'
        ]);


        $dept=new Department();


        $dept->dept_name=$request->dept_name;
        $dept->status=$request->dept_status;
        $dept->save();
        Toastr::success('Department Successfully Created', 'Success');

        return redirect()->route('admin.department.index')->with('success','Department successfully Created');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= Department::find($id);


        

        return view('backend.admin.department.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       


        $request->validate([
                'dept_name'=>'required',
                'dept_status'=>'required'
        ]);
        $dept= Department::find($id);

        $dept->dept_name=$request->dept_name;
        $dept->status=$request->dept_status;
        $dept->save();


        Toastr::info('Department Successfully Updated', 'Update');

        return redirect()->route('admin.department.index')->with('success','Department successfully Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $dept= Department::find($id)->delete();

            Toastr::warning('Department Successfully Deleted', 'Deleted');
            return redirect()->route('admin.department.index')->with('delete','Department successfully Delete');

    }
}
