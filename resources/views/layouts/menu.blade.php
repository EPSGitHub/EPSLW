

 <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>

                    <li class="{{(Route::currentRouteName()=='home')? 'active': '' }}">
                        <a href="{{route('home')}}"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
                    </li>

    @if ((Auth::user()->user_role == 'admin') )



                    <li class="submenu">
                        <a href="#"> <i class="fas fa-list-ul"></i><span> Blog</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName()=='post.create')? 'ok' : '' }}"><a href="{{ route('post.create') }}"> <i class="fas fa-caret-right"></i> Add New post</a></li>
                            <li class="{{ (Route::currentRouteName()=='post.index')? 'ok' : '' }}"><a href="{{ route('post.index') }}"> <i class="fas fa-caret-right"></i> All Post</a></li>
                            <li class="{{ (Route::currentRouteName()=='postCategory.index')? 'ok' : '' }}"><a href="{{ route('postCategory.index') }}"> <i class="fas fa-caret-right"></i> Categories</a></li>
                             <li class="{{ (Route::currentRouteName()=='postTag.index')? 'ok' : '' }}"><a href="{{ route('postTag.index') }}"> <i class="fas fa-caret-right"></i> Tags</a></li>

                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fas fa-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('user.index')}}"> <i class="fas fa-caret-right"></i> All Users</a></li>


                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"> <i class="fa-solid fa-users-line"></i><span> Career</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ (Route::currentRouteName()=='careers.create')? 'ok' : '' }}"><a href="{{ route('careers.create') }}"> <i class="fas fa-caret-right"></i> Add New Job post</a></li>
                            <li class="{{ (Route::currentRouteName()=='careers.index')? 'ok' : '' }}"><a href="{{ route('careers.index') }}"> <i class="fas fa-caret-right"></i> All Job Post</a></li>
                           <li class="{{ (Route::currentRouteName()=='careerCategory.index')? 'ok' : '' }}"><a href="{{ route('careerCategory.index') }}"> <i class="fas fa-caret-right"></i> Add Job Position</a></li>
                           <li class="{{ (Route::currentRouteName()=='job-applications.index')? 'ok' : '' }}"><a href="{{ route('job-applications.index') }}"> <i class="fas fa-caret-right"></i> Job Applications</a></li>


                        </ul>
                    </li>




    @endif



 @if ((Auth::user()->user_role == 'editor') )
 <li class="submenu">
    <a href="#"> <i class="fa-solid fa-users-line"></i><span> Career</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
        <li class="{{ (Route::currentRouteName()=='careers.create')? 'ok' : '' }}"><a href="{{ route('careers.create') }}"> <i class="fas fa-caret-right"></i> Add New Job post</a></li>
        <li class="{{ (Route::currentRouteName()=='careers.index')? 'ok' : '' }}"><a href="{{ route('careers.index') }}"> <i class="fas fa-caret-right"></i> All Job Post</a></li>
       <li class="{{ (Route::currentRouteName()=='careerCategory.index')? 'ok' : '' }}"><a href="{{ route('careerCategory.index') }}"> <i class="fas fa-caret-right"></i> Add Job Position</a></li>
       <li class="{{ (Route::currentRouteName()=='job-applications.index')? 'ok' : '' }}"><a href="{{ route('job-applications.index') }}"> <i class="fas fa-caret-right"></i> Job Applications</a></li>


    </ul>
</li>


    @endif


    {{--


     @if ((Auth::user()->user_role == 'admin'))
     <li class="submenu">
        <a href="#"><i class="fa-solid fa-envelope-open-text"></i> <span> Mail Box</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
           <li><a href="{{ route('home') }}"> <i class="fas fa-caret-right"></i>Subacription Mail</a></li>
            <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>Contact Us Mail</a></li>

        </ul>
    </li>

@endif



@if ((Auth::user()->user_role == 'admin'))
<li class="submenu">
   <a href="#"><i class="fa-solid fa-users"></i> <span> Career</span> <span class="menu-arrow"></span></a>
   <ul style="display: none;">
      <li><a href="{{ route('home') }}"> <i class="fas fa-caret-right"></i>Place a New post</a></li>
       <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>All Job Post</a></li>
       <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>Add a New Position</a></li>

   </ul>
</li>

@endif



@if ((Auth::user()->user_role == 'admin'))
<li class="submenu">
   <a href="#"><i class="fa-solid fa-photo-film"></i> <span> Media</span> <span class="menu-arrow"></span></a>
   <ul style="display: none;">
      <li><a href="{{ route('home') }}"> <i class="fas fa-caret-right"></i>Press Release </a></li>
      <li><a href="{{ route('home') }}"> <i class="fas fa-caret-right"></i>Photo Gallery</a></li>
      <li><a href="{{ route('home') }}"> <i class="fas fa-caret-right"></i>Video Gallery</a></li>


   </ul>
</li>

@endif




@if ((Auth::user()->user_role == 'admin'))
 <li class="submenu">
    <a href="#"><i class="fa-solid fa-calendar-days"></i> <span> Events</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
       <li><a href="{{ url('/settings') }}"> <i class="fas fa-caret-right"></i>Add a Event</a></li>
        <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>All Events</a></li>
        <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>Event Registration</a></li>

    </ul>
</li>

@endif





@if ((Auth::user()->user_role == 'admin'))
<li class="submenu">
    <a href="#"><i class="fas fa-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
       <li><a href="{{ route('user.index')}}"> <i class="fas fa-caret-right"></i> All Users</a></li>


    </ul>
</li>

@endif



@if ((Auth::user()->user_role == 'admin'))
 <li class="submenu">
    <a href="#"><i class="fa-solid fa-spider"></i> <span> SEO</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
       <li><a href="{{ url('/settings') }}"> <i class="fas fa-caret-right"></i>Page SEO Settings</a></li>
    </ul>
</li>

@endif



@if ((Auth::user()->user_role == 'admin'))
 <li class="submenu">
    <a href="#"><i class="fas fa-cog"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
    <ul style="display: none;">
       <li><a href="{{ url('/settings') }}"> <i class="fas fa-caret-right"></i>Contacts</a></li>
        <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>Social Icons</a></li>

    </ul>
</li>

@endif --}}







                   {{--  <li class="menu-title">
                        <span>Pages</span>
                    </li>
                    <li>
                        <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="register.html"> Register </a></li>
                            <li><a href="forgot-password.html"> Forgot Password </a></li>
                            <li><a href="lock-screen.html"> Lock Screen </a></li>
                        </ul>
                    </li> --}}



                </ul>
            </div>
        </div>
    </div>
