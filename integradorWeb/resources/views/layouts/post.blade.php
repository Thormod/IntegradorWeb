<!-- Single News Block -->
<div class="news-one">
  <div class="row vertical-gutter">
    <div class="col-md-4">
      <a href="#" class="angled-img">
        <div class="img">
          <img src="{{ $blog->path }}" alt="">
        </div>
      </a>
    </div>
    <div class="col-md-8">
      <div class="clearfix">
        <h3 class="h2 pull-left m-0"><a href="blog-post-1.html">{{ $blog->title }}</a></h3>
        <span class="date pull-right"><i class="fa fa-calendar"></i> {{ $blog->created_at }}</span>
      </div>
      <div class="tags">
        <i class="fa fa-tags"></i>  <a href="#">{{ $blog->tag }}</a>
      </div>
      <div class="description">
        <p align="justify">
        {{ $blog->content_text}}
        </p>
      </div>
      <a href="#" class="btn read-more pull-left">Read More</a>
    </div>
  </div>
</div>
<!-- /Single News Block -->
