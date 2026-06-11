<?php if ( comments_open() || get_comments_number() ) : ?>
	<div class="comment-thread">
		<?php comments_template(); ?>
	</div>
<?php endif; ?>
