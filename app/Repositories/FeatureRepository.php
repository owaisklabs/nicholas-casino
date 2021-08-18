<?php

namespace App\Repositories;

use App\Exceptions\Feature\AllFeatureException;
use App\Exceptions\Feature\CreateFeatureException;
use App\Exceptions\Feature\UpdateFeatureException;
use App\Exceptions\Feature\DeleteFeatureException;
use App\Models\Feature;

abstract class FeatureRepository implements RepositoryInterface
{
    private $model;

    public function __construct(Feature $feature)
    {
        $this->model = $feature;
    }

    public function create(array $data)
    {
        try 
        {    
            $feature = $this->model->create($data);

            return [
                'feature' => $this->find($feature->id)
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
                    'message' => 'Could`nt find feature',
                ];
            }

            $this->model->destroy($id);

            return [
                'success' => true,
                'message' => 'Deleted successfully',
                'feature' => $temp,
            ];
        }
        catch (\Exception $exception) {
            throw new DeleteFeatureException($exception->getMessage());
        }
    }

    public function update(array $data, $id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find feature',
                ];
            }

            $temp->update($data);
            $temp->save();

            return [
                'success' => true,
                'message' => 'Updated successfully!',
                'feature' => $this->find($temp->id),
            ];
        }
        catch (\Exception $exception) {
            throw new UpdateFeatureException($exception->getMessage());
        }
    }

    public function find($id)
    {
        try 
        {
            $feature = $this->model::find($id);
            if(!$feature)
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find feature',
                ];
            }
            return [
                'success' => true,
                'feature' => $feature,
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
            throw new AllFeatureException($exception->getMessage());
        }
    }

    public function paginate($pagination)
    {
        try {
            return $this->model::orderBy('created_at', 'DESC')->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllFeatureException($exception->getMessage());
        }
    }

    public function search_features($query)
    {
        // foreign fields

        // search block
        $features = $this->model::where('content', 'LIKE', '%'.$query.'%')
                        ->paginate(env('PAGINATION'));

        return $features;
    }
} 