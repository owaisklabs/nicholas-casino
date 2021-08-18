<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ArticleService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Storage;

class ArticleController extends Controller
{
    private $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = $this->articleService->paginate(env('PAGINATE'));
        return view('admin.article.article', compact('articles'));
    }

    public function all()
    {
        return $this->articleService->all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'sometimes',
            'content' => 'required',
            'link' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // image work
        $req = Arr::except($request->all(),['image']);
        // image
        if($request->image){
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_articles')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }

        // create article
        $article = ($this->articleService->create($req))['article']['article'];

        return redirect()->back();
    }

    public function show($id)
    {
        if(array_key_exists('id', $_REQUEST)){
            return $this->articleService->find($_REQUEST['id']);
        }
        return $this->articleService->find($id);
    }

    public function update(Request $request, $id)
    {
        $id = $request->hidden;
        $article = ($this->show($id))['article'];

        $validator = Validator::make($request->all(), [
            'image' => 'sometimes',
            'content' => 'sometimes',
            'link' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);


        // image work
        $req = Arr::except($request->all(),['image']);

        // image
        if($request->image){
            Storage::disk('public_articles')->delete($article->image);
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            Storage::disk('public_articles')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }

        $article = ($this->articleService->update($req, $id))['article']['article'];

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        $id = $request->hidden;

        $this->articleService->delete($id);

        return redirect()->back();
    }

    public function search_articles(Request $request)
    {
        $query = $request['query'];

        $articles = $this->articleService->search_articles($query);

        return view('admin.article.article', compact('articles'));
    }
}