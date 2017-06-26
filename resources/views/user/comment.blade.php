
                <li  class="comment byuser comment-author-vast-buzz bypostauthor even">
                    <article  class="comment-body">
                        <footer class="comment-meta">
                            <div class="comment-author vcard">
                                <img src="{{ asset('/storage/'.$comment->user->photo) }}"   height='32' width='32' /> <b class="fn">{{ $comment->user->fname.' '.$comment->user->lname }}</b> </div>
                            <div class="comment-metadata">
                                <a href="#">
                                    <time>
                                        {{ $comment->created_at->toDayDateTimeString() }} </time>
                                </a>
                            </div>
                        </footer>
                        <div class="comment-content">
                            <p> {{ $comment->text }}</p>
                        </div>

                    </article>
                </li>
    