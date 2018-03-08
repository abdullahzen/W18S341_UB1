@include('includes.head')
@include('includes.headerfooter')
<body>
<div class="slds-scope">
    <div>
        <div id="post" class="questions" style="    width: 100%;">
            <article class="slds-card">
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
                                {{$post->title}}
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
                {{--POSTS--}}
                <ul class="slds-feed__list">
                    <li class="slds-feed__item">
                        <article style="padding: 0.75rem 1rem;">
                            <div class="slds-post__content slds-text-longform">
                                <p>
                                    {{ $post->content }}
                                </p>
                            </div>
                            <div class="slds-media__body">
                            </div>
                            </header>
                            <footer class="slds-post__footer">
                                <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                    <li class="slds-item">{{$post->comments}} answers</li>
                                    <li class="slds-item">{{$post->views}} views</li>
                                    <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                        @if (session()->get('username') == $post->username)
                                            <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                    aria-haspopup="true" title="More-Options" id="More-Options"
                                                    name="More-Options">
                                                        <span class="More-Options">
                                                        <svg class="slds-button__icon" aria-hidden="false">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                        </svg>
                                                        </span>
                                                <span class="slds-assistive-text">More Options</span>
                                            </button>
                                            <section class="slds-popover slds-nubbin_top-right slds-dynamic-menu"
                                                     id="More-Options-Container"
                                                     role="dialog" aria-label="More-Options"
                                                     aria-describedby="More-Options-Container"
                                                     style="position: absolute; right: 12px; top: 250px; width: 10%; height: 1.8cm; display: none;">
                                                <footer class="slds-popover__footer">
                                                    <ul>
                                                        <li>
                                                            <button class="slds-button slds-button_reset slds-p-vertical_xx-small slds-size_1-of-1"
                                                                    id="editQuestionButton">
                                                                <svg class="slds-button__icon slds-button__icon_left"
                                                                     aria-hidden="true">
                                                                    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#edit"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"/>
                                                                </svg>
                                                                Edit
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="slds-button slds-button_reset slds-p-vertical_xx-small slds-size_1-of-1">
                                                                <svg class="slds-button__icon slds-button__icon_left"
                                                                     aria-hidden="true">
                                                                    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#delete"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"/>
                                                                </svg>
                                                                Delete
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </footer>
                                            </section>
                                        @endif
                                        @if (session()->has('id') && session()->get('username') != $post->username)
                                            <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                    aria-haspopup="true" title="More-Options" id="More-Options"
                                                    name="More-Options">
                                                    <span class="More-Options">
                                                    <svg class="slds-button__icon" aria-hidden="false">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                    </svg>
                                                    </span>
                                                <span class="slds-assistive-text">More Options</span>
                                            </button>
                                            <section class="slds-popover slds-nubbin_top-right slds-dynamic-menu"
                                                     id="More-Options-Container"
                                                     role="dialog" aria-label="More-Options"
                                                     aria-describedby="More-Options-Container"
                                                     style="position: absolute; right: 12px; top: 250px; width: 10%; height: 1cm; display: none;">
                                                <footer class="slds-popover__footer">
                                                    <ul>
                                                        <li>
                                                            <button class="slds-button slds-button_reset slds-p-vertical_xx-small slds-size_1-of-1"
                                                                    id="favouriteButton"
                                                                    onclick="window.location.href = '/post/' + {{$post->question_ID}} + '/favourite'">
                                                                <svg class="slds-button__icon slds-button__icon_left"
                                                                     aria-hidden="true">
                                                                    <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#favorite"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"/>
                                                                </svg>
                                                                Favourite
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </footer>
                                            </section>
                                        @endif
                                    </div>
                                </ul>
                            </footer>
                        </article>
                        <br/>
                        <div class="slds-feed__item-comments">
                            {{--ANWERS--}}
                            <ul>
                                <li>
                                    @foreach($answer as $a)
                                        <article class="slds-comment slds-media slds-hint-parent">
                                            <div class="slds-media__body">
                                                <header class="slds-media slds-media_center">
                                                    <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                        <p class="slds-truncate">
                                                            <a href="javascript:void(0);">
                                                                {{$a->username}}
                                                            </a>
                                                            <?php
                                                            echo \Carbon\Carbon::createFromTimeStamp(strtotime($a->create_time))->diffForHumans()
                                                            ?>
                                                        </p>
                                                        <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                                aria-haspopup="true" title="More Options">
                                                            <svg class="slds-button__icon" aria-hidden="true">
                                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                            </svg>
                                                            <span class="slds-assistive-text">More Options</span>
                                                        </button>
                                                    </div>
                                                </header>
                                                <div class="slds-comment__content slds-text-longform">
                                                    {!! $a->answer !!}
                                                </div>
                                                <footer>
                                                    <ul class="slds-post__footer-actions-list slds-listbox_horizontal"
                                                        style="align-items: left;">
                                                        <li class="slds-item">
                                                            <button title="Upvote"
                                                                    class="slds-button_reset slds-post__footer-action"
                                                                    aria-pressed="true"
                                                                    onclick="window.location.href = '/post/' + {{$a->answer_ID}} + '/' + {{$post->question_ID}} + '/upvoteA'">
                                                                <svg class="slds-icon slds-icon-text-default slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkUpvotesA($a->answer_ID)}} slds-icon_x-small slds-align-middle"
                                                                     aria-hidden="false">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowup"/>
                                                                </svg>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            {{$a->upvotes}}
                                                        </li>
                                                        <li class="slds-item"></li>
                                                        <li class="slds-item"></li>
                                                        <li class="slds-item"></li>
                                                        <li class="slds-item"></li>
                                                        <li class="slds-item">
                                                            <button title="Downvote"
                                                                    class="slds-button_reset slds-post__footer-action"
                                                                    aria-pressed="false"
                                                                    onclick="window.location.href = '/post/' + {{$a->answer_ID}} + '/' + {{$post->question_ID}} +  '/downvoteA'">
                                                                <svg class="slds-icon slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkDownvotesA($a->answer_ID)}} slds-icon_x-small slds-align-middle"
                                                                     aria-hidden="true">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"/>
                                                                </svg>
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </footer>
                                            </div>
                                        </article>
                                    @endforeach
                                </li>
                            </ul>
                            {{--COMMENTS START HERE--}}
                            @if (session()->has('id'))
                                <div class="slds-media slds-comment slds-hint-parent">
                                    <div class="slds-media__body">
                                        {{--ANSWER FIELD--}}
                                        <form class="form-horizontal" method="POST"
                                              action="/post/{{$post->question_ID}}/newanswer" id="answerForm"
                                              onKeyup="checkForm()">
                                            {{csrf_field()}}
                                            <div class="slds-publisher slds-publisher_comment slds-is-active slds-has-focus">
                                                <label for="comment-text-input-01" class="slds-assistive-text">Write a
                                                    answer</label>
                                                <input type="text" id="content" name="content"
                                                       class="slds-publisher__input slds-input_bare slds-text-longform"
                                                       placeholder="Post your answer here"></input>
                                                <div class="slds-publisher__actions slds-grid slds-grid_align-spread">
                                                    <ul class="slds-grid">
                                                    </ul>
                                                    <input type="submit" id="newAnswerButton"
                                                           class="slds-button slds-button_brand" value="Post" disabled/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </li>
                </ul>
            </article>
        </div>
    </div>
</div>
</body>
{{--Modal Inclusion--}}
@include('modals.login')
@include('modals.register')
@include('modals.userProfile')
@include('modals.edit')
@include('modals.editProfile')
<script src="{{ URL::asset('js/answer.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/postStats.js') }}" type="text/javascript"></script>
