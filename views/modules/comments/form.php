<div id="contact-page clearfix">
    <div class="status alert alert-success" style="display: none"></div>
    <div class="message_heading">
        <h4><?php echo lang('comments:your_comment') ?></h4>
    </div> 
    <div class="row">
    <?php echo form_open("comments/create/{$module}", 'id="create-comment" class="contact-form"') ?>
	<noscript><?php echo form_input('d0ntf1llth1s1n', '', 'style="display:none"') ?></noscript>
	<?php echo form_hidden('entry', $entry_hash) ?>
	<?php if ( ! is_logged_in()): ?>
        
            <div class="col-sm-5">
                <div class="form-group">
                    <label><?php echo lang('comments:name_label') ?></label>
                    <input type="text" name="name" id="name" class="form-control" required="required" value="<?php echo $comment['name'] ?>">
                </div>
                <div class="form-group">
                    <label><?php echo lang('global:email') ?></label>
                    <input type="email" name="email" class="form-control" required="required" value="<?php echo $comment['email'] ?>">
                </div>
                <div class="form-group">
                    <label><?php echo lang('comments:website_label') ?></label>
                    <input type="url" name="website" class="form-control" value="<?php echo $comment['website'] ?>">
                </div>                    
            </div>
    <?php endif ?>
            <div class="col-sm-7">                        
                <div class="form-group">
                    <label><?php echo lang('comments:message_label') ?></label>
                    <textarea name="comment" id="message" required="required" class="form-control" rows="8"><?php echo $comment['comment'] ?></textarea>
                </div>                        
                <div class="form-group">
                	<?php echo form_submit('submit', lang('comments:send_label'),'class="btn btn-primary btn-lg"') ?>                
                </div>
            </div>
        </div>
    <?php echo form_close() ?>   
</div><!--/#contact-page-->