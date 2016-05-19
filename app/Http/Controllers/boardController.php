<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\MessageBoard;

use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;

class boardController extends Controller
{
    /*
    public function index(){
        $data = \App\boardModel::all();
        return view('index',$data);
    }
     * 
     */
    public function index(){

        //return \Auth::user()->name;
        $messageBoards = MessageBoard::all();
        # 分頁時，需要設定url的名稱
        #$messageBoards->setPath('boardModel');

        return view("messageBoard.index", compact('messageBoards'));
    }
    public function create(){
        $messageBoard = new MessageBoard();
        return View('messageBoard.create',compact('messageBoard'));
    }
    public function store(Request $request){
        
        
        $this->validate($request,['input_content' => 'required|max:30']);
        $messageBoard = new MessageBoard;
        $messageBoard -> boardname = $request->input('input_name');
        $messageBoard -> boardsex = $request->input('input_sex');
        $messageBoard -> boardsubject = $request->input('input_subject');
        $messageBoard -> boardcontent = $request->input('input_content');
        $messageBoard -> boardtime = date('Y-m-d H:i:s');
        
        $messageBoard->save();
        
        return Redirect::to('/');
    }
}
