<?php $this->load->view('lms/default-app/_layouts/header'); ?>
<?php $this->load->view('lms/default-app/_layouts/nav'); ?>

<div class="container u-mv-small">                   

	<div class="row">

		<div class="col-lg-12 col-md-12">

			<div class="u-mb-small u-pv-small u-border-bottom">		
				<div class="row">

					<div class="col-12 col-xl-10 col-lg-9">
						<h3 class="u-h3">
							<?php echo $site['breadcrumbs'] ?>
						</h3>
					</div>
					<div class="col-12 col-xl-2 col-lg-3">
						<?php $this->load->view('lms/default-app/_layouts/select-filter'); ?>
					</div>

				</div>
			</div>

			<div class="row">					
				<?php if (!empty($courses['data'])): ?>
					<?php foreach ($courses['data'] as $post): ?>

						<div class="col-sm-12 col-lg-4">

							<article class="c-event u-p-zero">
								<div class="c-event__img u-m-zero" data-mh="imaged">
									<a title="<?php echo $post['title'] ?>" class="u-color-primary" href="<?php echo $post['url'] ?>">
										<img width="100%" src="<?php echo $post['image']['thumbnail'] ?>" alt="<?php echo $post['title'] ?>">
									</a>								
								</div>
								<div class="c-event__meta u-ph-small" data-mh="heading">
									<a title="<?php echo $post['title'] ?>" class="u-color-primary u-h4 u-text-bold" href="<?php echo $post['url'] ?>">
										<?php echo $post['title'] ?>
									</a>
								</div>
								<div class="c-event__meta u-ph-small u-pt-xsmall u-border-top">
									<div class="o-media">
										<div class="o-media__img u-mr-xsmall">
											<div class="c-avatar c-avatar--xsmall">
												<img class="c-avatar__img" src="<?php echo $post['author']['photo'] ?>" alt="<?php echo $post['author']['name'] ?>">
											</div>
										</div>
										<div class="o-media__body">
											<?php echo $post['author']['name'] ?>
											<small class="u-block u-text-mute">
												<?php echo $post['author']['headline'] ?>
											</small>
										</div>
									</div>
									<div class="u-ml-auto">
										<div class='rating-stars u-flex u-justify-between u-pt-xsmall'>
											<ul>
												<?php  
												for ($i=0; $i < 5 ; $i++) { 

													if ($i < $post['rating']) {
														echo "
														<li class='star selected'>
															<i class='fa fa-star fa-fw'></i>
														</li>";
													}else{
														echo "
														<li class='star'>
															<i class='fa fa-star fa-fw'></i>
														</li>";
													}
												}
												?>
											</ul>
										</div>
									</div>
								</div>

								<div class="c-event__meta u-ph-small u-pt-xsmall u-border-top">
									<span class="cursor-default c-btn c-event__btn c-btn--custom u-bg-secondary u-color-primary u-border-zero"><i class="fa fa-eye u-mr-xsmall"></i><?php echo $post['views'] ?></span>          
									<?php if (empty($post['price'])): ?>
										<span class="cursor-default c-btn c-event__btn c-btn--custom u-bg-secondary u-color-primary u-border-zero">
											<i class="fa fa-shopping-cart u-mr-xsmall"></i>
											<?php echo $this->lang->line('free') ?>
										</span>
									<?php endif ?>

									<?php if (!empty($post['price'])): ?>
										<span class="cursor-default c-btn c-event__btn c-btn--custom u-bg-info u-text-small">
											<?php if (!empty($post['discount'])): ?>
												<s class="u-text-xsmall u-mr-xsmall"><?php echo $post['price'] ?></s>
												<?php echo $post['price_total'] ?>
											<?php endif ?>
											<?php if (empty($post['discount'])): ?>
												<?php echo $post['price_total'] ?>
											<?php endif ?>
										</span>
									<?php endif ?>
									
								</div>								
							</article>

						</div>
						
					<?php endforeach ?>	

					<div class="col-12">
						<?php $this->load->view('lms/default-app/_layouts/pagination');?>	
					</div>	


				<?php else: ?><div class="col-sm-12 col-lg-12">
					<div class="c-card u-p-medium u-pv-xlarge" data-mh="landing-cards">

						<div class="u-text-center u-justify-between">
							<p class="u-h5"><?php echo $this->lang->line('courses_not_found_category') ?></p>
						</div>

					</div>
				</div>					
			<?php endif ?>

		</div>

	</div>

</div><!-- // .row -->

</div><!-- // .container -->

<?php $this->load->view('lms/default-app/_layouts/footer-widget'); ?>
<?php $this->load->view('lms/default-app/_layouts/footer'); ?>