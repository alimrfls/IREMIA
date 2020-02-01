<?php

namespace App\Http\Controllers;

use App\Perpanjangan;
use App\Tumpangan;
use App\Pemakaman;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PemakamanController extends Controller
{
    //
    public function regisPemakaman(Request $request){
        $rules=[
            'fullname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'confirmation_password' => 'required|same:password',
            'address' => 'required',
            'gender' => 'required',
            'images' => 'required',
            'namaPemakaman'=>'required',
            'KepalaPemakaman'=>'required',
            'NIPKepalaPemakaman'=>'required',
            'alamatPemakaman'=>'required',
            'kotaPemakaman'=>'required',
            'provinsiPemakaman'=>'required',
            'kodeposPemakaman'=>'required',
            'emailPemakaman'=>'required|string|email|max:255|unique:Pemakaman',
            'jumlahPemakaman'=>'required',
            'luasPemakaman'=>'required',
            'deskripsiPemakaman'=>'required|string',
            'photoPemakaman'=>'required',

        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('/pendaftaranPemakaman')->withErrors($validator)->withInput();
        }

        $file = $request->file('photoPemakaman');
        $file->move(public_path('/images/Pemakaman'), $file->getClientOriginalName());

        $pemakaman = new Pemakaman();
        $pemakaman->namaPemakaman = $request['namaPemakaman'];
        $pemakaman->alamatPemakaman = $request['alamatPemakaman'];
        $pemakaman->kotaPemakaman = $request['kotaPemakaman'];
        $pemakaman->provinsiPemakaman = $request['provinsiPemakaman'];
        $pemakaman->kodeposPemakaman = $request['kodeposPemakaman'];
        $pemakaman->emailPemakaman = $request['emailPemakaman'];
        $pemakaman->jumlahPemakaman = $request['jumlahPemakaman'];
        $pemakaman->luasPemakaman = $request['luasPemakaman'];
        $pemakaman->deskripsiPemakaman = $request['deskripsiPemakaman'];
        $pemakaman->photoPemakaman = $file->getClientOriginalName();
        $pemakaman->save();

        $file = $request->file('images');
        $file->move(public_path('/images/profile'), $file->getClientOriginalName());
        $usr = new User();
        $usr->fullname = $request['fullname'];
        $usr->email = $request['email'];
        $usr->password = bcrypt($request['password']);
        $usr->KepalaPemakaman = bcrypt($request['KepalaPemakaman']);
        $usr->NIPKepalaPemakaman = bcrypt($request['NIPKepalaPemakaman']);
        $usr->address = $request['address'];
        $usr->gender = $request['gender'];
        $usr->pemakaman_id=$pemakaman->pemakamanid;
        $usr->images = $file->getClientOriginalName();
        $usr->role = 'admin_tpu';

        $usr->save();
        return redirect('/')->with('register_success','Welcome,');


    }

    public function ShowPemakaman(){
        $pemakaman = DB::table('pemakaman')
            ->join('users','pemakaman.id','=','users.pemakaman_id')
            -> get();

        return view('pemakaman.lihat_detail')->with([
            "pemakamanumum" => $pemakaman,
            ]);

    }

    public function ShowMakam($id){
        $makams = DB::table('makam','Pemakaman')
            ->join('Pemakaman','makam.pemakaman_id','=','Pemakaman.id')
            ->where('Pemakaman.id','=',$id)
            ->get();
        $makamtumpangan =DB::table('Pemakaman','makam')
            -> join('makam','Pemakaman.id','=','makam.pemakaman_id')
            ->get();
        return view ('Makam.show_Makam')->with([
            "listmakam"=>$makams,
            "makam_tumpangan"=>$makamtumpangan
        ]);
    }

    public function ShowDetailPemakamanByUser($pemakamanid){
        $pemakamandetail = DB::table('Pemakaman')
            ->where('Pemakaman.id','=',$pemakamanid)
            ->get();
        $makamtumpangan = DB::table('Pemakaman','makam')
            ->join('makam','Pemakaman.id','=','makam.pemakaman_id')
            ->get();
        $users = DB::table('Pemakaman','users')
            ->join('users','Pemakaman.id','=','users.pemakaman_id')
            ->get();
        return view('Pemakaman.lihat_detailByUser')->with([
            "detailpemakaman"=>$pemakamandetail,
            "makamstumpangan"=>$makamtumpangan,
            "pic"=>$users
        ]);
    }

    //untuk membuat
    public function insertMakamTumpangan(Request $request){
        $rules=[
            'nama_Almarhum'=>'required',
            'lokasi_Pemakaman'=>'required',
            'blok'=>'required',
            'blad'=>'required',
            'petak'=>'required',
            'MasaBerlaku'=>'required',
            'nama_Ahliwaris'=>'required',
            'alamat_Ahliwaris'=>'required',
            'RT_Ahliwaris'=>'required',
            'RW_Ahliwaris'=>'required',
            'email_Ahliwaris'=>'required',
            'phone_Ahliwaris'=>'required',

        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('/daftar_makam')->withErrors($validator)->withInput();
        }

        $user = Auth::user();
      //  dd($user);
        $file = $request->file('photo_makam');
        $file->move(public_path('/images/makamtumpangan'), $file->getClientOriginalName());
        $file = $request->file('photo_makam2');
        $file->move(public_path('/images/makamtumpangan'), $file->getClientOriginalName());
        $file = $request->file('photo_makam3');
        $file->move(public_path('/images/makamtumpangan'), $file->getClientOriginalName());

        $makam_tumpangan = new Tumpangan();
        $makam_tumpangan->nama_Almarhum = $request['nama_Almarhum'];
        $makam_tumpangan->tanggal_Wafat = $request['tanggal_Wafat'];
        $makam_tumpangan->lokasi_Pemakaman = $request['lokasi_Pemakaman'];
        $makam_tumpangan->pemakaman_id = $user->pemakaman_id;
        $makam_tumpangan->blok = $request['blok'];
        $makam_tumpangan->blad = $request['blad'];
        $makam_tumpangan->petak = $request['petak'];
        $makam_tumpangan->MasaBerlaku = $request['MasaBerlaku'];
        $makam_tumpangan->nama_Ahliwaris = $request['nama_Ahliwaris'];
        $makam_tumpangan->alamat_Ahliwaris = $request['alamat_Ahliwaris'];
        $makam_tumpangan->RT_Ahliwaris = $request['RT_Ahliwaris'];
        $makam_tumpangan->RW_Ahliwaris = $request['RW_Ahliwaris'];
        $makam_tumpangan->email_Ahliwaris = $request['email_Ahliwaris'];
        $makam_tumpangan->phone_Ahliwaris = $request['phone_Ahliwaris'];
        $makam_tumpangan->masa_Berlakuizin = $request['masa_Berlakuizin'];
        $makam_tumpangan->avail_tumpangan = 'Tersedia';
        $makam_tumpangan->photo_makam = $file->getClientOriginalName();
        $makam_tumpangan->photo_makam2 = $file->getClientOriginalName();
        $makam_tumpangan->photo_makam3= $file->getClientOriginalName();
        $makam_tumpangan->save();
        return redirect('/')->with('register_success','Welcome,');
    }

    public function ShowAllPemakaman(){
        $pemakaman = Pemakaman::all();
        return view('Pemakaman.cari-Pemakaman')->with([
            'listPemakaman'=>$pemakaman
        ]);
    }

}
