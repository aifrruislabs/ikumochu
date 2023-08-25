<?php

namespace App\Http\Controllers;

use App\Models\Dataset;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //Datasets
    public function datasets()
    {
        $datasets = Dataset::orderBy('created_at', 'DESC')->get();

        return view("pages.datasets", [
            'datasets' => $datasets
        ]);
    }

    //Dataset Contexts
    public function dataset_contexts()
    {
        return view("pages.dataset_contexts");
    }

    //Process Dataset
    public function process_dataset()
    {
        return view("pages.process_dataset");
    }

    //Dashboard
    public function dashboard()
    {
        return view("dashboard");
    }

    //Index
    public function index()
    {
        return view("index");
    }
}
