<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apparel;
use Hash;


class ApparelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apparels = Apparel::all();
        return view('admin.apparels.index', [
            'apparels' => $apparels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apparels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // when user clicks submit on the create view above
        $request->validate([
        //    'image_name' => 'mimes:jpeg,bmp,png',
            'name' => 'required',
            'series' =>'required|max:500',
            'price' => 'required',
            'refnumber' => 'required',
            'image_name' => 'file|image'
        ]);

        $image_name = $request->file('image_name');
        $filename = $image_name->hashName();

        $path = $image_name->storeAs('public/images', $filename);

        // if validation passes create the new book
        $apparel = new Apparel();
        $apparel->name = $request->input('name');
        $apparel->series = $request->input('series');
        $apparel->price = $request->input('price');
        $apparel->refnumber = $request->input('refnumber');
        $apparel->image_name =  $filename;
        $apparel->save();



        return redirect()->route('admin.apparels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apparel = Apparel::findOrFail($id);

        return view('admin.apparels.show', [
            'apparel' => $apparel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $apparel = Apparel::findOrFail($id);

        return view('admin.apparels.edit', [
            'apparel' => $apparel
        ]);
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

        $apparel = Apparel::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'series' =>'required|max:500',
            'price' => 'required|numeric',
            'refnumber' => 'required|numeric'
        ]);
        $apparel->name = $request->input('name');
        $apparel->series = $request->input('series');
        $apparel->price = $request->input('price');
        $apparel->refnumber = $request->input('refnumber');
        $apparel->save();

        return redirect()->route('admin.apparels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apparel = Apparel::findOrFail($id);
        $apparel->delete();

        return redirect()->route('admin.apparels.index');
    }
}
