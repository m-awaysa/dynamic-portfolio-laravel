@include('layouts.header')
<!-- add project  -->
<div class="container bg-light">
  <!-- add new project form  -->
  <form action="{{route('project.add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex row">
      <!--  project title   -->
      <div class="col-sm ">
        <label for="project_title">Project Title:</label>
        <input type="text " name="project_title" placeholder="project_title" class=" row m-1 col-lg-9 border col-12 shadow " value="{{old('project_title')}}">
        @error('project_title')
        <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      <!--  project link   -->
      <div class="col-sm">
        <label for="project_link">Project Link:</label>
        <input type="text " name="project_link" placeholder="project_link Name" 
        class=" row m-1 col-lg-9 border col-12 shadow " value="{{old('project_link')}}">
        @error('project_link')
        <div class="text-danger">{{$message}}</div>
        @enderror
      </div>

      <!--  project description  -->
      <div>
        <label for="project_description">Description:</label>
        <textarea name="project_description" id="project_description" cols="30" rows="4" 
        class="row m-1 col-lg-4 border col-12 shadow " placeholder="Description">{{old('project_description')}}</textarea>
        @error('project_description')
        <div class="text-danger">{{$message}}</div>
        @enderror
      </div>


      <!--  project photo  -->

      <div class="col-sm">
        <label for="project_photo">Project Photo:</label>
        <input type="file" name="project_photo">
        @error('project_photo')
        <div class="text-danger">{{$message}}</div>
        @enderror
      </div>

    </div>

    <!-- select skills -->
    <div class="col-lg-3 ">
      <label class="mb-1">Skills Required:</label>
      <select multiple data-style="bg-secondary shadow-sm text-warning " class="selectpicker w-100" name="projectskills[]">
        @foreach($skills as $skill)
        <option class="skill-select fs-6" value="{{$skill->id}}">{{$skill->skill_name}}</option>
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



    <!--  project visibility    -->
    <div>
      <label class="mx-2" for="visible">Visibility:</label>
      <input type="checkbox" name="visible" value="true" checked>
    </div>

    <div>
      <!--  add button  -->
      <button id="mf" type="submit" class="btn btn-md mt-2 mb-2 rounded border btn-dark text-warning">Add new Project
      </button>
    </div>
  </form>
</div>
@include('layouts.footer')