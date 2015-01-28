<?php if ($archive_months): ?>
<div class="row">
    <div class="col-sm-12">
    	<?php foreach ($archive_months as $month): ?>
        <ul class="blog_archieve">           
            
            <li>
            	<a href="<?php echo site_url('blog/archive/'.date('Y/m', $month->date));?>">
            	<i class="fa fa-angle-double-right"></i> <?php echo format_date($month->date, lang('blog:archive_date_format')); ?> <span class="pull-right">(<?php echo $month->post_count; ?>)
            	</a>
            </li>
            
        </ul>
        <?php endforeach ?>
    </div>
</div>
<?php endif ?>