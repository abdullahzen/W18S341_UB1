<div class="slds-card__header slds-grid">
    <div class="slds-feed" style="    width: 100%;">
        <ul class="slds-feed__list">
            <li class="slds-feed__item">
                <article class="slds-post">
                    <header class="slds-post__header slds-media">
                        <div class="slds-media__figure">
                            <a href="/publicProfile/{{$data->username}}"
                               class="slds-avatar slds-avatar_circle slds-avatar_large">
                                <img src="/assets/images/avatar1.jpg"/>
                            </a>
                        </div>
                        <div class="slds-media__body">
                            <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate slds-text-align--left">
                                <p>
                                    <a href="/post/{{$data->question_ID}}">{{$data->title}}</a>
                                    <br/>
                                    <a href="/publicProfile/{{$data->username}}">{{$data->username}}</a>
                                </p>
                                <p class="slds-text-body_small">
                                    <a href="javascript:void(0);" title="Click for single-item view of this post" class="slds-text-link_reset">
                                        <?php
                                            echo \Carbon\Carbon::createFromTimeStamp(strtotime($data->create_time))->toFormattedDateString();
                                        ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </header>
                    <div class="slds-post__content slds-text-longform slds-text-align--left">
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