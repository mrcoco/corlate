<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
    </div>
    <div class="blog">
        <div class="row">
             <div class="col-md-8">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date">{{ helper:date timestamp=created_on format="d M Y" }}</span>
                                <span><i class="fa fa-user"></i> <a href="#">{{ user:display_name user_id=author_id }}</a></span>
                            </div>
                        </div>
                            
                        <div class="col-xs-12 col-sm-10 blog-content">
                        {{ posts}}
                            <h2>{{ title }}</h2>
                            <p>{{ body }}</p>
                            <div class="post-tags">
                                <strong>Tag:</strong> <a href="#">Cool</a> / <a href="#">Creative</a> / <a href="#">Dubttstep</a>
                            </div>
                        {{ /posts}}
                        </div>
                    </div>    
                </div><!--/.blog-item-->

            </div><!--/.col-md-8-->
            {{ theme:partial name="aside" }}
              
        </div><!--/.row-->
    </div>
</section><!--/#blog-->