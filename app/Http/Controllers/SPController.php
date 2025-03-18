<?php

namespace App\Http\Controllers;

use App\Models\SP;
use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Storage;

class SPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = SP::all();
        return view('auth.SP.index',['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sp = SP::all();
        return view('auth.SP.create',['sp'=>$sp]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        try {
            DB::beginTransaction();
            if($file = $request->has('path')){
                $file = $request->path;
                $filename = time().$file->getClientOriginalName();
                $filepath = public_path('SP');  
                $file->move($filepath, $filename);
                
                $sp = SP::create([
                    'path' => $filename,
                ]);
            }
        }
        catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
        }

        DB::commit();
        $request->session()->flash('success','Post Created Successfully');
        return to_route('SP.index');
    }

    /**
     * Display the specified resource.
     */
    public function download(string $id)
    {
        $path = SP::where("id", $id)->value("path");
        // $filepath = public_path('SP').$path;
        // return Response::download(public_path('SP').'/'.$path);
        return response()->download(public_path('SP').'/'.$path);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = SP::findOrFail($id);
        $user->delete();

        return redirect('auth/SP')->with('Success', 'Data berhasil dihapus');
    }
}
