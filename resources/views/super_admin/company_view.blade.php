@extends('layouts.superadminapp')

@section('content')

@extends('layouts.superadminnav')
<style>
    .fa{
        cursor: pointer;
    }
</style>

<div class="contianer-fluid">
    <div class="row m-4">
        <div class="col-md-12 p-4" style="background:white;">
            <table class="table text-center table-responsive-md">
                <thead>
                    <tr>
                        <th scope="col">Company Id</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Attached User E-mail</th>
                        <th scope="col">Admin Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for($j=0; $j < count($all_companies); $j++)
                        <tr>
                            <th scope="row">{{ $all_companies[$j]->id }}</th>
                            <td>{{ $all_companies[$j]->company_name }}</td>
                            <td>{{ $all_companies[$j]->email }}</td>
                            <td>{{ $all_companies[$j]->name }}</td>
                            <td>
                                <i class="fa fa-trash text-danger" style="font-size:22px;"></i>
                                <i class="fa fa-times text-info" style="font-size:22px;"></i>
                                <i class="fa fa-check text-success" style="font-size:22px;"></i>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            
             <?php echo $all_companies->render(); ?>
        </div>
    </div>
</div>
@endsection