<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileModel;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    function index(){


        // Controller操作

        // return ProfileModel::all();
        // return ProfileModel::where('id',3)->get();
        // return ProfileModel::max('id'); avg sum min count



        // delete 单个数据
        //   $res = ProfileModel::where('id',3);
        //   $res->delete();
        //  return ProfileModel::all();

        //  delete 多个数据
        //  ProfileModel::destroy(array(4,5));
        //  return ProfileModel::all();




        // 添加数据
        // $res = new ProfileModel;
        // $res->username='superman';
        // $res->age=100;
        // $res->save();
        // return ProfileModel::all();



        // update
        //    $res = ProfileModel::where('id',4)->update(array('username'=>'supercute','age'=>40));
        //    return ProfileModel::all();

        // ------------------------------------------------------------------------------------------------

        // Model操作

        // insert data
        // $data = ['username'=>'eee','age'=>33];
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->inserUser($data);
        // return ProfileModel::all();

        // savedata
        // $data = ['username'=>'savedaya','age'=>90];
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->saveUser($data);
        // return ProfileModel::all();



        // updatedata
        // $data = ['username'=>'updatedata','age'=>70,'id'=>7];
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->updateUser($data);
        // return ProfileModel::all();



        // deletedata
        // $id = ['id'=>7];
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->deleteUser($id);
        // return ProfileModel::all();

        // deletedata
        // $id = ['id'=>7];
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->destroyUser($id);
        // return ProfileModel::all();


        // search
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->getUser();
        // return $res;


        // search 2 table 1对1
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->checkemail();
        // return $res;

        // search 2 table 1对多
        $profilemodel = new ProfileModel;
        $res = $profilemodel->checkaddress();
        return $res;



        // page 分页
        // $profilemodel = new ProfileModel;
        // $res = $profilemodel->pageUser();
        // return view('page',['users'=>$res]);

        // <div >
        //     @foreach ($users as $user)
        //         {{ $user['username'] }}{{$user['age']}}
        //     @endforeach
        // </div>

        // {{ $users->links() }}
    


        // ------------------------------------------------


        // page 分页
        // $res = DB::table('user_data')->paginate(3);
        // return view('page',['users'=>$res]);

        // <div >
        //     @foreach ($users as $user)
        //         {{ $user->username }}{{$user->age'}}
        //     @endforeach
        // </div>

        // {{ $users->links() }}

 

    }
}
