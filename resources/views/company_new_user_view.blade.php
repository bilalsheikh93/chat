@extends('layouts.app')

@section('content')

@extends('layouts.nav')

<div class="container-fluid">
  <div class="row m-4">
    <div class="col-md-9 pb-5 m-auto rounded" style="background-color:white;">
        <h5 class="font-weight-bold text-dark pt-3 text-center pera-7 m-auto" style="font-size:15px;">TEAM SETTINGS</h5>
    
      <div>
          
          @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            <p style="color:red; margin:15px;">{{ Session::get('message') }}</p>
        </div>
        @endif

          
          <h5 class="text-dark pt-5 pl-3 pera-7" style="font-size:13px;">Team Members</h5>
      </div>
      <div>
        <table class="table">
            
            <tbody>
                
                @for($i=0; $i < count($company_user); $i++)
                    <tr class="border-top-0">
                        <td scope="row" class="border-top-0">
                            @if($company_user[$i]->image == NULL )
                                <img style="width:50px" src="{{ URL('/public') }}/public_site_assets/img/profile_img.png">
                            @else
                                <img src="{{ URL('/public') }}/user_images/{{ $company_user[$i]->image }}" style="width:50px" alt="">
                            @endif
                        </td>
                        
                        <td class="border-top-0">{{ $company_user[$i]->name }}</td>
                        <td class="border-top-0">{{ $company_user[$i]->email }}</td>
                        <?php 
                            if($company_user[$i]->role == 'admin' || $company_user[$i]->role == 'Administrator')
                            {
                                $role = "Admin";
                            }
                            elseif($company_user[$i]->role == 'contributor')
                            {
                                $role = "Contributor";
                            }
                            elseif($company_user[$i]->role == 'super_contributor')
                            {
                                $role = "Super Contributor";
                            }
                            else
                            {
                                $role = "Other";
                            }
                        ?>
                        
                        <td class="border-top-0">{{ $role }}</td>
                        <td class="border-top-0">
                            <a href="{{url('approve_user')}}/{{$company_user[$i]->id}}" class="deleleEvent" data-toggle="tooltip" title="Accept User">
                                <i class="fa fa-eye" style="font-size:24px;"></i>
                            </a>

                        </td>
                            
                            
                            
                        </tr>
                @endfor
                
            </tbody>
          </table>
          
          <?php echo $company_user->render(); ?>
          
      </div>
    </div>
  </div>
</div>

<script>
    
 $(function(){
         $(".deleleEvent").click(function(){
            return confirm("Do you want to delete this ?");
        });
    });
   
</script>
 
@endsection
