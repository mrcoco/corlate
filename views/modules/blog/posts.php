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
                                <span><i class="fa fa-user"></i> <a href="#">{{ user:display_name user_id=author_id }}</a></span>
                                <!-- <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">2 Comments</a></span>
                                <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span> -->
                            </div>
                        </div>
                            
                        <div class="col-xs-12 col-sm-10 blog-content">
                            <a href="#"><img class="img-responsive img-blog" src="images/blog/blog1.jpg" width="100%" alt="" /></a>
                            <h2><a href="{{ url }}">{{ title }}</a></h2>
                            <h3>{{ intro }}</h3>
                            <a class="btn btn-primary readmore" href="{{ url }}">Read More <i class="fa fa-angle-right"></i></a>
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