@include('layouts.header')

<div class = " container bg-light justify-center">
  <!-- add new info form  -->         
  <form action="{{route('contact_info.add')}}" method="post" >
    @csrf
    <!-- info title  -->
    <div class="m-2" >
        <label for="info_title">Contact info title:</label>
        <input type="text "  name="info_title" placeholder="info title"
        class=" row m-1 col-lg-5 border col-12 shadow"
        value="{{old('info_title')}}" >
        @error('info_title')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <!-- contact_info  -->
    <div class="m-2" >
        <label for="contact_info">Contact  Information:</label>
        <input type="text "  name="contact_info" placeholder="contact info"
        class=" row m-1 col-lg-5 border col-12 shadow "
        value="{{old('contact_info')}}">
        @error('contact_info')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <!-- icon  -->
    <div class="m-2" >
        <label for="icon">Font awesome icon class:</label>
        <input type="text "  name="icon" placeholder="icon class"
        class=" row m-1 col-lg-5 border col-12 shadow "
        value="{{old('icon')}}">
        @error('icon')
        <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <!-- visible checkbox   -->
    <div class="m-2">
      <label class="mx-2" for="visible">Visibility:</label>
      <input type="checkbox"  name="visible" value="true" checked>
    </div>
    <!--  add button  -->
    <button id="mf" type = "submit" class="btn btn-md mt-2 mb-2 rounded border btn-dark text-white" >
      Add new Skill
    </button>

  </form>
</div>

@include('layouts.footer')
