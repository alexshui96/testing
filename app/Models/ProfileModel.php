<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    use HasFactory;
    protected $table = 'user_data';
    public $timestamps = false;

    // 如果不想放 created_at  update_at ，要换名字可以这样换
    // const CREATED_AT = 'log_time';
    // const UPDATED_AT = 'reg_time';


    // 插入有3种 insert save craete ,craete我不用


    public function inserUser($data){
        $res = self::insert($data);
        return $res;
    }

    // save会自动储存时间需要的话就在database加 created_at  update_at
    // save不需要加时间就关了   public $timestamps = false;
    public function saveUser($data){
        $this->username = $data['username'];
        $this->age = $data['age'];
        $res = $this->save();

        return $res;
    }




    // update

    public function updateUser($data){
        $res = self::where('id',$data['id'])->update(['username'=>$data['username'],'age'=>$data['age']]);
        return $res;
    }


    // delete单一数据

    public function deleteUser($id){
        $res = self::where('id',$id['id'])->delete();
        return $res;
    }


    // destroy可以delete多条数据

    public function destroyUser($id){
        $res = self::destroy([7,8,9,10]);
        return $res;
    }



    // 查询 search

    public function getUser(){

        // $res = self::max('age');

        $res = self::where('id','>','7')->select('username','age')->orderBy('id','desc')->get()->toArray();
        return $res;
    }


    // 分页 page

    public function pageUser(){

        // $res = self::max('age');

        $res = self::paginate(2);
        return $res;
    }




    // ------------------------------------------------------------------

    // linktable

    // link model get user_data_two table
    public function linkemail(){

        // user_data_id = user_data.id
        return $this->hasOne('App\Models\EmailModel','user_data_id','id');

    }


    // 1对1
    public function checkemail(){

        // user_data_id = user_data.id
        
        $res = self::find('6')->linkemail()->value('email');
        return  $res;

    }




    // link model get user_data_two table
    public function linkaddress(){

        // user_data_id = user_data.id
        return $this->hasMany('App\Models\AddressModel','uid','id');

    }


    // 1对多
    public function checkaddress(){

        // user_data_id = user_data.id
        
        $res = self::find('6')->linkaddress()->pluck('address');
        return  $res;

    }







}
