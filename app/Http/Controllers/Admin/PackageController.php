<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PackageService;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    private $packageService;

    public function __construct(PackageService $packageService)
    {
        $this->packageService = $packageService;
        $this->middleware('auth');
    }

    public function index()
    {
        $packages = $this->packageService->paginate(env('PAGINATE'));
        return view('admin.package.package', compact('packages'));
    }

    public function all()
    {
        return $this->packageService->all();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'amount' => 'required',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // create package
        $package = ($this->packageService->create($request->all()))['package']['package'];

        return redirect()->back();
    }

    public function show($id)
    {
        if(array_key_exists('id', $_REQUEST)){
            return $this->packageService->find($_REQUEST['id']);
        }
        return $this->packageService->find($id);
    }

    public function update(Request $request, $id)
    {
        $id = $request->hidden;
        $package = ($this->show($id))['package'];

        $validator = Validator::make($request->all(), [
            'title' => 'sometimes',
            'amount' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        $package = ($this->packageService->update($request->all(), $id))['package']['package'];

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;

        $this->packageService->delete($id);

        return redirect()->back();
    }

    public function search_packages(Request $request)
    {
        $query = $request['query'];

        $packages = $this->packageService->search_packages($query);

        return view('admin.package.package', compact('packages'));
    }
}