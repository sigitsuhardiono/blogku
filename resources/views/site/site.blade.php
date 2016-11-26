@extends('layout.main')
@section('content')
<!-- begin:slider -->
<div class="row">
<div class="col-md-12">
  <div class="content-article">
	<div id="home-slider" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
		<li data-target="#home-slider" data-slide-to="0" class="active"></li>
		<li data-target="#home-slider" data-slide-to="1" class=""></li>
		<li data-target="#home-slider" data-slide-to="2" class=""></li>
	  </ol>
	  <div class="carousel-inner">
		<div class="item active">
		  <img src="{{asset('public/frontend/assets/img/image-slider01.jpg')}}" alt="image slider last sunday">
		</div>
		<div class="item">
		  <img src="{{asset('public/frontend/assets/img/image-slider02.jpg')}}" alt="image slider last sunday">
		</div>
		<div class="item">
		  <img src="{{asset('public/frontend/assets/img/image-slider03.jpg')}}" alt="image slider last sunday">
		</div>
	  </div>
	  <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
  </div>
</div>
</div>
<!-- end:slider -->

<!-- begin:tagline -->
<div class="row">
<div class="col-md-12">
  <div class="content-article">
	<div class="tagline">
	  <h2>Selamat Datang.</h2>
	  <p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipisicing elit, sed do eiusmod
	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	  consequat. Duis aute irure </p>
	</div>
  </div>
</div>
</div>
<!-- end:tagline -->

<!-- begin:main-section -->
<div class="row">
<!-- begin:article -->
<div class="col-md-8">
  <!-- begin:blog-post -->
  <div class="content-article">
	<?php foreach ($DataPost as $posts):?>
	<div class="row">
	  <div class="col-md-5 col-sm-5 col-xs-12">
		<img src="{{asset('public/frontend/assets/img/image-blog-post-thumbnail-01.jpg')}}" class="img-responsive" alt="image blog post last sunday">
	  </div>
	  <div class="col-md-7 col-sm-7 col-xs-12">
		<div class="blog-post">
		  <span class="label label-secondary">{{$posts->categories->nama}}</span>
		  <span class="meta-post-date">October 16, 2014</span>
		  <h2>{{$posts->judul}}</h2>
		  <span class="meta-post-author"><strong>By</strong> <a>{{$posts->users->name}}</a></span>
		  <p><?php echo $posts->isi;?></p>
		  <p><a href="{{url('posts/detail/')}}/{{$posts->id}}" class="btn btn-secondary btn-sm">Read more <i class="fa fa-angle-right"></i></a></p>
		</div>
	  </div>
	</div>
	<?php endforeach;?>


	<!-- begin:pagination -->
	<div class="row">
	  <div class="col-md-12">
		{{ $DataPost->links() }}
	  </div>
	</div>
	<!-- end:pagination -->

  </div>
  <!-- end:blog-post -->
</div>
<!-- end:article -->

<!-- begin:sidebar -->
<div class="col-md-4">
  <!-- begin:widget-sidebar -->
  <div class="content-article">
	<div class="widget-sidebar">
	  <div class="widget-title">
		<h3>Search</h3>
	  </div>

	  <div class="input-group">
		<input type="text" class="form-control" placeholder="Type your keyword">
		<span class="input-group-btn">
		  <button class="btn btn-secondary" type="button"><i class="fa fa-arrow-right"></i></button>
		</span>
	  </div>
	</div>
	<!-- break -->
	<div class="widget-sidebar widget_recent_entries">
	  <div class="widget-title">
		<h3>Recent Posts</h3>
	  </div>

	  <ul>
		<li><a href="#">Lorem ipsum dolor</a></li>
		<li><a href="#">Lorem dolor</a></li>
		<li><a href="#">Lorem ipsum dolor sit amet</a></li>
		<li><a href="#">Lorem ipsum</a></li>
		<li><a href="#">Lorem ipsum dolor sit</a></li>
	  </ul>
	</div>
	<!-- break -->
	<div class="widget-sidebar widget_archive">
	  <div class="widget-title">
		<h3>Archives</h3>
	  </div>

	  <ul>
		<li><a href="#">September 2014</a> <span>40</span></li>
		<li><a href="#">August</a> <span>15</span></li>
		<li><a href="#">May</a> <span>21</span></li>
		<li><a href="#">February</a> <span>73</span></li>
		<li><a href="#">January</a> <span>51</span></li>
	  </ul>
	</div>
	<!-- break -->
	<div class="widget-sidebar widget_archive">
	  <div class="widget-title">
		<h3>Categories</h3>
	  </div>

	  <ul>
	  	@foreach($DataCategories as $category)
		<li><a href="{{url('posts/category/')}}/{{$category->id}}">{{$category->nama}}</a> <span>{{count($category->posts)}}</span></li>
		@endforeach
	  </ul>
	</div>
	<!-- break -->
  </div>
  <!-- end:widget-sidebar -->
</div>
<!-- end:sidebar -->
</div>
<!-- end:main-section -->
@stop