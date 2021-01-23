@extends('admin/structure')

@section('content')
    <div class="container-fluid mt-3">

        @foreach($modules as $module)
            <div class="card mt-2">
                <table class="table mb-0">
                    @foreach($module as $title => $prop)
                        <tr>
                            <th width="8%">{{ ucfirst($title) }}</th>
                            <td>{{ $prop }}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="m-2">
                    <button class="btn btn-primary">Update</button>
                    <button class="btn btn-warning">Disable</button>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </div>
        @endforeach
    </div>
@stop
