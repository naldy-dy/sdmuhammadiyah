<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Siswa;

class AdminController extends Controller
{
   function beranda(){
        $data['data'] = Siswa::selectRaw('kelas, COUNT(*) as jumlah')
                 ->groupBy('kelas')
                 ->orderBy('kelas')
                 ->get();

                  $data['totalSiswa'] = Siswa::whereIn('kelas',[1,2,3,4,5,6])
                 ->count();

                 $data['totalAlumni'] = Siswa::whereNotIn('kelas',[1,2,3,4,5,6])
                 ->count();

                  $data['totalLaki'] = Siswa::whereIn('kelas',[1,2,3,4,5,6])
                  ->where('jenis_kelamin','Laki-laki')
                 ->count();

                  $data['totalPerempuan'] = Siswa::whereIn('kelas',[1,2,3,4,5,6])
                  ->where('jenis_kelamin','Perempuan')
                 ->count();


    return view('admin.beranda',$data);
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
