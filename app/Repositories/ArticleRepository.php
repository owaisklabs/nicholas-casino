<?php

namespace App\Repositories;

use App\Exceptions\Article\AllArticleException;
use App\Exceptions\Article\CreateArticleException;
use App\Exceptions\Article\UpdateArticleException;
use App\Exceptions\Article\DeleteArticleException;
use App\Models\Article;

abstract class ArticleRepository implements RepositoryInterface
{
    private $model;

    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    public function create(array $data)
    {
        try 
        {    
            $article = $this->model->create($data);

            return [
                'article' => $this->find($article->id)
            ];
        }
        catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find article',
                ];
            }

            $this->model->destroy($id);

            return [
                'success' => true,
                'message' => 'Deleted successfully',
                'article' => $temp,
            ];
        }
        catch (\Exception $exception) {
            throw new DeleteArticleException($exception->getMessage());
        }
    }

    public function update(array $data, $id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find article',
                ];
            }

            $temp->update($data);
            $temp->save();

            return [
                'success' => true,
                'message' => 'Updated successfully!',
                'article' => $this->find($temp->id),
            ];
        }
        catch (\Exception $exception) {
            throw new UpdateArticleException($exception->getMessage());
        }
    }

    public function find($id)
    {
        try 
        {
            $article = $this->model::find($id);
            if(!$article)
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find article',
                ];
            }
            return [
                'success' => true,
                'article' => $article,
            ];
        }
        catch (\Exception $exception) {

        }
    }

    public function all()
    {
        try {
            return $this->model::all();
        }
        catch (\Exception $exception) {
            throw new AllArticleException($exception->getMessage());
        }
    }

    public function paginate($pagination)
    {
        try {
            return $this->model::orderBy('created_at', 'DESC')->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllArticleException($exception->getMessage());
        }
    }

    public function search_articles($query)
    {
        // foreign fields

        // search block
        $articles = $this->model::where('content', 'LIKE', '%'.$query.'%')
                        ->orWhere('link', 'LIKE', '%'.$query.'%')
                        ->paginate(env('PAGINATION'));

        return $articles;
    }
} 