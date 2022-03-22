<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    private $pathViewController='admin.dashboard';
    public $users;
    public function __construct(){
        $this->users= new Users();
        
    }

    public function index(){

        $userList=$this->users->getALlUsers();

        return view($this->pathViewController.'.index',compact('userList'));
    }

    public function add(){

        return view($this->pathViewController.'.add');

    }
    public function postAdd(Request $request){
        $request->validate([
            'fullname'=>'required|min:5',
            'email'=>'requied|email'
        ],[
            'fullname.required'=>'Họ và tên bắt buộc',
            'fullname.min'=>'Họ và tên phải từ:min ký tự trở lên ',
            'email.requied'=>'Email bắt buộc',
            'email.email'=>'Email không đúng định dạng'
        ]);    
        return 'ok';

    }
}
