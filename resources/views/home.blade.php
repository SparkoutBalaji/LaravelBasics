<!DOCTYPE html>
<h1>HOME</h1>

<p>User http://127.0.0.1:8000/profile/BALAJI N/23/balaji.n@gmail.com/umarried-single (url for a parameter data pass to the view)</p>
<a href="/profile/{Name}/{Age}/{Email}/{Status}">Profile</a>
<br>
<a href="{{route('about.page')}}">About us</a>
<br>
<a href="{{route('user.detailController')}}">User Controller</a>
<br>
<a href="{{route('c1.view')}}">Component 1 view</a>
<br>
<a href="{{route('c2.view')}}">Component 2 view</a>
<br>
<a href="/submit">HTML Form</a>
