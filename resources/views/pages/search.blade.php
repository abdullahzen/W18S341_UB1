@include('includes.head')
@include('includes.headerfooter')
<body>
<div class="slds-scope">
    <div>
        <div id="post" class="questions" style="    width: 100%;">
            @foreach ($post as $data)
                <div class="slds-card__header slds-grid">
                    <div class="slds-feed" style="    width: 100%;">
                        <ul class="slds-feed__list">
                            <li class="slds-feed__item">
                                <article class="slds-post">
                                    <header class="slds-post__header slds-media">
                                        <div class="slds-media__figure">
                                            <a href="javascript:void(0);"
                                               class="slds-avatar slds-avatar_circle slds-avatar_large">
                                                <img src="/assets/images/avatar1.jpg" />
                                            </a>
                                        </div>
                                        <div class="slds-media__body">
                                            <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                <p>
                                                    <a href="/post/{{$data->question_ID}}">{{$data->title}}</a>
                                                    <br/>
                                                    <a href="javascript:void(0);">{{$data->username}}</a>
                                                </p>
                                            </div>
                                            <p class="slds-text-body_small"><a href="javascript:void(0);"
                                                                               title="Click for single-item view of this post"
                                                                               class="slds-text-link_reset">
                                                    <?php
                                                    echo \Carbon\Carbon::createFromTimeStamp(strtotime($data->create_time))->diffForHumans();
                                                    ?>
                                                </a>
                                            </p>
                                        </div>
                                    </header>
                                    <div class="slds-post__content slds-text-longform">
                                        <p>
                                            {{$data->content}}
                                        </p>
                                    </div>
                                    <footer class="slds-post__footer">
                                        <ul class="slds-post__footer-actions-list slds-list_horizontal">
                                            <li class="slds-col slds-item slds-m-right_medium">
                                                {{$data->upvotes}}
                                                <?php
                                                if ($data->upvotes == 0 || $data->upvotes == 1) {
                                                    echo ' point';
                                                } else {
                                                    echo ' points';
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                        <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                            <li class="slds-item">{{$data->comments}} answers</li>
                                            <li class="slds-item">{{$data->views}} views</li>
                                        </ul>
                                    </footer>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
			
        </div>
    </div>
	
</div>
</body>
<script src="{{ URL::asset('js/answer.js') }}" type="text/javascript"></script>