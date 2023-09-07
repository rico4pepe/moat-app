<div class="media user-media well-small">

    <br />
    <div class="media-body">
        <h5 class="media-heading">welcome    @if (Auth::check()) {{ auth()->user()->name }} @endif</h5>
        <ul class="list-unstyled user-info">

            <li>
                 <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online

            </li>

        </ul>
    </div>
    <br />
</div>

<ul id="menu" class="collapse">
    @guest
    <li class = "{{ request()->is('/') ? 'active' :  ''}} "><a href="/"><i class="fa-solid fa-user-plus"></i> Register </a></li>
    @endguest

       @if (Auth::check())
          @if(auth()->user()->name === 'st')

       <li class = "{{ request()->is('/project') ? 'active' :  ''}} "><a href="/project"><i class="fa-solid fa-users"></i> Add Project </a></li>
        @elseif (auth()->user()->name === 'Admin')
        <li class = "{{ request()->is('/sessions') ? 'active' :  ''}} "><a href="/users"><i class="fa-solid fa-users"></i> View All Students </a></li>
        @endif
       <li><form action="/logout" method="POST">
        @csrf
        <button name="btn" style="width: 100%; margin-top:5px;" id="btn" type="submit"><i class="icon-signout"></i> Logout </button>
        </form>
    </li>
@endif


</ul>
