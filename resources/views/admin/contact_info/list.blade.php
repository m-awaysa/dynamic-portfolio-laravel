@include('layouts.header')

 <!--  button add skill  -->
<form action="{{route('contact_info.add')}}" method="get">
    @csrf
    <button  class="btn btn-primary"type="submit"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"></path>
                    </svg>
      Add Info
    </button>
</form>

  <!--  skill list form  -->
<div class="  bg-light ">
        <table class=" table container " id="category">
                <thead>
                    <tr>
                      <th>Title</th>
                      <th>Contact Info</th>
                      <th>Icon</th>
                      <th>visibility</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                </thead>  

            @if ($contact_infos->count())

                @foreach($contact_infos as $contact_info)
                    <tr>
                        <td>{{$contact_info->title}}</td>
                        <td>{{$contact_info->contact_info }}</td>
                        <td> <?php echo $contact_info->icon  ?></td>
                        <td> <?php if($contact_info->visibility) {echo "true";}  else   echo "false"   ?></td>
                        <td>
                            <!--  edit button form  -->
                            <form action="{{route('contact_info.edit', $contact_info)}}" method="get">
                                  @csrf
                              <button  class="btn btn-primary" type="submit" >
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                  </svg>
                              Edit
                              </button>
                            </form>
                        </td>

                        <td>  
                              <!--  delete button form  -->
                          <a  class="btn btn-danger" href="#" onclick="confirmDelete( '<?php echo route('contact_info.delete',$contact_info) ?>' )" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                      <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                           Delete
                          </a>   
                              
                          </td>
                    </tr>




                @endforeach

                {{$contact_infos-> links()}}

                  <!-- Modal -->
                  <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="deletemodal" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p> Deleting a project here means an actual delete from database,are you sure?</p>
                              </div>
                              <div class="modal-footer">
                                <button id="cancelbutton" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>


                                  @csrf
                                
                                <button type="submit" id="confirmdelete" class="btn btn-primary">Sure</button>


                                  </form> 

                              </div>
                            </div>
                          </div>
                  </div>


            @else
               <p class="text-danger justify-content-md-end">There is no Skills!! </p>
            @endif
        </table>
    </div>
</div>



@include('layouts.footer')
