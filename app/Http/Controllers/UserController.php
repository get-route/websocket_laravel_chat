<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use function Webmozart\Assert\Tests\StaticAnalysis\readable;
use function Webmozart\Assert\Tests\StaticAnalysis\resource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {
       if(Session::get('user') != 'Ben'){
           abort(404);
       }
       return 'Hello';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        if ($request->header('ExampleHeader') !='Example'){
//            abort(404);
//        }
//        return response()->json([
//           'status'=>'success',
//        ])
//            ->withHeaders([
//                'ResponseHeader'=>'Responce'
//            ]);

        Storage::put('public',$request->picture);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
