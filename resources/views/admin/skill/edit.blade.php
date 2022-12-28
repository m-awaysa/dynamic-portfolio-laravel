@include('layouts.header')

    <div class="container bg-light">
    <!-- edit  Project form  -->
    <form action="{{route('skill.edit',$skill)}}" method="post" >
        @csrf

        <div class="d-flex row">
            <!--  new New skill Name -->
            <div class="col-sm" >
                <label for="new_skill_name">Project Name:</label>
                <input type="text " id="new_skill_name" name="new_skill_name" placeholder="Skill Name"
                class="  row m-1 col-lg-9 border col-12 shadow " value="{{$skill->skill_name}}">
                @error('new_skill_name')
                 <div class="text-danger">{{$message}}</div>
                @enderror
            </div>


            <!--  new New skill level -->
            <div  class="col-sm">
                <label for="new_skill_level">Skill Level:</label>
                <select name="new_skill_level" class="form-select row m-1  col-lg-9 border col-12 shadow"  >
                  <option value="beginner"<?php if($skill->skill_level =='beginner') {echo "selected";}?> >beginner</option>
                  <option value="intermediate"<?php if($skill->skill_level =='intermediate') {echo "selected";}?>>intermediate</option>
                  <option value="expert"<?php if($skill->skill_level =='expert') {echo "selected";}?>>expert</option>
                </select>

                @error('new_skill_level')
                 <div class="text-danger">{{$message}}</div>
                @enderror
               

            </div>

            <!--  hide/show toggle -->
            <div>
                <label for="visible">Visibility:</label>
                <input class="mx-1"type="checkbox"  name="visible" value="true"
                <?php if($skill->visibility) {echo "checked";}  else   echo "unchecked"   ?>>
            </div>

        </div>
        <div>
        <!--  edit button  -->
        <button  type = "submit" class="btn btn-md mt-2 mb-2 rounded border btn-dark text-warning" >Edit Project
        </button>
        </div>
    </form>
</div>
@include('layouts.footer')