<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Bimbingan;
use App\Dosen;
use App\mahasiswa;
//use App\Http\Request;
use App\Http\Controllers\Controllers;

class BimbinganController extends Controller
{
	public function index()
	{
		$bimbingans = DB::table('bimbingan')
        ->leftJoin('dosen', 'bimbingan.dosen_id', '=', 'dosen.nip')
        ->leftJoin('mahasiswa', 'bimbingan.mahasiswa_id', '=', 'mahasiswa.id')
        ->select('*')
		->paginate(5);
        return view('bimbingan.index', ['bimbingans' => $bimbingans]);
	}
	public function create()
	{
		$mahasiswa= DB::table('mahasiswa')->get();
		$dosen= DB::table('dosen')->get();
        return view('bimbingan.create',['mahasiswa'=>$mahasiswa,'dosen'=>$dosen]);
	}
	public function store(Request $request)
	{
		$bimbingan = new Bimbingan;
        $bimbingan->id = $request->id;
        $bimbingan->dosen_id = $request->dosen_id;
        $bimbingan->mahasiswa_id = $request->mahasiswa_id;
        $bimbingan->jadwal_bimbingan = $request->jadwal_bimbingan;
        $bimbingan->save();

        return redirect('bimbingan')->with('message','profile bimbingan updated!');
	}
	public function show($bimbingan)
	{
		$bimbingan=Bimbingan::where('id',$bimbingan)->first();
		if(!$bimbingan){
			abort(503);
		}
		return view('bimbingan.singe')->with('bimbingan',$bimbingan);
	}
	public function edit($id)
	{
		$dosen = Dosen::get();
		$mahasiswa = Mahasiswa::get();

        $bimbingan=Bimbingan::where('id',$bimbingan)->first();
        if(!$bimbingan){
            abort(503);
        }
        return view('bimbingan.edit',[
            'bimbingan' => $bimbingan,
            'dosen' => $dosen,
            'mahasiswa' => $mahasiswa,
        ]);
	}
	public function update(Request $request, $id)
	{
		$this->validate($request, [
        'id' => 'required',
        'dosen_id' => 'required',
        'mahasiswa_id' => 'required',
        'jadwal_bimbingan' => 'required',        
    ]);
		$bimbingan = Bimbingan::where('id','=',$id);
        $paramsUpdate =[
        'dosen_id' => $request->dosen_id,
        'mahasiswa_id' => $request->mahasiswa_id,
        'jadwal_bimbingan' => $request->jadwal_bimbingan,
        ];        
        $bimbingan->update($paramsUpdate);
        return redirect('bimbingan')->with('message','profile bimbingan telah di edit!');
	}
	public function destroy($id)
	{
		$bimbingan=Bimbingan::where('id','=',$id);
		$bimbingan->delete();
		return redirect('bimbingan')->with('message','Data telah di dihapus!');
	}
	
}