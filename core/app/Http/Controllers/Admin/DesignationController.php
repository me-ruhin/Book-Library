<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Designation;
class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= Designation::latest()->get();


        

        return view('backend.admin.Designation.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.admin.Designation.create');
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

                'designation_name'=>'required'

         ]);


         $desig=new Designation;
         $desig->des_title=$request->designation_name;
         $desig->save();
         Toastr::success('Designation Successfully Created', 'Success');

        return redirect()->route('admin.designation.index')->with('success','Designation successfully Created');




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
         $data= Designation::find($id);


        

        return view('backend.admin.Designation.edit',compact('data'));
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
                'designation_name'=>'required',
        ]);

        $desig= Designation::find($id);

        $desig->des_title=$request->designation_name;
         $desig->save();       
       


        Toastr::info('Designation Successfully Updated', 'Update');

        return redirect()->route('admin.designation.index')->with('success','Designation successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $dept= Designation::find($id)->delete();

            Toastr::warning('Designation Successfully Deleted', 'Deleted');
            return redirect()->route('admin.designation.index')->with('delete','Designation successfully Delete');
    }
}
