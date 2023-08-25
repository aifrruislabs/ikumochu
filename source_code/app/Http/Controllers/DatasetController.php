<?php

namespace App\Http\Controllers;


use App\Models\Dataset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatasetController extends Controller
{
    //upload_dataset
    public function upload_dataset(Request $request)
    {
        //Inputs Validation
        $this->validate($request,
                [
                    'dataset_name' => 'required',
                    'dataset_info' => 'required',
                ]);

        $newDataset = new Dataset();
        $newDataset->user_id = 1;
        $newDataset->dataset_name = $request->dataset_name;
        $newDataset->dataset_info = $request->dataset_info;
        $newDataset->dataset_columns = "{}";

        if ($newDataset->save()) {
            //Upload Dataset CSV File
            $file = $request->file('dataset_csv');
            $filename = $newDataset->id . '.' . $file->extension();
            $file->storeAs('uploads', $filename);

            $file_path = storage_path('app/uploads/'. $filename);

            //Read and get CSV Columns for Data Types Assignment
            $csv_file = fopen($file_path, "r");

            $columns_arr = array();

            if ($csv_file) {
                $columns = fgetcsv($csv_file);
            
                if ($columns) {
                    foreach ($columns as $column) {
                        $columns_arr[] = $column; 
                    }
                }
                
                fclose($csv_file);
            }
            
            //Update Columns
            $updateColumns = Dataset::find($newDataset->id);
            $updateColumns->dataset_columns = json_encode($columns_arr);
            $updateColumns->update();

            //Return to Datasets Page
            $message = "New Dataset Have Been Added Successfully";
            return redirect()->back()->with(['successMessage' => $message]);
        }else {
            $message = "Failed to Add New Dataset. Please Try Again";
            return redirect()->back()->with(['errorMessage' => $message]);
        }
    }
}
