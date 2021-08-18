<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\StarRatingService;
use Illuminate\Support\Facades\Validator;

class StarRatingController extends Controller
{
    private $starRatingService;

    public function __construct(StarRatingService $starRatingService)
    {
        $this->starRatingService = $starRatingService;
        $this->middleware('auth');
    }

    public function index()
    {
        $star_ratings = $this->starRatingService->paginate(env('PAGINATE'));
        return view('admin.star_rating.star_rating', compact('star_ratings'));
    }

    public function all()
    {
        return $this->starRatingService->all();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'club_name' => 'required',
            'last_attended' => 'required',
            'rating' => 'required',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // create star_rating
        $star_rating = ($this->starRatingService->create($request->all()))['star_rating']['star_rating'];

        return $star_rating;
    }

    public function show($id)
    {
        if(array_key_exists('id', $_REQUEST)){
            return $this->starRatingService->find($_REQUEST['id']);
        }
        return $this->starRatingService->find($id);
    }

    public function update(Request $request, $id)
    {
        // $id = $request->hidden;
        $star_rating = ($this->show($id))['star_rating'];

        $validator = Validator::make($request->all(), [
            'user_id' => 'sometimes',
            'club_name' => 'sometimes',
            'last_attended' => 'sometimes',
            'rating' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        $star_rating = ($this->starRatingService->update($request->all(), $id))['star_rating']['star_rating'];

        return $star_rating;
    }

    public function destroy(Request $request, $id)
    {
        $this->starRatingService->delete($id);

        return redirect()->back();
    }

    public function search_star_ratings(Request $request)
    {
        $query = $request['query'];

        $star_ratings = $this->starRatingService->search_star_ratings($query);

        return view('admin.star_rating.star_rating', compact('star_ratings'));
    }
}