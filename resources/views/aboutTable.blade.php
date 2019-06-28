
@php
 $array_site = \App\About_site::paginate(1);
@endphp
@if(isset($array_site))
  <div class="container-fluid" style="text-align:center; margin-top:50px; background-color:#ffffff;">
    <div class="about">

      @foreach($array_site as $about)
        <h2>{{$about->title}}</h2>
        <p>{{$about->description_site}}</p>
        <p>{{$about->firm}}</p>
        @endforeach
    </div>
  </div>
@else
<div class="about">
<h2>NO SE ENCUENTRAN DATOS</h2>
</div>
@endif
