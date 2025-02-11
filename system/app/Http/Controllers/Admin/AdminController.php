<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
   function beranda(){
    return view('admin.beranda');
   }

   function profilAkun(){
      $data['title'] = "Profil Akun";
      return view('admin.profil-akun',$data);
   }

   function gantiPassword(){
      $new = request('new');
      $confirm = request('confirm');

         if($confirm == $new){
                User::where('id',Auth::id())->update([
            'password' => bcrypt($new),
         ]);
                return redirect('logout')->with('success','Password berhasil diganti, silahkan masuk kembali');
      }else{
         return back()->with('error','Password tidak sama');
      }
     
   }
}
