<?php
$language = 'Java';
?>
<div id="Java" class="questions" style="width : 100%">
    <article class="slds-card">
        <div class="slds-page-header">
            <div class="slds-media">
                <div class="slds-media__figure">
                           <span class="slds-icon_container slds-icon-standard-opportunity" title="All Questions">
                              <svg class="slds-icon slds-page-header__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                      xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#question_best"/>
                              </svg>
                           </span>
                </div>
                <div class="slds-media__body">
                    <h1 class="slds-page-header__title slds-truncate slds-align-middle" title="All Questions">
                        {{$language}} Question Subsection
                    </h1>
                    <p class="slds-text-body_small slds-line-height_reset">
                        All {{$language}} related questions can be found here.
                    </p>
                </div>
            </div>
        </div>
        {{--POSTS--}}
        @foreach ($java as $post)
            <div class="slds-page-header">
                <div class="slds-media">
                    <ul class="slds-post__footer-actions-list slds-list_vertical">
                        <li class="slds-col slds-item slds-m-right_medium">
                            <button title="Upvote" class="slds-button_reset slds-post__footer-action"
                                    aria-pressed="true"
                                    onclick="window.location.href = '/post/' + {{$post->question_ID}} + '/upvote'"
                                    id="upvote">
                                <svg class="slds-icon slds-icon-text-default slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkUpvotes($post->question_ID)}} slds-icon_x-small slds-align-middle"
                                     aria-hidden="false">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowup"/>
                                </svg>
                            </button>
                        </li>
                        <li class="slds-col slds-item slds-m-right_medium">
                            {{$post->upvotes}}
                        </li>
                        <li class="slds-col slds-item slds-m-right_medium">
                            <button title="Downvote" class="slds-button_reset slds-post__footer-action"
                                    aria-pressed="false"
                                    onclick="window.location.href = '/post/' + {{$post->question_ID}} + '/downvote'"
                                    id="downvote">
                                <svg class="slds-icon slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkDownvotes($post->question_ID)}} slds-icon_x-small slds-align-middle"
                                     aria-hidden="true">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"/>
                                </svg>
                            </button>
                        </li>
                    </ul>
                    <div class="slds-media__figure">
                           <span class="slds-icon_container slds-icon-standard-opportunity" title="All Questions">
                              <svg class="slds-icon slds-page-header__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                      xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#question_best"/>
                              </svg>
                           </span>
                    </div>
                    <div class="slds-media__body">
                        <h1 class="slds-page-header__title slds-truncate slds-align-middle" title="All Questions">
                            <a href = "/post/{{$post->question_ID}}">{{$post->title}}</a>
                        </h1>
                        <h5>
                            (<?php
                            //Update this
                            switch ($post->category_ID1) {
                                case 1:
                                    echo 'Java';
                                    break;
                                case 2:
                                    echo 'Javascript';
                                    break;
                                case 3:
                                    echo 'PHP';
                                    break;
                                case 4:
                                    echo 'C';
                                    break;
                                default:
                                    break;
                            }
                            ?>)
                            submitted
                            <?php
                            echo \Carbon\Carbon::createFromTimeStamp(strtotime($post->create_time))->diffForHumans();
                            ?>
                            by <a href="javascript:void(0);">{{$post->username}}</a>
                        </h5>
                    </div>
                </div>
            </div>
        @endforeach
        <br/>
    </article>
</div>
