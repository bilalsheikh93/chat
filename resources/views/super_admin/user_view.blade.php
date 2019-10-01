@extends('layouts.superadminapp')

@section('content')

@extends('layouts.superadminnav')


<div class="contianer-fluid">
    <div class="row m-4">
        <div class="col-md-12 p-4" style="background:white;">
            <table class="table text-center table-responsive-md">
                <thead>
                    <tr>
                        <th scope="col">User No</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">E-mail Address</th>
                        <th scope="col">Role</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @for($i=0; $i < count($all_users); $i++)
                        <tr>
                            <th scope="row">{{ $i+1 }}</th>
                            <td>{{ $all_users[$i]->name }}</td>
                            <td>{{ $all_users[$i]->email }}</td>
                            <td>{{ $all_users[$i]->role }}</td>
                            <td>{{ $all_users[$i]->company_name }}</td>
                            <td>
                                <i class="fa fa-trash text-danger" style="font-size:22px;"></i>
                                <i class="fa fa-times text-info" style="font-size:22px;"></i>
                                <i class="fa fa-check text-success" style="font-size:22px;"></i>
                            </td>
                        </tr>
                    @endfor
                    
                </tbody>
            </table>
            
            <?php echo $all_users->render(); ?>
        </div>
    </div>
</div>





@endsection