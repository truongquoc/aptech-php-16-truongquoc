<?php

use Illuminate\Database\Seeder;
use App\newmodel;

class UserTableUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     /* factory('App\newmodel',10)->create();*/
      
        $model = new newmodel;
        $model->email="ngotruongquoc0102@gmail.com";
        $model->password=bcrypt("hello");
        
        $model->save();
    }
}
