@include('layouts.header')

<div class="container bg-light">
    <!-- edit  info form  -->
    <form action="#" method="post" >
      @csrf

      <!--  new New info title -->
      <div class="col-sm" >
          <label for="new_info_title">Title:</label>
          <input type="text " id="new_info_title" name="new_info_title" placeholder="info title"
          class="  row mx-1 mb-3 col-lg-5 border col-12 shadow " value="{{$contact_info->title}}">
          @error('new_info_title')
          <div class="text-danger">{{$message}}</div>
          @enderror
      </div>


      <!--  new New contact_info -->
      <div class="col-sm" >
          <label for="new_contact_info">Contant Information:</label>
          <input type="text " id="new_contact_info" name="new_contact_info" placeholder="contact info "
          class="  row mx-1 mb-3 col-lg-5 border  col-12 shadow " value="{{$contact_info->contact_info}}">
          @error('new_contact_info')
          <div class="text-danger">{{$message}}</div>
          @enderror
      </div>

      <!--  new New icon -->
      <div class="col-sm" >
          <label for="new_icon">Icon class:</label>
          <input type="text " id="new_icon" name="new_icon" placeholder=" icon"
          class="  row mx-1 col-lg-5 mb-3 border col-12 shadow " value="{{$contact_info->icon}}">
          @error('new_icon')
          <div class="text-danger">{{$message}}</div>
          @enderror
      </div>

      <!--  hide/show toggle -->
      <div >
        <label for="visible">Visibility:</label>
        <input class="mx-1"type="checkbox"  name="visible" value="true"
        <?php if($contact_info->visibility) {echo "checked";}  else   echo "unchecked"   ?>>
      </div>


      <form action="'{{route('contact_info.edit',$contact_info)}}'" method="post">
          <div>
              <!--  edit button  -->
              <button  type = "submit" class="btn btn-md mt-2 mb-2 rounded border btn-dark text-warning" >Edit Info
              </button>
          </div>
      </form>

</div>
@include('layouts.footer')