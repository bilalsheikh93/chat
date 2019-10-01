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
                        <th scope="col">Payment Id</th>
                        <th scope="col">Admin Registered E-mail Address</th>
                        <th scope="col">Admin Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">License Key</th>
                        <th scope="col">License Key Type</th>
                        <th scope="col">Payment Date</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Method of Payment</th>
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
                        <td>Thornton</td>
                        <td>@twitter</td>
                        <td>Jacob</td>
                        <td><i class="fa fa-retweet text-success" style="font-size:22px;"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Thornton</td>  
                        <td>@twitter</td>
                        <td>Jacob</td>
                        <td><i class="fa fa-retweet text-success" style="font-size:22px;"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Thornton</td>
                        <td>@twitter</td>
                        <td>Jacob</td>
                        <td><i class="fa fa-retweet text-success" style="font-size:22px;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection