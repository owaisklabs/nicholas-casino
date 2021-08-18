<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserVideoService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Storage;

class UserVideoController extends Controller
{
    private $userVideoService;

    public function __construct(UserVideoService $userVideoService)
    {
        $this->userVideoService = $userVideoService;
        $this->middleware('auth');
    }

    public function index()
    {
        $user_videos = $this->userVideoService->paginate(env('PAGINATE'));
        return view('admin.user_video.user_video', compact('user_videos'));
    }

    public function all()
    {
        return $this->userVideoService->all();
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'title' => 'required',
            'category' => 'required',
            'link' => 'required',
            'thumbnail' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // image work
        $req = Arr::except($request->all(),['thumbnail']);
        // thumbnail
        if($request->thumbnail){
            $thumbnail = $request->thumbnail;
            $thumbnail = str_replace((explode(',', $thumbnail)[0] . ','), '', $thumbnail);
            $thumbnail = str_replace(' ', '+', $thumbnail);
            $imageName = Str::random(10).'.png';
            \File::put(public_path('img/thumbnails') . '/' . $imageName, base64_decode($thumbnail));
            $req['thumbnail'] = $imageName;
        }

        // create user_video
        $user_video = ($this->userVideoService->create($req))['user_video']['user_video'];

        return $user_video;
    }

    public function show($id)
    {
        if(array_key_exists('id', $_REQUEST)){
            return $this->userVideoService->find($_REQUEST['id']);
        }
        return $this->userVideoService->find($id);
    }

    public function update(Request $request, $id)
    {
        // $id = $request->hidden;
        $user_video = ($this->show($id))['user_video'];

        $validator = Validator::make($request->all(), [
            'user_id' => 'sometimes',
            'title' => 'sometimes',
            'category' => 'sometimes',
            'link' => 'sometimes',
            'thumbnail' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // image work
        $req = Arr::except($request->all(),['image']);

        // thumbnail
        if($request->thumbnail){
            Storage::disk('public_thumbnails')->delete($user_video->thumbnail);
            $thumbnail = $request->thumbnail;
            $thumbnail = str_replace((explode(',', $thumbnail)[0] . ','), '', $thumbnail);
            $thumbnail = str_replace(' ', '+', $thumbnail);
            $imageName = Str::random(10).'.png';
            \File::put(public_path('img/thumbnails') . '/' . $imageName, base64_decode($thumbnail));
            $req['thumbnail'] = $imageName;
        }

        $user_video = ($this->userVideoService->update($req, $id))['user_video']['user_video'];

        return $user_video;
    }

    public function destroy(Request $request, $id)
    {
        $user_video = $this->show($id)['user_video'];
        Storage::disk('public_thumbnails')->delete($user_video->thumbnail);
        $this->userVideoService->delete($id);

        return redirect()->back();
    }

    public function search_user_videos(Request $request)
    {
        $query = $request['query'];

        $user_videos = $this->userVideoService->search_user_videos($query);

        return view('admin.user_video.user_video', compact('user_videos'));
    }
}