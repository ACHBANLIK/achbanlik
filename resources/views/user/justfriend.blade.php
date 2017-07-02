  <div class="col-lg-3 bio-friends" id="{{ $user->id }}">
      <a target="_blank" href="{{ route('user.user' , $user->id) }}">
          <img src="{{ asset('/storage/'.$user->photo ) }}" alt="">
      </a>
      <p>
        <span>{{ $user->fname.' '.$user->lname }}</span>
        <br>
        <a class="action deleteFriend" ><i class="fa fa-remove"></i>Supprimer</a>
      </p>
  </div>