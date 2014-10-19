
			<div class="fullblue">
				<div class="wrap about">
					<section>
						<h1>About Me</h1>
						<p>Hi, my name is Piotr Machowski. I work as a senior JavaScript developer specializing in a massive AngularJS applications. International conferences speaker, design lover, former mobile developer.</p>
					</section>
					<section>
						<h1>Follow Me</h1>
						<div class="tw-outside">
							<a href="<?php echo twitter_url(); ?>" class="tw-link">
								<span class="fa fa-twitter"></span>
							</a>
						</div>
					</section>
				</div>
			</div>

			<div class="wrap">
	            <footer id="bottom">
	                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>

	                <ul role="navigation">
	                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php if(twitter_account()): ?>
	                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	                    <?php endif; ?>
	                </ul>
	            </footer>

	        </div>
        </div>

    </body>
</html>
