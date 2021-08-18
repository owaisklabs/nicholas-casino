<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Validator;
use Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Storage;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->userService->paginate('15');
        return view('admin.user.user', compact('users'));
    }

    public function index_kickers()
    {
        $users = $this->userService->paginate_kickers(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }

    public function index_punters()
    {
        $users = $this->userService->paginate_punters(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }

    public function index_long_snappers()
    {
        $users = $this->userService->paginate_long_snappers(env('PAGINATE'));
        return view('admin.user.user', compact('users'));
    }

    public function store(Request $request)
    {
        // dd('yes');
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'password' => 'required|string|min:4',
            'email' => 'required|unique:users,email',

        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        $this->userService->create($request->all());

        return redirect()->back();
    }

    public function show($id)
    {
        if(isset($_REQUEST['id'])){
            $id = $_REQUEST['id'];
        }
        return $this->userService->find($id);

        // return view('admin.user.profile');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $id = $request->hidden;

        if(!(auth()->user()->id == $id || auth()->user()->type == "Admin"))
        {
            return response()->json([
                'success' => FALSE,
                'message' => 'Not allowed.'
            ]);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'last_name' => 'sometimes|string|max:255',
            'user_name' => 'sometimes|string|max:255',
            'password' => 'sometimes',
            'email' => 'sometimes|unique:users,email,'.$request->hidden,
            'isKicker'   =>'sometimes',
            'isPunter' =>'sometimes',
            'isLongSnapper'=>'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        if($request->password == NULL){
            $request = Arr::except($request,['password']);
        }

        $this->userService->update($request->all(), $id);

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;

        $this->userService->delete($id);

        if($request->user_type == 'rider'){
            return $this->getRiders($request);
        }

        return redirect()->back();
    }

    public function search_users(Request $request)
    {
        $query = $request['query'];
        $users = $this->userService->search_users($query);
        return view('admin.user.user', compact('users'));
    }

    public function profile_builder(Request $request, $id)
    {
        $user = ($this->userService->find($id))['user'];

        $req = Arr::except($request->all(),['image']);
        if(!(isset($req['password']))){
            $req = Arr::except($req, ['password']);
        }

        // image
        if($request->image){
            if($user->image){
                Storage::disk('public_users')->delete($user->image);
            }
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_users')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }

        // rating
        if(isset($req['rating'])){
            $req['rating'] = $req['rating'] / 2;
        }

        $this->userService->update($req, $id);

        return redirect()->back();
    }
}
