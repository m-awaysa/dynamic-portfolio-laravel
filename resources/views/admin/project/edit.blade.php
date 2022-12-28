@include('layouts.header')


<div class="container bg-light">
  


        
    <!-- edit  Project form  -->
    <form action="{{route('project.edit',$project)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-5 ">
          
             <!--  dropdown list  -->
             <label class="mb-1">Skills Required:</label>
             <select id="branche" multiple data-style="bg-secondary shadow-sm text-warning " class="selectpicker w-100" name="projectskills[]" >
                @foreach($project->skills as $projectskill)
                  <option class="fs-6" value="{{$projectskill->id}}" selected>{{$projectskill->skill_name}}</option>
                @endforeach   
                @foreach($skillsarray as $skill )
                  <option class="fs-6"value="{{$skill->id}}" >{{$skill->skill_name}}</option>
                @endforeach   
             </select>
             @error('projectskills')
              <div class="text-danger">{{$message}}</div>
             @enderror
             @if(session('status'))
              <div class="text-danger">
               {{session('status')}}
              </div>
             @endif
        </div>
<!--  new New project Name --><!--  new New project Name --><!--  new New project Name --><!--  new New project Name --><!--  new New project Name -->
        
        <div class="d-flex row">
            <!--  new New project Name -->
            <div >
                <label for="new_project_title">Project Name:</label>
                <input type="text " id="new_project_title" name="new_project_title" placeholder="Prject Title"
                class="  row m-1 col-lg-6 border col-12 shadow " value="{{$project->project_title}}">
                @error('new_project_title')
                 <div class="text-danger">{{$message}}</div>
                @enderror
            </div>


            <!--  new New project link -->
            <div  >
                <label for="new_project_link">Project Link:</label>
                <input type="text " id="new_project_link" name="new_project_link" placeholder="Prject Link"
                class="  row m-1 col-lg-6 border col-12 shadow" value="{{$project->project_link}}">
                @error('new_project_link')
                 <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

           
                <!--  new New project description -->
                <div >
                    <label for="new_project_description">Description:</label>
                    <textarea name="new_project_description" id="new_project_description"
                    cols="30" rows="4" 
                    class="row m-1 col-lg-6 border col-12 shadow "
                    placeholder="Description">{{$project->project_description}}</textarea>
                    @error('new_project_description')
                     <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
         

            <!--  new New project photo -->
            <div class="col-sm">
                <button  class="btn btn-success btn-sm m-1" type="button"  
                            data-bs-toggle="collapse"  data-bs-target="#showimage">
                            <i class="fa-solid fa-image"></i>
                 Show current image
                </button>
                  <!-- send mail   -->
                  <div class="collapse  " id="showimage">
                      <img src="{{ asset('images/'.$project->photo) }}"
                       class="mt-1 h-50 w-50"  alt="image not found">
                  </div>
                <div>
                    <label for="new_project_photo">Chose New Photo:</label>
                    <input  type="file" name="new_project_photo" 
                    >
                    @error('new_project_photo')
                     <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <!--  hide/show toggle -->
            <div>
            <label for="visible">Visibility:</label>
              <input class="mx-1"type="checkbox"  name="visible" value="true"
              <?php if($project->visibility) {echo "checked";}  else   echo "unchecked"   ?>>
            </div>
        </div>

        <!--  edit button  -->
        <button  type = "submit" class="btn btn-md mt-2 mb-2 rounded border btn-dark text-warning" >Edit Project
        </button>
    </form>

</div>

@include('layouts.footer')