<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

use App\Model\Book;
use App\Model\Chapter;
use App\Model\Rule;
use App\Model\Subrule;
class AdminDashboard extends Controller
{
    public function index(){

    		$data=[];

    		$data['books']=count(Book::latest()->get());
    		$data['chapters']=count(Chapter::latest()->get());
    		$data['rule']=count(Rule::latest()->get());
    		$data['subrule']=count(Subrule::latest()->get());
    	
    	return view('backend.admin.index',$data);
    }
}
