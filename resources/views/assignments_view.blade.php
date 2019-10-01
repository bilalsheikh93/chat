<div id="assis">
                  <div class="border-bottom">
                    <h6 class="ml-4 assin">Assignments</h6>
                  </div>
                    <div class="row">
                        <div class="col-12">
                            @for($i=0; $i < count($data_array['assignments']); $i++)
                                <div class="border-bottom p-3">       
                                    <label class="container-1">{{ $data_array['assignments'][$i]->assignment_name }}
                                        <input type="checkbox" onchange="assignmentAssignUser({{ $data_array['assignments'][$i]->id }})" name="assignments_id[]" value="{{ $data_array['assignments'][$i]->id }}" id="assignments_{{ $data_array['assignments'][$i]->id }}">
                                        <span class="checkmark-1"></span>
                                    </label>
                                    
                                    
                          
                          
                                </div>   
                            @endfor
                        </div>
                    </div>
                  
                        
                        <div class="form-row mt-4 pt-3 pl-0 pr-0 ml-0 mr-0 pb-2 pt-2">
                    <div class="col-md-6 pl-5">
                        <button type="button" class="bnt-20 w-25">Previous</button>
                    </div>
                    <div class="col-md-6 pr-5 text-right">
                        <button type="submit" class="bnt-21 w-25" id="btn-1-2">Next</button>
                    </div>
                  </div>
                  
                      
                  </div>
                  
                  
<script>

    function assignmentAssignUser(id) 
    {
        var user_id = $('#seltd').val();
        var project_id = $('#project_id').val();
        var token = $("input[name='_token']").val();
        // alert(token);
        // return false;
        if ($('#assignments_'+id).is(':checked')) 
        {
            $.ajax({
                url:"{{ url('/add_step_2') }}",
                type: 'POST',
                data:{
                    user_id : user_id,
                    project_id : project_id,
                    assignments_id : id,
                    _token : token,
                  },
                success: function(result)
                {
                    // alert(result);
                    // $("#assignments_value").html(result);
                }

            });
            
            // alert(project_id);
            
            // alert('checked');
            // alert($('#assignments_'+id).val());

        }
        else 
        {
            $.ajax({
                url:"{{ url('/delete_assignment_user') }}",
                type: 'POST',
                data:{
                    user_id : user_id,
                    project_id : project_id,
                    assignments_id : id,
                    _token : token,
                  },
                success: function(result)
                {
                    // alert(result);
                    // $("#assignments_value").html(result);
                }

            });
            
            // alert('unchecked');
            // alert($('#assignments_'+id).val());
        }
    }

</script>

