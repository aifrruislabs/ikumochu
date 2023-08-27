@extends ("layouts.app")

@section("pageTitle") {{ "Dataset" }} @endsection

@section("content")


<div class="">

    <div class="col-md-12">

        <div class="row">
            <div class="col-md-4">
                <h4>Datasets (0)</h4>
            </div>

            <div class="col-md-8 float-right">
                <i class="fa fa-plus" aria-hidden="true" data-toggle="modal" data-target="#addNewDatasetModal"></i>
            </div>
        </div>
        <hr/>

        <table class="table table-bordered">
            <tr>
                <td>ID</td>
                <td>Dataset Title</td>
                <td>Dataset Info</td>
                <td>Columns</td>
                <td>Contexts</td>
                <td>Results</td>
            </tr>

            @php
                $id = 0
            @endphp

            @foreach($datasets as $dataset)
              @php
                $cols_data = "";
                $cols = json_decode($dataset->dataset_columns);

                foreach ($cols as $col) {
                  $cols_data .= "<br/>" . $col;
                }
              @endphp
            <tr>
              <td>{{ $id += 1 }}</td>
              <td>{{ $dataset->dataset_name }}</td>
              <td>{{ $dataset->dataset_info }}</td>
              <td>
                {!! $cols_data !!}
              </td>
              <td>
                <button class="btn btn-success form-control">Contexts (0)</button>
              </td>
              <td>
                <button class="btn btn-success form-control">Results</button>
              </td>
          </tr>
            @endforeach
        </table>
    </div>

</div>


  <!-- Add New Dataset Modal -->
  <div class="modal fade" id="addNewDatasetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add New Dataset</h4>
        </div>
        <div class="modal-body">  
         <form action="{{ route('upload-dataset') }}" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Dataset Name <span class="color-red">*</span></td>
                    <td><input type="text" name="dataset_name" class="form-control"></td>
                </tr>

                <tr>
                    <td>Dataset Info</td>
                    <td><input type="text" name="dataset_info" class="form-control"></td>
                </tr>

                <tr>
                    <td>Dataset CSV</td>
                    <td><input type="file" name="dataset_csv" class="form-control"></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="_token" value="{{ Session::token() }}"></td>
                    <td><input type="submit" class="btn btn-primary form-control" value="Add Dataset"></td>
                </tr>
            </table>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


@endsection()