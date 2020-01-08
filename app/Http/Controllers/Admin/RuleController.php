<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Chapter;
use App\Model\Rule;
use App\Model\Book;
class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas= Rule::latest()->get();        

        return view('backend.admin.rule.index',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       
        $chapters=Chapter::latest()->get();
        $books=Book::latest()->get();
        return view('backend.admin.rule.create',compact('chapters','books'));
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


                'bookid'=>'required',
                'cpname'=>'required',
                'rule_name'=>'required',
                'ruleDescription'=>'required',
                'rule_image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ]);



                $rule=new Rule();

            $image= $request->file('rule_image');


                if($image){
                        $imageOriginalName= $image->getClientOriginalName();
                         $image->getClientOriginalExtension();

                        $imageName=(int)(time()/36000).rand().'_'.$imageOriginalName;
                            $path ="rulePhoto/";
                            $image->move($path,$imageName);

                }else{
                $imageName="";
                    }
                






       $rule->chapter_id=$request->cpname;
       $rule->book_id=$request->bookid;
       $rule->rules_name=$request->rule_name;
       $rule->image=$imageName;
       $rule->description=$request->ruleDescription;
       $rule->save();

        Toastr::success('Rule Successfully Created', 'Success');

        return redirect()->route('admin.rule.index')->with('success','Rule successfully Created');


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
         $chapters= Chapter::latest()->get();       
         $books=Book::latest()->get();
        $rule= Rule::find($id);
        return view('backend.admin.rule.edit',compact('chapters','books','rule'));
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


                'bookid'=>'required',
                'cpname'=>'required',
                'rule_name'=>'required',
                'ruleDescription'=>'required',              
        ]);


         $image= $request->file('rule_image');

         $ruleInfo= Rule::find($id);
                if($image){

                            
                            unlink('rulePhoto/'. $ruleInfo->image);

                        $imageOriginalName= $image->getClientOriginalName();
                         $image->getClientOriginalExtension();

                        $imageName=(int)(time()/36000).rand().'_'.$imageOriginalName;
                            $path ="rulePhoto/";
                            $image->move($path,$imageName);

                }else{
                $imageName=$ruleInfo->image;
                    }



       $ruleInfo->chapter_id=$request->cpname;
       $ruleInfo->book_id=$request->bookid;
       $ruleInfo->rules_name=$request->rule_name;
       $ruleInfo->image=$imageName;
       $ruleInfo->description=$request->ruleDescription;
       $ruleInfo->save();
        Toastr::success('Rule Successfully Updated', 'Success');

        return redirect()->route('admin.rule.index')->with('success','Rule successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $ruleInfo= Rule::find($id);

           if($ruleInfo->image){

            unlink('rulePhoto/'. $ruleInfo->image);
           }
           $ruleInfo->delete();
            Toastr::warning('Rule Successfully Deleted', 'Deleted');
            return redirect()->route('admin.rule.index')->with('delete','Rule successfully Delete');
    }


    /*get book Chapter*/

    public function getChapter($id){
        


        $data=Chapter::where('book_id',$id)->get();

        return response()->json($data);
    }
}
