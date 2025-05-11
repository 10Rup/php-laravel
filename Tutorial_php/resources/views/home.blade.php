
<x-message-banner msg="user is trying tologin" />
<a href="/about">About Page</a>
<h3>
    {{URL::current()}}
    {{url()->current()}}
</h3>
<h3>
    {{URL::full()}}
    {{url()->full()}}
</h3>
<h1>Home Page</h1>
<a href="/">Welcome Page</a>
<a href="{{URL::to('users')}}">Home Profile of User</a>
<a href="/testparam/Rony Mandal">Testing Parameter Page</a>