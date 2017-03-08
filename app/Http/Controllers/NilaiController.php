<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Nilai;
//use App\Http\Request;
use App\Http\Controllers\Controllers;

class NilaiController extends Controller
{
	public function index()
	{
		$nilais = DB::table('nilai')->paginate(5);
        return view('nilai.index', ['nilais' => $nilais]);
	}
	public function create()
	{
		return view('nilai.create');
	}
	public function store(Request $request)
	{
		$nilai=new nilai;		
        $nilai->nim= $request->nim;
        $nilai->nilai1 = $request->nilai1;
        $nilai->nilai2 = $request->nilai2;
        $nilai->nilai3 = $request->nilai3;
        $nilai->nilai4 = $request->nilai4;
        $nilai->nilai5 = $request->nilai5;
        $nilai->nilai6 = $request->nilai6;
        $nilai->nilai7 = $request->nilai7;
        $nilai->nilai8 = $request->nilai8;
        $nilai->nilai9 = $request->nilai9;
        $nilai->nilai10 = $request->nilai10;
        $nilai->nilai11= $request->nilai11;
        $nilai->nilai12= $request->nilai12;
        $nilai->nilai13= $request->nilai13;
        $nilai->nilai14= $request->nilai14;
        $nilai->hasil= $request->hasil;
        $nilai->nilai_pembimbing= $request->nilai_pembimbing;
        $nilai->nilai_penguji= $request->nilai_penguji;
        $nilai->jumlah= $request->jumlah;
        $nilai->total= $request->total;

        $nilai->save();
        return redirect('nilai')->with('message','profile nilai updated!');
	}
	public function show($nilai)
	{
        $nilai=Nilai::where('id',$nilai)->first();
		if(!$nilai){
			abort(503);
		}
		return view('nilai.singe')->with('nilai',$nilai);
	}
	public function edit($id)
	{
        $nilai=Nilai::where('id',$nilai)->first();
		if(!$nilai){
			abort(503);
		}
		return view('nilai.edit')->with('nilai',$nilai);
	}
	public function update(Request $request, $id)
	{
        $jumlah=$nilai_penguji+$nilai_pembimbing+$hasil;
        $total=$jumlah/3;
        
		$this->validate($request, [
        'id' => 'required',
        'nim' => 'required',
        'nilai1' => 'required',
        'nilai2' => 'required',
        'nilai3' => 'required',
        'nilai4' => 'required',
        'nilai5' => 'required',
        'nilai6' => 'required',
        'nilai7' => 'required',
        'nilai8' => 'required',
        'nilai9' => 'required',
        'nilai10' => 'required',
        'nilai11' => 'required',
        'nilai12' => 'required',
        'nilai13' => 'required',
        'nilai14' => 'required',
        'hasil' => 'required',
        'nilai_pembimbing' => 'required',
        'nilai_penguji' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
    ]);
		$nilai = nilai::where('id','=',$id);
        $paramsUpdate = [
        'id'=> $request->id,
        'nim'=> $request->nim,
        'nilai1' => $request->nilai1,
        'nilai2' => $request->nilai2,
        'nilai3' => $request->nilai3,
        'nilai4' => $request->nilai4,
        'nilai5' => $request->nilai5,
        'nilai6' => $request->nilai6,
        'nilai7' => $request->nilai7,
        'nilai8' => $request->nilai8,
        'nilai9' => $request->nilai9,
        'nilai10' => $request->nilai10,
        'nilai11' => $request->nilai11,
        'nilai12' => $request->nilai12,
        'nilai13' => $request->nilai13,
        'nilai14' => $request->nilai14,
        'hasil' => $request->hasil,
        'nilai_pembimbing' => $request->nilai_pembimbing,
        'nilai_penguji' => $request->nilai_penguji,
        'jumlah' => $request->jumlah,
        'total' => $request->total,
        ];
        $nilai->update($paramsUpdate);
        return redirect('nilai')->with('message','profile nilai telah di edit!');
	}
	public function destroy($nilai)
	{
		$nilai=nilai::where('id','=',$id);
		$nilai->delete();
		return redirect('nilai')->with('message','Data telah di dihapus!');
	}
	
}