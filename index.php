<?php require_once('config.php') ?> //new
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
	<title>LifeBlog | Home </title>
</head> 
<body>
	<!-- How check code fitness for PHP8.2 -->
	<!-- container - that wraps whole page -->
	<div class="container">
		<!-- navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- // navbar -->
		
		<!-- banner -->
		<?php include( ROOT_PATH . '/includes/banner.php') ?>
		<!-- // banner -->
		
		<!-- Retrieve all posts from database -->
		<?php $posts = getPublishedPosts(); ?>
		
		<!-- Page content -->/.
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr> 
			<!-- more content still to come here, -->
			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
					<?php if (isset($post['topic']['name'])): ?>
						<a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id']; ?>"
							class="btn category">
							<?php echo $post['topic']['name']; ?>									
						</a>
					<?php endif; ?>
					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
						<div class="post_info">
							<h3><?php echo $post['title']; ?></h3>
							<div class="info">
								<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
								<span class="read_more">Read more...</span>							
							</div>					
						</div>			
					</a>
				</div>
			<?php endforeach; ?>
		<!-- // Page content -->

		
		<!-- footer -->
		<?php require_once( ROOT_PATH . '/includes/footer.php'); ?>
		<!-- // footer -->
	