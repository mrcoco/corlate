{{ post }}
<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
    </div>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">
                {{ theme:image file="blog/blog1.jpg" alt="Fun!" width="100%" class="img-responsive img-blog" }}               
                    <div class="row">  
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date">{{ helper:date timestamp=created_on format="d M Y" }}</span>
                                <span><i class="fa fa-user"></i> <a href="#">{{ user:display_name user_id=author_id }}</a></span>
                                <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">{{ comments:count_string entry_id=id entry_key="blog:post" entry_plural="blog:posts" }}</a></span>                                    
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <h2>{{ title }}</h2>
                            <p>{{ body }}</p>
                            <div class="post-tags">
                                <strong>Tag:</strong> 
                                {{ if keywords }}
                                	{{ keywords }}
									<a href="#">{{ keyword }}</a> /
									{{ /keywords }}	
								{{ endif }}                                    
                            </div>
                        </div>
                    </div>
                </div><!--/.blog-item-->                                    
                <?php if (Settings::get('enable_comments')): ?>	
						<h4><?php echo lang('comments:title') ?></h4>
							<?php echo $this->comments->display() ?>							
						<?php if ($form_display): ?>
							<?php echo $this->comments->form() ?>
						<?php else: ?>
							<?php echo sprintf(lang('blog:disabled_after'), strtolower(lang('global:duration:'.str_replace(' ', '-', $post[0]['comments_enabled'])))) ?>
						<?php endif ?>					
				<?php endif; ?>                
            </div><!--/.col-md-8-->
            {{ theme:partial name="aside" }}     
        </div><!--/.row-->
     </div><!--/.blog-->
</section><!--/#blog-->
{{ /post }}