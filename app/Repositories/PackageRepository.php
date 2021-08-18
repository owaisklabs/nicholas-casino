<?php

namespace App\Repositories;

use App\Exceptions\Package\AllPackageException;
use App\Exceptions\Package\CreatePackageException;
use App\Exceptions\Package\UpdatePackageException;
use App\Exceptions\Package\DeletePackageException;
use App\Models\Package;

abstract class PackageRepository implements RepositoryInterface
{
    private $model;

    public function __construct(Package $package)
    {
        $this->model = $package;
    }

    public function create(array $data)
    {
        try 
        {    
            $package = $this->model->create($data);

            return [
                'package' => $this->find($package->id)
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
                    'message' => 'Could`nt find package',
                ];
            }

            $this->model->destroy($id);

            return [
                'success' => true,
                'message' => 'Deleted successfully',
                'package' => $temp,
            ];
        }
        catch (\Exception $exception) {
            throw new DeletePackageException($exception->getMessage());
        }
    }

    public function update(array $data, $id)
    {
        try {
            if(!$temp = $this->model->find($id))
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find package',
                ];
            }

            $temp->update($data);
            $temp->save();

            return [
                'success' => true,
                'message' => 'Updated successfully!',
                'package' => $this->find($temp->id),
            ];
        }
        catch (\Exception $exception) {
            throw new UpdatePackageException($exception->getMessage());
        }
    }

    public function find($id)
    {
        try 
        {
            $package = $this->model::find($id);
            if(!$package)
            {
                return [
                    'success' => false,
                    'message' => 'Could`nt find package',
                ];
            }
            return [
                'success' => true,
                'package' => $package,
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
            throw new AllPackageException($exception->getMessage());
        }
    }

    public function paginate($pagination)
    {
        try {
            return $this->model::orderBy('created_at', 'DESC')->paginate($pagination);
        }
        catch (\Exception $exception) {
            throw new AllPackageException($exception->getMessage());
        }
    }

    public function search_packages($query)
    {
        // foreign fields

        // search block
        $packages = $this->model::where('title', 'LIKE', '%'.$query.'%')
                        ->orWhere('amount', 'LIKE', '%'.$query.'%')
                        ->paginate(env('PAGINATION'));

        return $packages;
    }
} 