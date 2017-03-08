<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Jadwal;
use App\Bimbingan;
//use App\Http\Request;
use App\Http\Controllers\Controllers;

/**
* 
*/
class JadwalController extends Controller
{
	public function index()
	{
		$jadwals = DB::table('jadwal') 
		->join('bimbingan', 'jadwal.jadwal_bimbingan', '=', 'bimbingan.id')
		->select('*')
		->paginate(5);
        return view('jadwal.index', ['jadwals' => $jadwals]);
	}
	public function create()
	{
		$bimbingan= DB::table('bimbingan')->get();
		return view('jadwal.create',['bimbingan'=>$bimbingan]);
	}
	public function strore(Request $request, $id)
	{
		$jadwal = new Jadwal;
        $jadwal->id = $request->id;
        $jadwal->nip= $request->nip;
        $jadwal->jadwal_mulai = $request->jadwal_mulai;
        $jadwal->jadwal_selesai = $request->jadwal_selesai;
        $jadwal->jadwal_bimbingan = $request->jadwal_bimbingan;
        $jadwal->jadwal_waktu_sidang = $request->jadwal_waktu_sidang;
        $jadwal->save();

        return redirect('jadwal')->with('message','profile jadwal updated!');
	}
	public function show($jadwal)
	{
		$jadwal=Jadwal::where('id',$jadwal)->first();
		if(!$jadwal){
			abort(503);
		}
		return view('jadwal.singe')->with('jadwal',$jadwal);
	}
	public function edit($id)
	{
		$bimbingan = Bimbingan::get();

		$jadwal=Jadwal::where('id',$jadwal)->first();
		if(!$jadwal){
			abort(503);
		}		
        return view('jadwal.edit',[
            'jadwal' => $bimbingan,
            'bimbingan' => $jadwal,
        ]);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id' => 'required',
        'nip' => 'required',
        'jadwal_mulai' => 'required',
        'jadwal_selesai' => 'required',
        'jadwal_bimbingan' => 'required',
        'jadwal_waktu_sidang' => 'required',
    ]);
        $jadwal = Jadwal::where('id','=',$id);
        $paramsUpdate =[
        'nip'=> $request->nip,
        'jadwal_mulai' => $request->jadwal_mulai,
        'jadwal_selesai' => $request->jadwal_selesai,
        'jadwal_bimbingan' => $request->jadwal_bimbingan,
        'jadwal_waktu_sidang' => $request->jadwal_waktu_sidang,
        ];
        $jadwal->update($paramsUpdate);
        return redirect('jadwal')->with('message','profile jadwal telah di edit!');
	}
	public function destroy($id)
	{
		$jadwal=Jadwal::where('id','=',$id);
		$jadwal->delete();
		return redirect('jadwal')->with('message','Data telah di dihapus!');
	}
	
}