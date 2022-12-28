@include('layouts.header')

<div class = " container">
   <!-- add new skill form  -->         
  <form action="{{route('addskill')}}" method="post" >
      @csrf
      <!-- skill name  -->
      <div class="m-2" >
          <label for="skill_name">Category Name:</label>
          <input type="text "  name="skill_name" placeholder="skill_name"
          class=" row m-1 col-lg-9 border col-12 shadow " value="{{old('skill_name')}}">
          @error('skill_name')
           <div class="text-danger">{{$message}}</div>
          @enderror
      </div>
      
      <!-- select level  -->
      <div class="m-2">
          <label for="skill_level">Skill Level:</label>
          <select class="form-select row m-1 col-lg-9 border col-12 shadow" name="skill_level"value="{{old('skill_level')}}">
                <option value="beginner">beginner</option>
                <option value="intermediate">intermediate</option>
                <option value="expert">expert</option>
          </select>
          @error('skill_level')
            <div class="text-danger">{{$message}}</div>
          @enderror
      </div>

      <!-- visible checkbox   -->
      <div class="m-2">
        <label class="mx-2" for="visible">Visibility:</label>
        <input type="checkbox"  name="visible" value="true" checked>
      </div>
      <!--  add button  -->
          <button id="mf" type = "submit" class="btn btn-md mt-2 mb-2 rounded border btn-dark text-white" >Add new Skill

          </button>

  </form>
</div>
@include('layouts.footer')
