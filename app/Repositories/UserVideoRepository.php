<?php

namespace App\Repositories;

use App\Exceptions\UserVideo\AllUserVideoException;
use App\Exceptions\UserVideo\CreateUserVideoException;
use App\Exceptions\UserVideo\UpdateUserVideoException;
use App\Exceptions\UserVideo\DeleteUserVideoException;
use App\Models\UserVideo;

abstract class UserVideoRepository implements RepositoryInterface
{
    private $model;

    public function __construct(UserVideo $user_video)
    {
        $this->model = $user_video;
    }

    public function create(array $data)
    {
        try 
        {    
            $user_video = $this->model->create($data);

            return [
                'user_video' => $this->find($user_video->id)
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
                    'message' => 'Could`nt find user_video',
                ];
            }

            $this->model->destroy($id);

            return [
                'success' => true,
                'message' => 'Deleted successfully',
                'user_video' => $temp,
            ];
        }
        catch (\Exception $exception) {
            throw new DeleteUserVideoException($exception->getMessage());
        }
    }

    public function update(array $data, $id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find user_video',
                ];
            }

            $temp->update($data);
            $temp->save();

            return [
                'success' => true,
                'message' => 'Updated successfully!',
                'user_video' => $this->find($temp->id),
            ];
        }
        catch (\Exception $exception) {
            throw new UpdateUserVideoException($exception->getMessage());
        }
    }

    public function find($id)
    {
        try 
        {
            $user_video = $this->model::find($id);
            if(!$user_video)
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find user_video',
                ];
            }
            return [
                'success' => true,
                'user_video' => $user_video,
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
            throw new AllUserVideoException($exception->getMessage());
        }
    }

    public function paginate($pagination)
    {
        try {
            return $this->model::orderBy('created_at', 'DESC')->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllUserVideoException($exception->getMessage());
        }
    }

    public function search_user_videos($query)
    {
        // foreign fields

        // search block
        $user_videos = $this->model::where('content', 'LIKE', '%'.$query.'%')
        ->orWhere('link', 'LIKE', '%'.$query.'%')
        ->paginate(env('PAGINATION'));

        return $user_videos;
    }
} 