
@php
  $newid = $id;
@endphp

@isset ($friends)
@php
  $newid = $friends;
@endphp
@endisset



<div id="{{  $newid }}" class="fra">
    <ul  class="nav nav-pills nav-stacked">

    <li class="{{ ($source=='profile') ? 'active' : '' }}"><a href="/user/{{ $id  }}"> <i class="fa fa-user"></i> Profile</a></li>
    <li class="{{ ($source=='pub') ? 'active' : '' }}"  }}><a href="/users/{{ $id }}"> <i class="fa fa-tags"></i> Publications</a></li>

    @php
    $user =App\User::where('id' ,$id)->first();
    @endphp


        @if($user->isMyFriend())
          <li><a class="deleteFriend" id="{{ $id }}"> <i class="fa fa-remove"></i> Supprimer de ma liste des  amis</a></li>

        @elseif($user->didInviteHim())

          <li><a class="cancelFriend" id="{{ $id }}"> <i class="fa fa-remove"></i> Annuler la demande</a></li>

        @elseif($user->didInviteMe())

          <li><a class="acceptFriend" id="{{ $id }}"> <i class="fa fa-check"></i> Accepter la demande</a></li>
          <li><a class="declineFriend" id="{{ $id }}"> <i class="fa fa-remove"></i> Refuser la demande</a></li>

        @else
          <li><a class="addFriend" id="{{ $id }}"> <i class="fa fa-plus"></i> Ajouter à ma liste des amis</a></li>

        @endif
    </ul>
</div>