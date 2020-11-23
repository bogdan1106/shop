
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
    <figure class="effect-bubba">
     <a href="{{route('category', $category->id)}}"><img class="img-responsive" src="images/categories/{{$category->image}}" alt=""/></a>
     <figcaption>
      <h2 >{{$category->title}}</h2>
      <p>{{$category->description}}</p>
     </figcaption>
    </figure>
    <p class="text-center category-title"><a href="{{route('category', $category->id)}}">{{$category->title}}</a></p>
   </div>
    @endforeach



   <div class="clearfix"></div>
  </div>
 </div>
</div>
<!--about-end-->




	
	@endsection