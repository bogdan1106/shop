
@extends('pages.layout')
@section('title', 'Categories')


@section('content')
<!--start-breadcrumbs-->
<div class="breadcrumbs">
 <div class="container">
  <div class="breadcrumbs-main">
   <ol class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li class="active">Categories</li>
   </ol>
  </div>
 </div>
</div>

<!--about-starts-->
<div class="about">
 <div class="container">
  <div class="about-top grid-1">

   @foreach ($categories as $category)

   <div class="col-md-4 about-left">
    <a href="{{route('category', $category->id)}}">
    <figure class="effect-bubba">
     <img class="img-responsive" src="images/categories/{{$category->image}}" alt=""/>
     <figcaption>
      <h2 >{{$category->title}}</h2>
      <p>{{$category->description}}</p>
     </figcaption>
    </figure>
    </a>
    <p class="text-center category-title"><a href="{{route('category', $category->id)}}">{{$category->title}}</a></p>
   </div>
    @endforeach



   <div class="clearfix"></div>
  </div>
 </div>
</div>
<!--about-end-->




	
	@endsection