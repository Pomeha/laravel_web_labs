@extends('main')

@section('content')
    <br>
    <br>
<div class="blokkok panel panel-primary">


    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <div class="panel-body">




        <h3>Import File Form:</h3>

        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="{{ URL::to('importCVS') }}" class="form-horizontal" method="post" enctype="multipart/form-data">


            <input type="file" name="import_file" />

            {{ csrf_field() }}

            <br/>


            <button class="btn btn-primary">Import CSV or Excel File</button>


        </form>

        <br/>




        <h3>Import File From Database:</h3>

        <div style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;">

            <a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success btn-lg">Download Excel xls</button></a>

            <a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success btn-lg">Download Excel xlsx</button></a>

            <a href="{{ url('downloadExcel/csv') }}"><button class="btn btn-success btn-lg">Download CSV</button></a>

        </div>


    </div>

</div>

@endsection
