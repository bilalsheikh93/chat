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
                        <th scope="col">Transaction Id</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Transaction Type</th>
                        <th scope="col">Admin Registered E-mail</th>
                        <th scope="col">Admin Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Transaction Status(In progress/Completed)</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><i class="fa fa-exchange text-secoundary border rounded-circle p-1" style="font-size:22px;"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                         <td><i class="fa fa-exchange text-secoundary border rounded-circle p-1" style="font-size:22px;"></i></td>                     
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                         <td><i class="fa fa-exchange text-secoundary border rounded-circle p-1" style="font-size:22px;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection