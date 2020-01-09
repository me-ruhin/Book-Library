<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Chapter;
use App\Model\Book;
class ChapterController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas= Chapter::latest()->get();        

        return view('backend.admin.chapter.index',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books=Book::latest()->get();
        return view('backend.admin.chapter.create',compact('books'));
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


                'chapterName'=>'required',
                'bookId'=>'required'
        ]);


        $chapter=new Chapter();



        $chapter->chapter_name=$request->chapterName;
        $chapter->book_id=$request->bookId;
        $chapter->save();
        Toastr::success('chapter Successfully Created', 'Success');

        return redirect()->route('admin.chapter.index')->with('success','chapter successfully Created');


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
        $data= Chapter::find($id);       
         $books=Book::latest()->get();
        return view('backend.admin.chapter.edit',compact('data','books'));
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


                'chapterName'=>'required',
                'bookId'=>'required'
        ]);


        $chapter= Chapter::find($id);
        $chapter->chapter_name=$request->chapterName;
        $chapter->book_id=$request->bookId;
        $chapter->save();
        Toastr::success('chapter Successfully Updated', 'Success');

        return redirect()->route('admin.chapter.index')->with('success','chapter successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $chapter= Chapter::find($id)->delete();
            Toastr::warning('chapter Successfully Deleted', 'Deleted');
            return redirect()->route('admin.chapter.index')->with('delete','chapter successfully Delete');
    }
}
