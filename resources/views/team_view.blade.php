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
                            <a href="{{url('delete_team')}}/{{$company_user[$i]->id}}" class="deleleEvent" data-toggle="tooltip" title="Delete User">
                                <i class="fa fa-trash text-primary mr-3" style="font-size:24px;"></i>
                            </a>

                            <i class="fa fa-user text-primary ml-2" data-toggle="modal" data-target="#exampleModal{{$i}}" style="font-size:24px;"></i>
            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  
                                  <form action="{{ url('update_team') }}" method="post">
                                        
                                          @csrf
                                          
                                  <input type="hidden" value="{{ $company_user[$i]->id }}" name="id" >
                                  
                                  <div class="modal-body">
                                    <select name="role" class="custom-select">
                                    <option value="admin">Admin</option>
                                    <option value="super_contributor">Super Contributor</option>
                                    <option value="contributor">Contributor</option>
                                </select>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                  
                                  
                                  </form>
                                  
                            </div>
                          </div>
                        </div>
                      
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
