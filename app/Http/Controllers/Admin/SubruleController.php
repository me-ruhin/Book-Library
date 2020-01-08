<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Rule;
use App\Model\Subrule;
class SubruleController extends Controller
{
   public function index()
    {
        
        $datas= Subrule::latest()->get();        

        return view('backend.admin.subrule.index',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       
        $rules=Rule::latest()->get();
        return view('backend.admin.subrule.create',compact('rules'));
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


                'ruleId'=>'required',
                'subrule_name'=>'required',
                'subrule_image'=>'required'
                
        ]);



                $subrule=new Subrule();

            $mainimage= $request->file('subrule_image');


                if($mainimage){
                        $imageOriginalName= $mainimage->getClientOriginalName();
                         $mainimage->getClientOriginalExtension();

                        $mainImageName=(int)(time()/36000).rand().'_'.$imageOriginalName;
                            $path ="subRulePhoto/";
                            $mainimage->move($path,$mainImageName);

                }else{
                $mainImageName="";
                    }
                

                     $desImage= $request->file('suruledesPhoto');

                     if($desImage){


                             $imageOriginalName= $desImage->getClientOriginalName();
                         $desImage->getClientOriginalExtension();

                        $desImageName=(int)(time()/36000).rand().'_'.$imageOriginalName;
                            $path ="subRuleDesPhoto/";
                            $desImage->move($path,$desImageName);


                     }else{

                        $desImageName='';


                     }

            




       $subrule->rule_id=$request->ruleId;
       $subrule->subrule_name=$request->subrule_name;
       $subrule->image=$mainImageName;
       $subrule->description_text=$request->subruleDescription;
       $subrule->description_image=$desImageName;
       $subrule->save();

        Toastr::success('Subrule Successfully Created', 'Success');

        return redirect()->route('admin.subrule.index')->with('success','Subrule successfully Created');


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
        
        $data= Subrule::find($id);
        $rules= Rule::latest()->get();
        return view('backend.admin.subrule.edit',compact('data','rules'));
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


                'ruleId'=>'required',
                'subrule_name'=>'required'
                
                
        ]);


        $mainimage= $request->file('subrule_image');

         $subrule= Subrule::find($id);
               

                if($mainimage){

                        unlink('subRulePhoto/'.$subrule->image);
                        $imageOriginalName= $mainimage->getClientOriginalName();
                         $mainimage->getClientOriginalExtension();

                        $mainImageName=(int)(time()/36000).rand().'_'.$imageOriginalName;
                            $path ="subRulePhoto/";
                            $mainimage->move($path,$mainImageName);

                }else{
                $mainImageName=$subrule->image;
                    }
                

                     $desImage= $request->file('suruledesPhoto');

                     if($desImage){

                                if($subrule->description_image){
                                     unlink('subRuleDesPhoto/'.$subrule->description_image);
                                    }
                             $imageOriginalName= $desImage->getClientOriginalName();
                         $desImage->getClientOriginalExtension();

                        $desImageName=(int)(time()/36000).rand().'_'.$imageOriginalName;
                            $path ="subRuleDesPhoto/";
                            $desImage->move($path,$desImageName);


                     }else{

                        $desImageName=$subrule->description_image;


                     }




       $subrule->rule_id=$request->ruleId;
       $subrule->subrule_name=$request->subrule_name;
       $subrule->image=$mainImageName;
       $subrule->description_text=$request->subruleDescription;
       $subrule->description_image=$desImageName;
       $subrule->save();

        Toastr::success('Rule Successfully Updated', 'Success');

        return redirect()->route('admin.subrule.index')->with('success','Rule successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $ruleInfo= Subrule::find($id);

        

           if($ruleInfo->image){

            unlink('subRulePhoto/'.$ruleInfo->image);
           }

           if($ruleInfo->description_image !=NULL){

            unlink('subRuleDesPhoto/'. $ruleInfo->description_image);
           }
           $ruleInfo->delete();
            Toastr::warning('Rule Successfully Deleted', 'Deleted');
            return redirect()->route('admin.subrule.index')->with('delete','Rule successfully Delete');
    }
}
