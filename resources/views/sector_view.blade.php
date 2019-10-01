<div class="form-row text-center">
                        <div class="col-md-2 pr-0 text-left">
                            <label class="mt-3 ml-0 mr-0" style="font-size: 13px;">Target Sector:</label>
                        </div>
                        <div class="col-md-9 pl-2">
                          <select class="custom-select browser-default" required name="target_sector">
                            <option value="">Please Select</option>
                            @for($k=0; $k < count($data_array['sector_option']); $k++)
                                <option value="{{ $data_array['sector_option'][$k]->id }}" id="{{ $data_array['sector_option'][$k]->sector_option_name }}">{{ $data_array['sector_option'][$k]->sector_option_name }}</option>
                            @endfor
                          </select>
                          <div class="invalid-feedback text-left">
                            Please select one Option
                          </div>
                        </div>
                      </div>
                      