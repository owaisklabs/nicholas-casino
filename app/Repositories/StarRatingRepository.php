<?php

namespace App\Repositories;

use App\Exceptions\StarRating\AllStarRatingException;
use App\Exceptions\StarRating\CreateStarRatingException;
use App\Exceptions\StarRating\UpdateStarRatingException;
use App\Exceptions\StarRating\DeleteStarRatingException;
use App\Models\StarRating;

abstract class StarRatingRepository implements RepositoryInterface
{
    private $model;

    public function __construct(StarRating $star_rating)
    {
        $this->model = $star_rating;
    }

    public function create(array $data)
    {
        // try 
        // {    
            $star_rating = $this->model->create($data);

            return [
                'star_rating' => $this->find($star_rating->id)
            ];
        // }
        // catch (\Exception $exception) {
        //     return $exception->getMessage();
        // }
    }

    public function delete($id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find star_rating',
                ];
            }

            $this->model->destroy($id);

            return [
                'success' => true,
                'message' => 'Deleted successfully',
                'star_rating' => $temp,
            ];
        }
        catch (\Exception $exception) {
            throw new DeleteStarRatingException($exception->getMessage());
        }
    }

    public function update(array $data, $id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find star_rating',
                ];
            }

            $temp->update($data);
            $temp->save();

            return [
                'success' => true,
                'message' => 'Updated successfully!',
                'star_rating' => $this->find($temp->id),
            ];
        }
        catch (\Exception $exception) {
            throw new UpdateStarRatingException($exception->getMessage());
        }
    }

    public function find($id)
    {
        try 
        {
            $star_rating = $this->model::find($id);
            if(!$star_rating)
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find star_rating',
                ];
            }
            return [
                'success' => true,
                'star_rating' => $star_rating,
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
            throw new AllStarRatingException($exception->getMessage());
        }
    }

    public function paginate($pagination)
    {
        try {
            return $this->model::orderBy('created_at', 'DESC')->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllStarRatingException($exception->getMessage());
        }
    }

    public function search_star_ratings($query)
    {
        // foreign fields

        // search block
        $star_ratings = $this->model::where('content', 'LIKE', '%'.$query.'%')
                        ->orWhere('link', 'LIKE', '%'.$query.'%')
                        ->paginate(env('PAGINATION'));

        return $star_ratings;
    }
} 