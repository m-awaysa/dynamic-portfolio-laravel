@include('layouts.header')

<div class="d-flex mt-5 row  container ml-sm-5 h-20">
  <!--  add button -->
  <div >
        <form action="{{route('project.add')}}" method="get">
           <button  class="btn btn-primary" type="submit"  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"></path>
                    </svg>
                    Add Project
           </button>
        </form>
        <!--  delete an unknown file -->
        @if(session('status'))
          <div class="text-danger">
           {{session('status')}}
          </div>
        @endif
  </div>

  <div class="row d-flex h-50  bg-light">
      @if ($projects->count())
        @foreach($projects as $project)
          <!--  show the project as cards -->
          <div class="card m-2 shadow border border-0 h-50 pb-1" style="width: 18rem;">
              <img src="{{ asset('images/'.$project->photo) }}" class="card-img-top mt-1" width="300px" height="200px" alt="image not found">
                <div class="card-body">
                        <h5 class="card-title">{{$project->project_title}}</h5>
                        <p class="card-text  admin container" >{{$project->project_description}}.</p>


                        <!--  dropdown skills  -->
                        <div class="dropdown d-flex row">
                            <a class="btn btn-light dropdown-toggle shadow rounded rounded-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Skills required
                            </a>
                            <ul class="dropdown-menu">
                              @if ($project->skills->count())
                              @foreach($project->skills as $skillg)
                            
                              <li><p class="dropdown-item">{{$skillg->skill_name}}</p></li>
                              @endforeach
                              @else
                              <li><p class="dropdown-item text-danger">No skill requires</p></li>
                              @endif
                            </ul>
                        </div>
    


                        <div class="  m-1 mt-1  bg-light  d-block  ">
                            <!--  dive button  --> 
                            <a href="{{$project->project_link}}" 
                            class="btn btn-md btn-dark col-4 rounded-0 text-warning ms-4 me-4">Dive</a>
                          
                            <!--  delete button  --> 
                            <a  class="btn btn-md ms-2 btn-danger col-4 rounded-0 ms-auto text_light " 
                            href="#" onclick="confirmDelete( '<?php echo route('project.delete',$project) ?>' )">  
                                  Delete                                                                  
                            </a>

                        </div>
         
                          <!--  edit button  -->
                          <form action="{{route('project.edit', $project)}}" method="get" class="btn btn-sm bg-dark rwo d-flex  m-1">
                            <button  tybe="submit" class="btn btn-sm ms-auto col-12 rounded-0 btn-dark text-warning" >Edit Project
                            </button>
                          </form>

                </div>
          </div>
            
        @endforeach
      
        {{$projects-> links()}}
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
        <p class="text-danger justify-content-md-end">There is no Project!! </p>
      @endif
  </div>
</div>
@include('layouts.footer')