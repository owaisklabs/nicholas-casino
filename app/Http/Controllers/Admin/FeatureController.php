<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FeatureService;
use Illuminate\Support\Facades\Validator;

class FeatureController extends Controller
{
    private $featureService;

    public function __construct(FeatureService $featureService)
    {
        $this->featureService = $featureService;
        $this->middleware('auth');
    }

    public function index()
    {
        $features = $this->featureService->paginate(env('PAGINATE'));
        return view('admin.feature.feature', compact('features'));
    }

    public function all()
    {
        return $this->featureService->all();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'content' => 'required'
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // create feature
        $feature = ($this->featureService->create($request->all()))['feature']['feature'];

        return redirect()->back();
    }

    public function show($id)
    {
        if(array_key_exists('id', $_REQUEST)){
            return $this->featureService->find($_REQUEST['id']);
        }
        return $this->featureService->find($id);
    }

    public function update(Request $request, $id)
    {
        $id = $request->hidden;
        $feature = ($this->show($id))['feature'];

        $validator = Validator::make($request->all(), [
            'content' => 'sometimes'
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        $feature = ($this->featureService->update($request->all(), $id))['feature']['feature'];

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;

        $this->featureService->delete($id);

        return redirect()->back();
    }

    public function search_features(Request $request)
    {
        $query = $request['query'];

        $features = $this->featureService->search_features($query);

        return view('admin.feature.feature', compact('features'));
    }
}