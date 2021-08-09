@php

  $route = Route::current()->getName();
@endphp

<div class="asidebar">
		<ul class="asidebar_menubar">
			<li><a href="{{route('about')}}" class="{{($route == 'about')?'active':''}}"><i class="fas fa-chalkboard-teacher"></i> About</a></li>
			<li><a href="{{route('education')}}" class="{{($route == 'education')?'active':''}}"><i class="fas fa-book-reader "></i> Education</a></li>
			<li><a href="{{route('portfolio')}}" class="{{($route == 'portfolio')?'active':''}}"><i class="fas fa-image "></i></i> Portfolio</a></li>
			<li><a href="{{route('skills')}}" class="{{($route == 'skills')?'active':''}}"><i class="fas fa-chalkboard-teacher "></i> Skills</a></li>
			<li><a href="{{route('contacts')}}" class="{{($route == 'contacts')?'active':''}}"><i class="fas fa-phone "></i> contacts</a></li>
			<li><a href="{{route('sms.showAll')}}" class="{{($route == 'sms.showAll')?'active':''}}"><i class="fas fa-envelope "></i> SMS</a></li>
			<li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt "></i> Logout</a></li>
		</ul>
</div>
	