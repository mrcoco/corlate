<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
    </div>
    <div class="blog">
        <div class="row">
             <div class="col-md-8">
            {{ if posts }}
                {{ posts }}
                <div class="blog-item">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 text-center">
                            <div class="entry-meta">
                                <span id="publish_date">{{ helper:date timestamp=created_on format="d M Y" }}</span>
                                <span><i class="fa fa-user"></i> <a href="users/view/{{ author_id }}">{{ user:display_name user_id=author_id }}</a></span>
                                <span><i class="fa fa-comment"></i> <a href="#">{{ comments:count_string entry_id=id entry_key="blog:post" entry_plural="blog:posts" }}</a></span>                        
                            </div>
                        </div>                            
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <a href="#">                            
                            {{ theme:image file="blog/blog1.jpg" alt="Fun!" width="100%" class="img-responsive img-blog" }}
                            </a>
                            <h2><a href="{{ news_url }}">{{ title }}</a></h2>
                            <h3>{{ intro }}</h3>
                            <a class="btn btn-primary readmore" href="{{ url:base }}news/{{ helper:date timestamp=created_on format="Y/m" }}/{{ slug }}">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>    
                </div><!--/.blog-item-->
                {{ /posts }}    
                <ul class="pagination pagination-lg">
                    {{ pagination }}
                </ul><!--/.pagination-->
            {{ else }}                
                {{ helper:lang line="blog:currently_no_posts" }}
            {{ endif }}
            </div><!--/.col-md-8-->
            {{ theme:partial name="aside" }}              
        </div><!--/.row-->
    </div>
</section><!--/#blog-->