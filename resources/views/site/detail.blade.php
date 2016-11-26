@extends('layout.main')
@section('content')
<!-- begin:header-title -->
<div class="row">
<div class="col-md-12">
  <div class="content-article">
	<div class="heading-title heading-title-img">
	  <img src="{{asset('public/frontend/assets/img/image-blog-post-big-03.jpg')}}" class="img-responsive" alt="blog single last sunday">
	  <div class="blog-single-author"><img src="{{asset('public/frontend/assets/img/avatar-comment.jpg')}}" alt="author blog last sunday"></div>
	  <ul class="blog-post-meta">
		<li>1 mnth ago</li>
		<li>2k love</li>
		<li>4 comments</li>
	  </ul>
	</div>
	<!-- begin:single-cat-and-breadcrumb -->
	<div class="row">
	  <div class="col-md-5 col-sm-5 hidden-xs">
		<div class="single-cat-title">
		  <h4>Writing</h4>
		</div>
	  </div>
	  <div class="col-md-7 col-sm-7 col-xs-12">
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>
		  <li class="active">Lorem ipsum dolor sit amet</li>
		</ol>
	  </div>
	</div>
	<!-- end:single-cat-and-breadcrumb -->

  </div>
</div>
</div>
<!-- end:header-title -->

<!-- begin:main-section -->
<div class="row">
<!-- begin:article -->
<div class="col-md-8">
	  <!-- begin:blog-single -->
	  <div class="content-article">
		<div class="row">
		  <div class="col-md-12">
			<div class="page-title">
			  <div class="blog-post-date">
				<span>08</span>
				<span>AUG</span>
			  </div>
			  <h2>Lorem ipsum dolor sit amet</h2>
			  <span class="blog-detail-meta">By <a href="#">admin</a> On August 08, 2014 In <a href="#">Writing</a></span>
			</div>

			<p><strong class="first-paragraph">L</strong>orem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in <strong>reprehenderit in voluptate</strong> velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<img src="{{asset('public/frontend/assets/img/image-blog-post-big-02.jpg')}}" class="img-responsive img-blog-single" alt="image post single last sunday">
			<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>

			<!-- begin:blog-post-tags -->
			<div class="blog-post-tags">
			  <strong><i class="fa fa-tags"></i> Tags :</strong>
			  <ul class="tag-list">
				<li><a href="#">Write</a></li>
				<li><a href="#">Writing</a></li>
				<li><a href="#">Travelling</a></li>
			  </ul>
			</div>
			<!-- end:blog-post-tags -->

			<!-- begin:blog-post-sharing -->
			<div class="blog-post-sharing">
			  <div class="row">
				<div class="col-sm-5 col-xs-5">
				  <h4>Share this post :</h4>
				</div>

				<div class="col-sm-7 col-xs-7">
				  <ul class="share-list">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
				  </ul>
				</div>
			  </div>
			</div>
			<!-- end:blog-post-sharing -->

		  </div>
		</div>

		<!-- begin:blog-post-author -->
		<div class="row">
		  <div class="col-md-12">
			<div class="blog-post-author">
			  <div class="blog-post-author-img">
				<img src="{{asset('public/frontend/assets/img/author-avatar.jpg')}}" alt="author avatar blog last sunday">
			  </div>
			  <div class="blog-post-author-desc">
				<h3>John Doe <small>- CEO Twinslabs Inc.</small></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
				<strong>Follow me at:</strong>
				<ul class="social-icon">
				  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
		<!-- end:blog-post-author -->

		<!-- begin:blog-post-related -->
		<div class="row">
		  <div class="col-md-12">
			<h3 class="blog-single-title">Related Posts</h3>
		  </div>
		  <div class="col-md-6 col-sm-6 col-xs-12">
			<div class="blog-container">
			  <div class="blog-image">
				<img src="{{asset('public/frontend/assets/img/image-blog-post-thumbnail-01.jpg')}}" class="img-responsive" alt="blog masonry last sunday">
			  
				<div class="blog-author"><img src="{{asset('public/frontend/assets/img/author-avatar.jpg')}}" alt="author avatar last sunday"></div>
				<div class="blog-content">
				  <span class="label label-secondary">Walking</span>
				  <h2><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur</a></h2>
				  <ul class="blog-meta">
					<li>1 hrs ago</li>
					<li>2k love</li>
					<li>100 comments</li>
				  </ul>
				</div>

			  </div>
			</div>
		  </div>
		  <!-- break -->
		  <div class="col-md-6 col-sm-6 col-xs-12">
			<div class="blog-container">
			  <div class="blog-image">
				<img src="{{asset('public/frontend/assets/img/image-blog-post-thumbnail-02.jpg')}}" class="img-responsive" alt="blog masonry last sunday">
			  
				<div class="blog-author"><img src="{{asset('public/frontend/assets/img/avatar-comment.jpg')}}" alt="author avatar last sunday"></div>
				<div class="blog-content">
				  <span class="label label-primary">Travelling</span>
				  <h2><a href="blog-single.html">Lorem ipsum dolor sit amet consectetur adisplicing</a></h2>
				  <ul class="blog-meta">
					<li>1 hrs ago</li>
					<li>2k love</li>
					<li>100 comments</li>
				  </ul>
				</div>

			  </div>
			</div>
		  </div>
		</div>
		<!-- end:blog-post-related -->

		<!-- begin:comment -->
		<div class="row">
		  <div class="col-md-12">
			<div class="comment">
			  <h3>4 Comments</h3>
			  <ul>
				<li>
				  <div class="comment-container">
					<div class="comment-image">
					  <img src="{{asset('public/frontend/assets/img/avatar-comment.jpg')}}" alt="comment last sunday">
					</div>

					<div class="comment-text">
					  <span class="comment-reply-link"><a href="#"><i class="fa fa-sign-in"></i> Reply</a></span>
					  <h4>John Doe</h4>
					  <span class="comment-meta">October 19, 2014 - 02:02 PM</span>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					  consequat.</p>
					</div>
				  </div>
				  <!-- break -->

				  <ul class="comment-reply">
					<li>
					  <div class="comment-container">
						<div class="comment-image">
						  <img src="{{asset('public/frontend/assets/img/author-avatar.jpg')}}" alt="comment last sunday">
						</div>

						<div class="comment-text">
						  <span class="comment-reply-link"><a href="#"><i class="fa fa-sign-in"></i> Reply</a></span>
						  <h4>John Doe</h4>
						  <span class="comment-meta">October 19, 2014 - 03:02 PM</span>
						  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						  tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					  </div>
					  <!-- break -->

					  <ul class="comment-reply">
						<li>
						  <div class="comment-container">
							<div class="comment-image">
							  <img src="{{asset('public/frontend/assets/img/avatar-comment.jpg')}}" alt="comment last sunday">
							</div>

							<div class="comment-text">
							  <span class="comment-reply-link"><a href="#"><i class="fa fa-sign-in"></i> Reply</a></span>
							  <h4>John Doe</h4>
							  <span class="comment-meta">October 19, 2014 - 02:02 PM</span>
							  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  tempor.</p>
							</div>
						  </div>
						</li>
					  </ul>
					</li>
				  </ul>
				</li>
				<!-- break -->

				<li>
				  <div class="comment-container">
					<div class="comment-image">
					  <img src="{{asset('public/frontend/assets/img/avatar-comment.jpg')}}" alt="comment last sunday">
					</div>

					<div class="comment-text">
					  <span class="comment-reply-link"><a href="#"><i class="fa fa-sign-in"></i> Reply</a></span>
					  <h4>John Doe</h4>
					  <span class="comment-meta">October 19, 2014 - 02:02 PM</span>
					  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  quis nostrud exercitation ullamco.</p>
					</div>
				  </div>
				</li>
				<!-- break -->

			  </ul>
			</div>
		  </div>
		</div>
		<!-- end:comment -->

		<!-- begin:comment-form -->
		<div class="row">
		  <div class="col-md-12">
			<h3 class="blog-single-title">Leave a Comment</h3>

			<form role="form">
			  <div class="row">
				<div class="col-sm-6">
				  <div class="form-group">
					<label for="name">Name <sup class="text-secondary"><i class="fa fa-asterisk"></i></sup></label>
					<input type="text" class="form-control">
				  </div>
				</div>
				<!-- break -->
				<div class="col-sm-6">
				  <div class="form-group">
					<label for="email">Email Address <sup class="text-secondary"><i class="fa fa-asterisk"></i></sup></label>
					<input type="email" class="form-control">
				  </div>
				</div>
			  </div>
			  <!-- break -->
			  <div class="row">
				<div class="col-md-12">
				  <div class="form-group">
					<label for="exampleInputFile">Comment</label>
					<textarea class="form-control" rows="6"></textarea>
				  </div>
				</div>
			  </div>
			  
			  <button type="submit" class="btn btn-secondary"><i class="fa fa-reply"></i> Submit</button>
			</form>
		  </div>
		</div>
		<!-- end:comment-form -->

	  </div>
	  <!-- end:blog-single -->
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