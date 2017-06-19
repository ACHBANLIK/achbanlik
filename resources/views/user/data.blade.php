@foreach($pubs as $pub)


<!-- massonry-post-item -->
<div class="massonry-post-item massonry-post-item2">
<!-- post-item -->
   <div class="post-item v4-style zoom">
      <div class="post-thumb">
         <a href="#"><img width="770" height="1200" src="{{ asset('user/img/Funny-Image_44.png') }}" /></a>
         <div class="badge-list"></div>

      </div>

      <div class="content">
         <h4><a href="#">Holisticly Drive Excellent Expertise Rather Than.</a></h4>
         <div class="cat-share">
            <div class="cat-list">
               <a href="#/" class="cat">{{ $pub->category->{'title_'.config('app.locale')}  }}</a>
            </div>
         </div>
         <div class="excerpt">Globally recaptiualize process-centric processes vis-a-vis covalent partnerships. Continually</div>
         <div class="post-info">
            <span> by <span class="author"><a class="url fn n" href="#">Shane</a></span></span> <a href="#"><span class="posted-on">6 months ago</span></a>            
         </div>
      </div>
   </div>
   <!-- /.post-item -->
</div>
<!-- /.massonry-post-item -->
     

@endforeach