<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App;


class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users=DB::table('informations')->get();
        $users = App\newmodel::orderby('created_at','desc')->paginate(5);
        return view('post.index',compact('users'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function create()
    {
       return view('get.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password_err="";
          if(isset($request->password))
          {
          if(!preg_match("/^[a-zA-Z\d]{7,15}$/",$request->password)){
               $password_err="Password must be contained letter, number and betteen 7-15 characters . ";
               echo "works";
          }
          if(!preg_match("/\d/",$request->password)){
              $password_err.="Must at least one number";
          }
          if(!preg_match("/[A-Z]/",$request->password)){
              $password_err.="Must contain an uppercase letter";
          }
          if($password_err==''){
         $email=$request->email;
        $password=$request->password;
        $age=$request->age;
        // $id=$request->id;
        $model = new App\newmodel;
        $model->email=$email;
        $model->age=$age;
        $model->password=bcrypt($password);
        $model->save();
          return redirect()->route('user.index');
       
          }
        
          else{ 
          return redirect()->route('user.register');
          }
        }
        echo "failed";
    }

    /**lara
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       $model = App\newmodel::Where('id',$id)->get()->first();     
        
        $email=$model->email;
        $age=$model->age;
        $id=$model->ID;
        // foreach($model as $key)
        // {
        // $email=$key->email;    
        // $password=$key->password;
        // $age=$key->age;
        // $id=$key->ID;
        // }
    return View('get.show',['email'=>$email,'age'=>$age,'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user=DB::select('select *from informations where id=?',[$id]);
         $email=$user[0]->email;
        $password=$user[0]->password;
        $age=$user[0]->age;
        $id=$user[0]->ID;
        
         return view('edit',['email'=>$email,'password'=>$password,'age'=>$age,'id'=>$id]);
      
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
        $user=DB::table('informations')->where('id',$id)->update(['password'=>$request->password,
                                                                  'age'=>$request->age]);
     
         return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $model = App\newmodel::Where('id',$id)->delete();

        return redirect()->route('user.index');
    }
    public function delete($id)
    {
        return view('delete',['id'=>$id]);
    }
    public function model()
    {
        $model = new newmodel;
       
        //dd($model);
        $model->name='quoc';
        $model->password='14141';
        $model->save();
       /* foreach($model as $model)
        {
            echo $model->name.'<br>';
        }*/
    }
}
