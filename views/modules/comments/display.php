<?php if ($comments): ?>
<h1 id="comments_title"><?php count($comments) ?></h1>
<?php foreach ($comments as $item): ?>
<div class="media comment_section">
    <div class="pull-left post_comments">
        <a href="#"><?php echo gravatar($item->user_email, 60,'class="img-circle"') ?></a>
    </div>
    <div class="media-body post_reply_comments">
        <h3><?php echo $item->user_name ?></h3>
        <h4><?php echo format_date($item->created_on) ?></h4>
        <?php if (Settings::get('comment_markdown') and $item->parsed): ?>
			<?php echo $item->parsed ?>
		<?php else: ?>
			<p><?php echo nl2br($item->comment) ?></p>
		<?php endif ?>
    </div>
</div> 
<?php endforeach ?>	
<?php else: ?>
	<p><?php echo lang('comments:no_comments') ?></p>
<?php endif ?>