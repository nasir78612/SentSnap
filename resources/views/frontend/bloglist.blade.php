@extends('frontend.layouts.main')
@section('title', 'bloglist')
@section('main-container')
	<div class="header-device-mobile">
		<div class="wapper">
			<div class="item mobile-logo">
				<div class="logo">
					<a href="#">
						<img src="assets/images/logo.png" alt="img">
					</a>
				</div>
			</div>
			<div class="item item mobile-search-box has-sub">
				<a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
				</a>
				<div class="block-sub">
					<a href="#" class="close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</a>
					<div class="header-searchform-box">
						<form class="header-searchform">
							<div class="searchform-wrap">
								<input type="text" class="search-input" placeholder="Enter keywords to search...">
								<input type="submit" class="submit button" value="Search">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="item mobile-settings-box has-sub">
				<a href="#">
						<span class="icon">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</span>
				</a>
				<div class="block-sub">
					<a href="#" class="close">
						<i class="fa fa-times" aria-hidden="true"></i>
					</a>
					<div class="block-sub-item">
						<h5 class="block-item-title">Currency</h5>
						<form class="currency-form stelina-language">
							<ul class="stelina-language-wrap">
								<li class="active">
									<a href="#">
											<span>
												English (USD)
											</span>
									</a>
								</li>
								<li>
									<a href="#">
											<span>
												French (EUR)
											</span>
									</a>
								</li>
								<li>
									<a href="#">
											<span>
												Japanese (JPY)
											</span>
									</a>
								</li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="item menu-bar">
				<a class=" mobile-navigation  menu-toggle" href="#">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
		</div>
	</div>
	<div class="main-content main-content-blog list right-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-trail breadcrumbs">
						<ul class="trail-items breadcrumb">
							<li class="trail-item trail-begin">
								<a href="index-2.html">Home</a>
							</li>
							<li class="trail-item trail-end active">
								Our blog
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="content-area content-blog col-lg-9 col-md-8 col-sm-12 col-xs-12">
					<div class="site-main">
						<h3 class="custom_blog_title">
							Our Blog
						</h3>
						<div class="blog-list list-style">
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-1.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">ACCESSORIES</a>
									</div>
									<h3 class="post-title">
										<a href="#">Fast-Track Your lorem ipsum<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Egg whites, turkey sausage, wheat toast, water. Of course they don’t want us to eat
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-2.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">ACCESSORIES,</a>
										<a href="#">CLOTHING,</a>
										<a href="#">HAND BAGS</a>
									</div>
									<h3 class="post-title">
										<a href="#">Open The Gates For Lorem<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
											Mauris nec ante magna.
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-3.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">BACKPACK</a>
									</div>
									<h3 class="post-title">
										<a href="#">We bring you the best by working Office<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Lorem ipsum dolor sit amet conse ctetur adipisicing elit do eiusmod tempor. Dolor sit amet[...]
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-4.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">LIFE STYLE</a>
									</div>
									<h3 class="post-title">
										<a href="#">How to Build Your Perfect Dining<span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
											Mauris nec ante magna.
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="blog-item">
								<div class="post-format">
									<a href="#">
										<img src="assets/images/blog-item-list-5.jpg" alt="img">
									</a>
								</div>
								<div class="post-info">
									<div class="category-blog">
										<a href="#">LIFE STYLE</a>
									</div>
									<h3 class="post-title">
										<a href="#">New Designer Outdoor Items <span>[...]</span></a>
									</h3>
									<div class="main-info-post">
										<p class="des">
											Phasellus condimentum nulla a arcu lacinia, a venenatis ex congue.
											Mauris nec ante magna.
										</p>
									</div>
									<div class="author-view">
										<div class="author">
											<div class="avt">
												<img src="assets/images/avt-blog1.png" alt="img">
											</div>
											<h3 class="name">
												Adam Smith
											</h3>
										</div>
										<div class="review">
											<div class="view">
												<span class="icon-view">
													<i class="fa fa-eye" aria-hidden="true"></i>
												</span>
												<span class="count">
													631
												</span>
											</div>
											<div class="s-comments">
												<span class="icon-cmt">
													<i class="fa fa-commenting" aria-hidden="true"></i>
												</span>
												<span class="count">
													82
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination clearfix style2">
							<div class="nav-link">
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
								<a href="#" class="page-numbers">1</a>
								<a href="#" class="page-numbers">2</a>
								<a href="#" class="page-numbers current">3</a>
								<a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar sidebar-blog col-lg-3 col-md-4 col-sm-12 col-xs-12">
					<div class="wrapper-sidebar">
						<div class="widget widget-socials">
							<h3 class="widgettitle">
								Follow us
							</h3>
							<div class="content-socials">
								<div class="social-list">
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-facebook-square" aria-hidden="true"></i>
									</a>
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</a>
									<a href="#" target="_blank" class="social-item">
										<i class="fa fa-instagram" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="widget widget-categories">
							<h3 class="widgettitle">Categories</h3>
							<ul class="list-categories">
								<li>
									<input type="checkbox" id="cb1">
									<label for="cb1" class="label-text">
										New Arrivals
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb2">
									<label for="cb2" class="label-text">
										Dining
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb3">
									<label for="cb3" class="label-text">
										Desks
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb4">
									<label for="cb4" class="label-text">
										Accents
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb5">
									<label for="cb5" class="label-text">
										Accessories
									</label>
								</li>
								<li>
									<input type="checkbox" id="cb6">
									<label for="cb6" class="label-text">
										Tables
									</label>
								</li>
							</ul>
						</div>
						<div class="widget widget-post">
							<h3 class="widgettitle">Popular Articles</h3>
							<ul class="stelina-posts">
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post1.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Life Style</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post2.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Lookbook</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>
								<li class="widget-post-item">
									<div class="thumb-blog">
										<img src="assets/images/sidebar-post3.jpg" alt="img">
									</div>
									<div class="post-content">
										<div class="cat">
											<a href="#">Street Style</a>
										</div>
										<h5 class="post-title"><a href="#">9 Quicks Tips That Will Change <span>[...]</span></a></h5>
									</div>
								</li>

							</ul>
						</div>
						<div class="widget widget-tags">
							<h3 class="widgettitle">
								Popular Tags
							</h3>
							<ul class="tagcloud">
								<li class="tag-cloud-link">
									<a href="#">Office</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Accents</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Flowering</a>
								</li>
								<li class="tag-cloud-link active">
									<a href="#">Accessories</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Hot</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Tables</a>
								</li>
								<li class="tag-cloud-link">
									<a href="#">Dining</a>
								</li>
							</ul>
						</div>
						<div class="widget newsletter-widget">
							<div class="newsletter-form-wrap ">
								<h3 class="title">Subscribe to Our Newsletter</h3>
								<div class="subtitle">
									More special Deals, Events & Promotions
								</div>
								<input type="email" class="email" placeholder="Your email letter">
								<button type="submit" class="button submit-newsletter">Subscribe</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection