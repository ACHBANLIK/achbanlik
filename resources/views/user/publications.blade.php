@isset($publication)


                            @if ($publication->idType === 1)
                                <div class="vp-entry">
                                        <h4> {{ $publication->text1 }}</h4>
                                        <div class="vp-clearfix"></div>
                                        <div class="entry">


                                            <div class="cat-share">


                                         @if(Auth::user())

                                               @if($publication->doesUserVotedUp())
                                                  <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                               @else
                                                     <div class="share-icon3 {{ ( !$publication->isEnded() ? 'upvote' : 'ended' ) }}">
                                               @endif
                                                      <i class="fa fa-thumbs-up"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</div>
                                                     </div>
                                                  </div>


                                               @if($publication->doesUserVotedDown())
                                                  <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                               @else
                                                     <div class="share-icon3 {{ ( !$publication->isEnded() ? 'downvote' : 'ended' ) }}">
                                               @endif
                                                      <i class="fa fa-thumbs-down"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</div>
                                                     </div>
                                                  </div>


                                         @else

                                                  <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                      <i class="fa fa-thumbs-up"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</div>
                                                     </div>



                                                  </div>

                                                  <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                      <i class="fa fa-thumbs-down"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</div>
                                                     </div>
                                                  </div>



                                         @endif
                                

                                         </div>
                                  
                                        
                                         </div>
                                </div>

                            @elseif ($publication->idType === 2)
                                <div class="vp-entry" >
                                        <img src="{{ asset('storage/'.$publication->image1) }}" />
                                        <div class="entry">


                                            <div class="cat-share">


                                         @if(Auth::user())

                                               @if($publication->doesUserVotedUp())
                                                  <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                               @else
                                                     <div class="share-icon3 {{ ( !$publication->isEnded() ? 'upvote' : 'ended' ) }}">
                                               @endif
                                                      <i class="fa fa-thumbs-up"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</div>
                                                     </div>
                                                  </div>

                                               @if($publication->doesUserVotedDown())
                                                  <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                               @else
                                                     <div class="share-icon3 {{ ( !$publication->isEnded() ? 'downvote' : 'ended' ) }}">
                                               @endif
                                                      <i class="fa fa-thumbs-down"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</div>
                                                     </div>
                                                  </div>


                                         @else

                                                  <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                      <i class="fa fa-thumbs-up"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</div>
                                                     </div>



                                                  </div>

                                                  <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                      <i class="fa fa-thumbs-down"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</div>
                                                     </div>
                                                  </div>



                                         @endif
                                

                                         </div>
                                  
                                        
                                         </div>
                                </div>



                            @elseif ($publication->idType === 3)
                                <div class="vp-entry" >
                                        <h6 style="width: 80%;"> {{ $publication->text1 }}}</h6>
                                        <br>
                                        <img src="{{ asset('storage/'.$publication->image1) }}" />
                                        <div class="entry">


                                            <div class="cat-share">


                                         @if(Auth::user())

                                               @if($publication->doesUserVotedUp())
                                                  <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                               @else
                                                     <div class="share-icon3 {{ ( !$publication->isEnded() ? 'upvote' : 'ended' ) }}">
                                               @endif
                                                      <i class="fa fa-thumbs-up"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</div>
                                                     </div>
                                                  </div>

                                               @if($publication->doesUserVotedDown())
                                                  <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                               @else
                                                     <div class="share-icon3 {{ ( !$publication->isEnded() ? 'downvote' : 'ended' ) }}">
                                               @endif
                                                      <i class="fa fa-thumbs-down"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</div>
                                                     </div>
                                                  </div>


                                         @else

                                                  <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                      <i class="fa fa-thumbs-up"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</div>
                                                     </div>

                                                  </div>

                                                  <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                      <i class="fa fa-thumbs-down"></i>
                                                     <div class="mashsb-count">
                                                        <div class="counts">{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</div>
                                                     </div>
                                                  </div>



                                         @endif
                                

                                         </div>
                                  
                                        
                                         </div>
                                </div>
                              

                            @elseif ($publication->idType === 4)


                                <div class="vp-entry" >

                                            <table border="0" cellspacing="0" cellpadding="0" style="border:none;">
                                               <tr>


                                                  <td width="48%" align="center" valign="bottom">
                                                     <span class="excerpt">{{ $publication->text1 }}</span>
                                                     <br>
                                                     @if(Auth::user())
                                                        @if($publication->doesUserVotedUp())
                                                           <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                                        @else
                                                           <div class="share-icon3 {{ ( !$publication->isEnded() ? 'upvote' : 'ended' ) }}">
                                                        @endif

                                                              <i class="fa fa-thumbs-up"></i>
                                                              <div class="mashsb-count">
                                                                 <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' :  number_format($publication->opinions->where('choice' , '=' , '1')->count() * 100 / $publication->opinions->count(), 2, '.', '')  )}} %</div>
                                                              </div>
                                                           </div>
                                                        @else 
                                                           <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                              <i class="fa fa-thumbs-up"></i>
                                                              <div class="mashsb-count">
                                                                 <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' :  number_format($publication->opinions->where('choice' , '=' , '1')->count() * 100 / $publication->opinions->count(), 2, '.', '') ) }} %</div>
                                                              </div>
                                                     @endif
                                                  </td>

                                                  <td height="1px" >
                                                     <div style="background-color:#b0b0b0;height:90%;width:2px;"></div>
                                                  </td>


                                                  <td width="48%" align="center" valign="bottom">
                                                     <span class="excerpt">{{ $publication->text2 }}</span>
                                                     <br>
                                                     @if(Auth::user())
                                                        @if($publication->doesUserVotedDown())
                                                           <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                                        @else
                                                           <div class="share-icon3 {{ ( !$publication->isEnded() ? 'downvote' : 'ended' ) }}">
                                                        @endif

                                                              <i class="fa fa-thumbs-up"></i>
                                                              <div class="mashsb-count">
                                                                 <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '2')->count() * 100 / $publication->opinions->count(), 2, '.', '') )}} %</div>
                                                              </div>
                                                           </div>
                                                        @else 
                                                           <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                              <i class="fa fa-thumbs-up"></i>
                                                              <div class="mashsb-count">
                                                                 <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '2')->count() * 100 / $publication->opinions->count(), 2, '.', '') ) }} %</div>
                                                              </div>
                                                     @endif
                                                  </td>



                                               </tr>
                                            </table>

                                </div>


                            @elseif ($publication->idType === 5)


                                <div class="vp-entry" >

                                     <table>
                                        <tr>
                                           <td valign="bottom">
                                              <div class="post-thumb ">
                                        <a href="#">
                                           <img src="{{ asset('storage/'.$publication->image1) }}" />
                                        </a>

                                        <div class="cat-share">


                                     @if(Auth::user())

                                           @if($publication->doesUserVotedUp())
                                              <div class="share-icon3 share-icon3-selected" onclick="unuovote({{ $publication->id }})">
                                           @else
                                                 <div class="share-icon3 {{ ( !$publication->isEnded() ? 'upvote' : 'ended' ) }}">
                                           @endif
                                                  <i class="fa fa-thumbs-up"></i>
                                                 <div class="mashsb-count">
                                                    <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '1')->count() * 100 / $publication->opinions->count(), 2, '.', ''))  }} %</div>
                                                 </div>
                                              </div>


                                     @else
                                               <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                  <i class="fa fa-thumbs-up"></i>
                                                 <div class="mashsb-count">
                                                    <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '1')->count() * 100 / $publication->opinions->count(), 2, '.', '') ) }} %</div>
                                                 </div>
                                              </div> 

                                     @endif
                             
                                        </div>


                                     </div>



                                           </td>

                                                 <td height="1px" width="2">
                                                    <div style="background-color:#458bfb;height:90%;width:2px;"></div>
                                                 </td>


                                            <td valign="bottom">
                                              <div class="post-thumb ">
                                        <a href="#">
                                           <img src="{{ asset('storage/'.$publication->image2) }}" />
                                        </a>

                                        <div class="cat-share" >


                                     @if(Auth::user())

                                           @if($publication->doesUserVotedDown())
                                              <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                           @else
                                                 <div class="share-icon3 {{ ( !$publication->isEnded() ? 'downvote' : 'ended' ) }}">
                                           @endif
                                                  <i class="fa fa-thumbs-up"></i>
                                                 <div class="mashsb-count">
                                                    <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '2')->count() * 100 / $publication->opinions->count(), 2, '.', '') ) }} %</div>
                                                 </div>
                                              </div>

                                     @else
                                              <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                  <i class="fa fa-thumbs-up"></i>
                                                 <div class="mashsb-count">
                                                    <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '2')->count() * 100 / $publication->opinions->count(), 2, '.', '') ) }}  %</div>
                                                 </div>
                                              </div>



                                     @endif
                             

                                        </div>


                                     </div>
                                     


                                           </td>


                                        </tr>
                                     </table>


                                </div>


                            @elseif ($publication->idType === 6)


                                <div class="vp-entry" >

                                  <table>
                                     <tr>
                                        <td valign="bottom">
                                           <div class="post-thumb ">
                                        
                                              <img src="{{ asset('storage/'.$publication->image1) }}" />
                                              
                                              <div  style="background-color: white;">
                                                 <span>{{ $publication->text1 }}</span> 

                                                 <br>
                                                 @if(Auth::user())
                                                    @if($publication->doesUserVotedUp())
                                                       <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                                    @else
                                                       <div class="share-icon3 {{ ( !$publication->isEnded() ? 'upvote' : 'ended' ) }}">
                                                    @endif

                                                          <i class="fa fa-thumbs-up"></i>
                                                          <div class="mashsb-count">
                                                             <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '1')->count() * 100 / $publication->opinions->count(), 2, '.', '') )  }} %</div>
                                                          </div>
                                                       </div>
                                                    @else 
                                                       <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                          <i class="fa fa-thumbs-up"></i>
                                                          <div class="mashsb-count">
                                                             <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '1')->count() * 100 / $publication->opinions->count(), 2, '.', '') )  }} %</div>
                                                          </div>
                                                 @endif
                                   </td>

                                              </div>
                                           </div>
                                        </td>
                                        <td height="1px" width="2">
                                           <div style="background-color:#458bfb;height:90%;width:2px;"></div>
                                        </td>
                                        <td valign="bottom">
                                           <div class="post-thumb ">
                                        
                                              <img src="{{ asset('storage/'.$publication->image2) }}" />
                                              
                                              <div  style="background-color: white;">
                                                 <span>{{ $publication->text2 }}</span> 

                                                 <br>
                                                 @if(Auth::user())
                                                    @if($publication->doesUserVotedDown())
                                                       <div class="share-icon3 share-icon3-selected {{ ( !$publication->isEnded() ? 'deletevotes' : 'ended' ) }}">
                                                    @else
                                                       <div class="share-icon3 {{ ( !$publication->isEnded() ? 'downvote' : 'ended' ) }}">
                                                    @endif

                                                          <i class="fa fa-thumbs-up"></i>
                                                          <div class="mashsb-count">
                                                             <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '2')->count() * 100 / $publication->opinions->count(), 2, '.', '')  ) }} %</div>
                                                          </div>
                                                       </div>
                                                    @else 
                                                       <div class="share-icon3" data-toggle="modal" data-target="#loginModal">
                                                          <i class="fa fa-thumbs-up"></i>
                                                          <div class="mashsb-count">
                                                             <div class="counts">{{ ($publication->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($publication->opinions->where('choice' , '=' , '2')->count() * 100 / $publication->opinions->count(), 2, '.', '') ) }} %</div>
                                                          </div>
                                                 @endif


                                              </div>
                                           </div>
                                        </td>
                                     </tr>
                                  </table>
         

                                </div>



                            @endif


@endisset

@isset($pub)
@php
$input = array(  "#294f8a" , "#00897B"  , "#716FB2" , "#1395ba");
@endphp



@php
$rand_keys = array_rand($input, 2);
@endphp


@if ($pub->idType === 1)

      


<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v5-style zoom" >
         <div class="post-thumb ">
            <div class="textContent" style="background-color: {{ $input[$rand_keys[1]]  }};">

                       <p class="excerpt">{{ $pub->text1 }}</p>
         <br>
            </div>      

            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon2 {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div>

               @if($pub->doesUserVotedDown())
                  <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon2 {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>


         @else

                  <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>



                  </div>

                  <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>



         @endif
 
               <div class="cat-list2">
                  <a target="_blank" href="/cat/{{ $pub->category->id }}" class="cat">{{ $pub->category->{'title_'.config('app.locale')} }}</a>              
               </div>

            </div>


         </div>
         <div class="content">
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
            </div>
         </div>
      </div>
      <!-- /.post-item --> 




@elseif ($pub->idType === 2)


<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style zoom" >
         <div class="post-thumb ">
               <img src="{{ asset('storage/'.$pub->image1) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div>

               @if($pub->doesUserVotedDown())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>


         @else
                   <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div> 

                  <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>



         @endif
 
               <div class="cat-list">
                  <a target="_blank" href="/cat/{{ $pub->category->id }}" class="cat">{{ $pub->category->{'title_'.config('app.locale')} }}</a>              
               </div>

            </div>


         </div>
         <div class="content">
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
            </div>
         </div>
      </div>
      <!-- /.post-item --> 





@elseif ($pub->idType === 3)



<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style zoom" >
         <div class="post-thumb ">
               <img src="{{ asset('storage/'.$pub->image1) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div>

               @if($pub->doesUserVotedDown())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>


         @else
                   <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div> 

                  <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>



         @endif
 
               <div class="cat-list">
                  <a target="_blank" href="/cat/{{ $pub->category->id }}" class="cat">{{ $pub->category->{'title_'.config('app.locale')} }}</a>              
               </div>

            </div>


         </div>
         <div class="content">
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="excerpt"> {{ $pub->  text1 }}</div>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
               <br>
               
            </div>
         </div>
      </div>
      <!-- /.post-item --> 

    

@elseif ($pub->idType === 4)


<!-- post-item -->
<div id="{{ $pub->id }}" class="post-item v5-style zoom" >
<div class="post-thumb ">
<div class="textContent" style="background-color: {{ $input[$rand_keys[1]]  }};">
<table border="0" cellspacing="0" cellpadding="0" style="border:none;">
   <tr>


      <td width="48%" align="center" valign="bottom">
         <span class="excerpt">{{ $pub->text1 }}</span>
         <br>
         @if(Auth::user())
            @if($pub->doesUserVotedUp())
               <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
            @else
               <div class="share-icon2 {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
            @endif

                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' :  number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '')  )}} %</div>
                  </div>
               </div>
            @else 
               <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' :  number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                  </div>
         @endif
      </td>

      <td height="1px" >
         <div style="background-color:white;height:90%;width:2px;"></div>
      </td>


      <td width="48%" align="center" valign="bottom">
         <span class="excerpt">{{ $pub->text2 }}</span>
         <br>
         @if(Auth::user())
            @if($pub->doesUserVotedDown())
               <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
            @else
               <div class="share-icon2 {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
            @endif

                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') )}} %</div>
                  </div>
               </div>
            @else 
               <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                  </div>
         @endif
      </td>



   </tr>
</table>
</div> 
     



</div>
<div class="content">
<h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
<div class="post-info">
<span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
</div>
</div>
</div>
<!-- /.post-item --> 



@elseif ($pub->idType === 5)


<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style" >
         
         <table>
            <tr>
               <td valign="bottom">
                  <div class="post-thumb zoom">
               <img src="{{ asset('storage/'.$pub->image1) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon share-icon-selected" onclick="deletevotes({{ $pub->id }})">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', ''))  }} %</div>
                     </div>
                  </div>


         @else
                   <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                     </div>
                  </div> 

         @endif
 
            </div>


         </div>



               </td>

                     <td height="1px" width="2">
                        <div style="background-color:#458bfb;height:90%;width:2px;"></div>
                     </td>


                <td valign="bottom">
                  <div class="post-thumb ">
               <img src="{{ asset('storage/'.$pub->image2) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedDown())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                     </div>
                  </div>

         @else
                  <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }}  %</div>
                     </div>
                  </div>



         @endif
 

            </div>


         </div>
         


               </td>


            </tr>
         </table>



         <div class="content">   
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
            </div>
         </div>
      </div>
      <!-- /.post-item --> 
</div>
<!-- /.massonry-post-item -->


@elseif ($pub->idType === 6)


   <!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style" >
      <table>
         <tr>
            <td valign="bottom">
               <div class="post-thumb zoom">

                  <img src="{{ asset('storage/'.$pub->image1) }}" />
                  <div class="textContent textContent2" style="background-color: {{ $input[$rand_keys[1]]  }};">
                     <span>{{ $pub->text1 }}</span> 

                     <br>
                     @if(Auth::user())
                        @if($pub->doesUserVotedUp())
                           <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
                        @else
                           <div class="share-icon2 {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
                        @endif

                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') )  }} %</div>
                              </div>
                           </div>
                        @else 
                           <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') )  }} %</div>
                              </div>
                     @endif
       </td>

                  </div>
               </div>
            </td>
            <td height="1px" width="2">
               <div style="background-color:#458bfb;height:90%;width:2px;"></div>
            </td>
            <td valign="bottom">
               <div class="post-thumb zoom">

                  <img src="{{ asset('storage/'.$pub->image2) }}" />
                  <div class="textContent textContent2" style="background-color: {{ $input[$rand_keys[0]]  }};">
                     <span>{{ $pub->text2 }}</span> 

                     <br>
                     @if(Auth::user())
                        @if($pub->doesUserVotedDown())
                           <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
                        @else
                           <div class="share-icon2 {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
                        @endif

                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '')  ) }} %</div>
                              </div>
                           </div>
                        @else 
                           <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                              </div>
                     @endif


                  </div>
               </div>
            </td>
         </tr>
      </table>
      <div class="content">
         <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
         <div class="post-info">
            <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
         </div>
      </div>
   </div>
   <!-- /.post-item --> 


@endif


@endisset




@isset($pubs)
@php
$input = array(  "#294f8a" , "#00897B"  , "#716FB2" , "#1395ba");
@endphp



@foreach($pubs as $pub)

@php
$rand_keys = array_rand($input, 2);
@endphp


@if ($pub->idType === 1)

      

<!-- massonry-post-item -->
<div class="massonry-post-item massonry-post-item2">
<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v5-style zoom" >
         <div class="post-thumb ">
            <div class="textContent" style="background-color: {{ $input[$rand_keys[1]]  }};">

                       <p class="excerpt">{{ $pub->text1 }}</p>
         <br>
            </div>      

            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon2 {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div>

               @if($pub->doesUserVotedDown())
                  <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon2 {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>


         @else

                  <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>



                  </div>

                  <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>



         @endif
 
               <div class="cat-list2">
                  <a target="_blank" href="/cat/{{ $pub->category->id }}" class="cat">{{ $pub->category->{'title_'.config('app.locale')} }}</a>              
               </div>

            </div>


         </div>
         <div class="content">
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
            </div>
         </div>
      </div>
      <!-- /.post-item --> 
</div>
<!-- /.massonry-post-item -->



@elseif ($pub->idType === 2)

<!-- massonry-post-item -->
<div class="massonry-post-item massonry-post-item2">
<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style zoom" >
         <div class="post-thumb ">
               <img src="{{ asset('storage/'.$pub->image1) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div>

               @if($pub->doesUserVotedDown())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>


         @else
                   <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div> 

                  <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>



         @endif
 
               <div class="cat-list">
                  <a target="_blank" href="/cat/{{ $pub->category->id }}" class="cat">{{ $pub->category->{'title_'.config('app.locale')} }}</a>              
               </div>

            </div>


         </div>
         <div class="content">
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
            </div>
         </div>
      </div>
      <!-- /.post-item --> 
</div>
<!-- /.massonry-post-item -->





@elseif ($pub->idType === 3)


<!-- massonry-post-item -->
<div class="massonry-post-item massonry-post-item2">
<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style zoom" >
         <div class="post-thumb ">
               <img src="{{ asset('storage/'.$pub->image1) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div>

               @if($pub->doesUserVotedDown())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>


         @else
                   <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '1')->count() }}</div>
                     </div>
                  </div> 

                  <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-down"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ $pub->opinions->where('choice' , '=' , '2')->count() }}</div>
                     </div>
                  </div>



         @endif
 
               <div class="cat-list">
                  <a target="_blank" href="/cat/{{ $pub->category->id }}" class="cat">{{ $pub->category->{'title_'.config('app.locale')} }}</a>              
               </div>

            </div>


         </div>
         <div class="content">
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="excerpt"> {{ $pub->  text1 }}</div>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
               <br>
               
            </div>
         </div>
      </div>
      <!-- /.post-item --> 
</div>
<!-- /.massonry-post-item -->
    

@elseif ($pub->idType === 4)

<!-- massonry-post-item -->
<div class="massonry-post-item massonry-post-item2 massonry-post-item--width2">
<!-- post-item -->
<div id="{{ $pub->id }}" class="post-item v5-style zoom" >
<div class="post-thumb ">
<div class="textContent" style="background-color: {{ $input[$rand_keys[1]]  }};">
<table border="0" cellspacing="0" cellpadding="0" style="border:none;">
   <tr>


      <td width="48%" align="center" valign="bottom">
         <span class="excerpt">{{ $pub->text1 }}</span>
         <br>
         @if(Auth::user())
            @if($pub->doesUserVotedUp())
               <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
            @else
               <div class="share-icon2 {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
            @endif

                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' :  number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '')  )}} %</div>
                  </div>
               </div>
            @else 
               <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' :  number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                  </div>
         @endif
      </td>

      <td height="1px" >
         <div style="background-color:white;height:90%;width:2px;"></div>
      </td>


      <td width="48%" align="center" valign="bottom">
         <span class="excerpt">{{ $pub->text2 }}</span>
         <br>
         @if(Auth::user())
            @if($pub->doesUserVotedDown())
               <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
            @else
               <div class="share-icon2 {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
            @endif

                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') )}} %</div>
                  </div>
               </div>
            @else 
               <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                  <i class="fa fa-thumbs-up"></i>
                  <div class="mashsb-count">
                     <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                  </div>
         @endif
      </td>



   </tr>
</table>
</div> 
     



</div>
<div class="content">
<h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
<div class="post-info">
<span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
</div>
</div>
</div>
<!-- /.post-item --> 
</div>
<!-- /.massonry-post-item -->


@elseif ($pub->idType === 5)

<!-- massonry-post-item -->
<div class="massonry-post-item massonry-post-item2 massonry-post-item--width2">
<!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style" >
         
         <table>
            <tr>
               <td valign="bottom">
                  <div class="post-thumb zoom">
               <img src="{{ asset('storage/'.$pub->image1) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedUp())
                  <div class="share-icon share-icon-selected" onclick="deletevotes({{ $pub->id }})">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', ''))  }} %</div>
                     </div>
                  </div>


         @else
                   <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                     </div>
                  </div> 

         @endif
 
            </div>


         </div>



               </td>

                     <td height="1px" width="2">
                        <div style="background-color:#458bfb;height:90%;width:2px;"></div>
                     </td>


                <td valign="bottom">
                  <div class="post-thumb ">
               <img src="{{ asset('storage/'.$pub->image2) }}" />


            <div class="cat-share">


         @if(Auth::user())

               @if($pub->doesUserVotedDown())
                  <div class="share-icon share-icon-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
               @else
                     <div class="share-icon {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
               @endif
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                     </div>
                  </div>

         @else
                  <div class="share-icon" data-toggle="modal" data-target="#loginModal">
                      <i class="fa fa-thumbs-up"></i>
                     <div class="mashsb-count">
                        <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }}  %</div>
                     </div>
                  </div>



         @endif
 

            </div>


         </div>
         


               </td>


            </tr>
         </table>



         <div class="content">   
            <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
            <div class="post-info">
               <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
            </div>
         </div>
      </div>
      <!-- /.post-item --> 
</div>
<!-- /.massonry-post-item -->


@elseif ($pub->idType === 6)

<!-- massonry-post-item -->
<div class="massonry-post-item massonry-post-item2 massonry-post-item--width2">
   <!-- post-item -->
   <div id="{{ $pub->id }}" class="post-item v1-style" >
      <table>
         <tr>
            <td valign="bottom">
               <div class="post-thumb zoom">

                  <img src="{{ asset('storage/'.$pub->image1) }}" />
                  <div class="textContent textContent2" style="background-color: {{ $input[$rand_keys[1]]  }};">
                     <span>{{ $pub->text1 }}</span> 

                     <br>
                     @if(Auth::user())
                        @if($pub->doesUserVotedUp())
                           <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
                        @else
                           <div class="share-icon2 {{ ( !$pub->isEnded() ? 'upvote' : 'ended' ) }}">
                        @endif

                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') )  }} %</div>
                              </div>
                           </div>
                        @else 
                           <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '1')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '1')->count() * 100 / $pub->opinions->count(), 2, '.', '') )  }} %</div>
                              </div>
                     @endif
       </td>

                  </div>
               </div>
            </td>
            <td height="1px" width="2">
               <div style="background-color:#458bfb;height:90%;width:2px;"></div>
            </td>
            <td valign="bottom">
               <div class="post-thumb zoom">

                  <img src="{{ asset('storage/'.$pub->image2) }}" />
                  <div class="textContent textContent2" style="background-color: {{ $input[$rand_keys[0]]  }};">
                     <span>{{ $pub->text2 }}</span> 

                     <br>
                     @if(Auth::user())
                        @if($pub->doesUserVotedDown())
                           <div class="share-icon2 share-icon2-selected {{ ( !$pub->isEnded() ? 'deletevotes' : 'ended' ) }}">
                        @else
                           <div class="share-icon2 {{ ( !$pub->isEnded() ? 'downvote' : 'ended' ) }}">
                        @endif

                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '')  ) }} %</div>
                              </div>
                           </div>
                        @else 
                           <div class="share-icon2" data-toggle="modal" data-target="#loginModal">
                              <i class="fa fa-thumbs-up"></i>
                              <div class="mashsb-count">
                                 <div class="counts">{{ ($pub->opinions->where('choice' , '=' , '2')->count()  == 0 ? '0' : number_format($pub->opinions->where('choice' , '=' , '2')->count() * 100 / $pub->opinions->count(), 2, '.', '') ) }} %</div>
                              </div>
                     @endif


                  </div>
               </div>
            </td>
         </tr>
      </table>
      <div class="content">
         <h4><a target="_blank" href="/publication/{{ $pub->id }}">{{ $pub->title }}</a></h4>
         <div class="post-info">
            <span> by <span class="author"><a class="url fn n" target="_blank" href="{{ route('user.user' , $pub->user->id) }}">{{  $pub->user->fname.' '.$pub->user->lname }}</a></span></span> <span class="posted-on">{{ $pub->created_at->diffForHumans() }}</span>   <span  class="comments"><a class="url fn n" target="_blank" href="/publication/{{ $pub->id }}">{{  $pub->comments->count()}} commentaires </a>
         </div>
      </div>
   </div>
   <!-- /.post-item --> 
</div>
<!-- /.massonry-post-item -->


@endif


@endforeach
@endisset