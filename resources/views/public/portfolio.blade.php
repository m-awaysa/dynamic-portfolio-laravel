@extends('layouts.public_header')

@section('contant')


<div id="aboutMe" class=" container row align-items-center info">
    <!-- hi div -->
    <div class="deteals  col-sm-12 col-lg-5 ms-lg-5 ">
        <h3 class="text-light w-100">Hi, I,m Student <span class="">Student</span></h3>
        <p class="ms-3 w-100"> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
            Quidem, quod nesciunt expedita, repellendus sunt accusamus
            in fuga architecto a quia sed ea, corrupti iusto facere.
            Quae numquam dolorum illo doloremque.
        </p>
    </div>
    <!-- Robot images Div -->
    <div class="img-group  d-none d-lg-block  col-6 mt-5">
        <img class="white-robot ms-auto " src="{{ asset('images/pwhiterobot.png') }}">
        <img class="black-robot ms-auto " src="{{ asset('images/blackrobot.png') }}">
    </div>
</div>


<!-- My skills div -->
<div id="skills" class=" text-center col-12 mt-5">
    <div class="title">
        <h2 class="text-warning mt-5"> My Skills</h2>
    </div>
    <div class="box mt-5  shadow  pb-5 ">
        <table class="skills-table  container">
            <thead>
                <tr>
                    <th>Skill Name</th>
                    <th>Skill Level</th>
                </tr>
            </thead>
            @if($skills->count())
            @foreach($skills as $skill)
            @if($skill->visibility)
            <tr class=" ">
                <td>{{$skill->skill_name}}</td>
                <td>{{$skill->skill_level}}</td>
            </tr>
            @endif
            @endforeach

            @else
            <p class="text-danger "> There is no skills</p>
            @endif

        </table>
    </div>
</div>


<div id="projects" class="my-5 pt-5 px-0 mx-0 row d-flex all-project text-center container ">
    <div class="title">
        <h2 class="text-warning "> Projects</h2>
    </div>
    @if ($projects->count())
    @foreach($projects as $project)
    @if($project->visibility)
    <div class="card public mt-5  container  rounded-0">
        <img src="{{asset('images/'.$project->photo)}}" class="rounded-0 card-img public-img">
        <div class="card-img-overlay rounded-0 container text-light ">
            <div class="container my-text-body border-0 pb-1 mb-1">
                <h5 class="card-title public pb-1 ">{{$project->project_title}}</h5>
                <p class="card-text-name">{{$project->project_description}}.</p>
                <p> <a href="{{$project->project_link}}" class="button btn btn-warning "> Learn More </a></p>
            </div>
        </div>
        <!--  dropdown skills  -->
        <div class="dropdown">
            <a class="btn btn-secondary rounded-0 d-flex dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Skills required
            </a>
            <ul class="dropdown-menu">
                @if ($project->skills->count())
                @foreach($project->skills as $projectskills)
                <li>
                    <p class="dropdown-item">{{$projectskills->skill_name}}</p>
                </li>
                @endforeach
                @else
                <li>
                    <p class="dropdown-item text-danger">No skill requires</p>
                </li>
                @endif
            </ul>
        </div>
    </div>

    @endif
    @endforeach
    @else
    <p class="text-danger justify-content-md-end">There is no Project!! </p>
    @endif
</div>





<div id="contactMe" class="container">
    <div class="w-100">
        <h2 class="text-warning  text-center">Contact</h2>
    </div>
    <!--  contact info list   -->
    <table class="contact-info table container my-5 " id="category">
        <thead>
            <tr>
                <th>Title</th>
                <th>Contact Info</th>
            </tr>
        </thead>

        @if ($contact_infos->count())

        @foreach($contact_infos as $contact_info)
        @if($contact_info->visibility)
        <tr>
            <td>
                <?php echo ($contact_info->icon)." "  ?>{{$contact_info->title}}
            </td>
            <td>{{$contact_info->contact_info }}</td>
        </tr>
        @endif
        @endforeach

        @else
        <p class="text-danger justify-content-md-end">There is no Skills!! </p>
        @endif
    </table>
</div>

<!-- Robot images Div -->
@error('mail_subject')
<div class="text-danger">{{$message}}</div>
@enderror

@error('mail_body')
<div class="text-danger">{{$message}}</div>
@enderror

<div class="container text-center text-warning  pt-5">
    <h2>Contact Me</h2>
</div>
<div class=" container border-top shadow border-secondary   ">

    <div class="d-none d-lg-block  container  ">
        <img src="{{asset('images\moon.png')}}" class="moon  container">
    </div>
    <!-- send mail form  -->
    <form action="{{route('contact_infos')}}" class="  container  align-items-center" method="post">
        @csrf
        <!--   Name -->
        <div class="mb-3 mail-group">
            <label class="mail-label" for="mail_name ">Your Name:</label>
            <input type="text " id="mail_name" name="mail_name" placeholder="Mail Name"
                class="mail-item row m-1 col-lg-5 border col-11 shadow " value="{{old('mail_name')}}">
        </div>
        <!--   Mail subject -->
        <div class="mb-3  mail-group">
            <label class="mail-label" for="mail_subject">Mail Subject:</label>
            <input type="text " id="mail_subject" name="mail_subject" placeholder="Mail subject"
                class="mail-item row m-1 col-lg-5 border col-11 shadow" value="{{old('mail_subject')}}">
        </div>
        <!--   Mail body -->

        <div class="mb-3  mail-group">
            <label class="mail-label" for="mail_body">MailBody:</label>
            <textarea name="mail_body" id="mail_body" cols="30" rows="4"
                class="mail-item col-lg-5 col-11 placeholder-glow row mx-1 shadow bg-gray rounded "
                placeholder="Description">{{old('mail_body')}}</textarea>
        </div>

        <div class="mb-3">
            <!--  send button  -->
            <button id="sent" type="submit" class="btn btn-md mt-2 mb-2 rounded border btn-dark text-warning">
                Send
            </button>
        </div>
    </form>

</div>





@endsection