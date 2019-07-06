@extends('books.layout')
@section('content')
@php
 $array_blogs = \App\Blog::all();
@endphp
  <div class="header">
  <div class="avatar"><center><img src="https://s3.amazonaws.com/37assets/svn/765-default-avatar.png"></center></div>

  <h1 class="name">Administrador</h1>
    <ul class="social-icons">
      <center>
        <li ><a href="" class="social-icon"> <i class="fa fa-facebook" style="color:#666;"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter" style="color:#666;"></i></a></li>
				<li><a href="" class="social-icon"> <i class="fa fa-rss" style="color:#666;"></i></a></li>
				<li><a href="" class="social-icon"> <i class="fa fa-youtube" style="color:#666;"></i></a></li>
				<li><a href="" class="social-icon"> <i class="fa fa-linkedin" style="color:#666;"></i></a></li>
				<li><a href="" class="social-icon"> <i class="fa fa-google-plus" style="color:#666;"></i></a></li
      </center>
        </ul>
      </div>
  @foreach($array_blogs as $blog)
    <div class="post-heading">
      <!--<div class="post-date">
        <p class="date-day">12</p>
        <p class="date-month">Aug</p>
      </div>-->
      <p class="post-title">{{$blog->title}}</p>
    </div>
    <div class="post-content">
      <p>{{$blog->content}}</p>
      <p class="post-info">{{$blog->created_at}}</p>
    </div>
    @endforeach
@endsection
