@php
 $array_items = \App\Item::all();
@endphp


<footer id="footer" class="footer-1" >
<div class="main-footer widgets-dark typo-light container-fluid">
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
  <!--class="widget-title" barrras-->
<h5  style="text-align:center !important;">Alejandria.com<span></span></h5>
<p>Biblioteca vitual adaptada a las últimas tecnológias</p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3"style=" text-align:center !important;">
<div class="widget no-box">
<h5 style="align:center !important ;">Menú<span></span></h5>
<ul class="thumbnail-widget">
@foreach($array_items  as $item)
<li>
<div class="thumb-content"><a href="{{ $item->url }}">{{$item->item_name}}</a></div>
</li>
  @endforeach
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3"sty >
<div class="widget no-box">
<h5>Get Started<span></span></h5>
<p>Get access to your full Training and Marketing Suite.</p>
<a class="btn" href="#." target="_blank">Register Now</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3" style=" text-align:center !important;">

<div class="widget no-box">
<h5> Contact Us<span></span></h5>

<p><a href="mailto:info@domain.com" title="glorythemes">info@domain.com</a></p>
<ul class="social-icons">
  <center>
    <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
    <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
    <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
    <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
    <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
    <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li
  </center>
    </ul>
  </div>
</div>
</div>

</div>
</div>
</div>

<div class="footer-copyright" style="margin-top:-20px !important;">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright Juan Pablo Foos © 2019. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>
