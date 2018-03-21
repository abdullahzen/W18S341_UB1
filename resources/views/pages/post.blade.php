@include('includes.head')
@include('includes.headerfooter')
<body>
<div class="slds-scope">
    <div>
        <div id="post" class="questions" style="    width: 100%;">
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
                                Title: {{$post->title}}
                            </h1>
                            <p class="slds-text-body_small slds-line-height_reset">
                                Category
                                <?php
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
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                {{--POSTS--}}
                <div class="slds-card__header slds-grid">
                    <div class="slds-feed" style="    width: 100%;">
                        <ul class="slds-feed__list">
                            <li class="slds-feed__item">
                                <article class="slds-post">
                                    <header class="slds-post__header slds-media">
                                        <ul class="slds-post__footer-actions-list slds-list_vertical slds-list" style="padding-top: 5mm;">
                                                <li class="slds-col slds-item slds-m-right_medium">
                                                    <button title="Upvote" class="slds-button_reset slds-post__footer-action" aria-pressed="true" onclick="window.location.href = '/post/' + {{$post->question_ID}} + '/upvote'" id="upvote">
                                                        <svg class="slds-icon slds-icon-text-default slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkUpvotes($post->question_ID)}} slds-icon_x-small slds-align-middle"
                                                             aria-hidden="false">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowup"/>
                                                        </svg>
                                                    </button>
                                                </li>
                                                <li class="slds-col slds-item slds-m-left--card-wrapper-spacing">
                                                    {{$post->upvotes}}
                                                </li>
                                                <li class="slds-col slds-item slds-m-right_medium">
                                                    <button title="Downvote" class="slds-button_reset slds-post__footer-action" aria-pressed="false" onclick="window.location.href = '/post/' + {{$post->question_ID}} + '/downvote'" id="downvote">
                                                        <svg class="slds-icon slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkDownvotes($post->question_ID)}} slds-icon_x-small slds-align-middle"
                                                             aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"/>
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        <div class="slds-media__figure" style="padding-top: 5mm;">
                                            <a href="javascript:void(0);"
                                               class="slds-avatar slds-avatar_circle slds-avatar_large">
                                                <img alt="Jason Rodgers" src="/assets/images/avatar1.jpg"
                                                     title="Jason Rodgers avatar"/>
                                            </a>
                                        </div>
                                        <div class="slds-media__body">
                                            <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate" style="padding-top: 5mm;">
                                                <p>
                                                    <a href="javascript:void(0);">{{$post->username}}</a>
                                                </p>
                                                {{--<button class="slds-button slds-button_icon slds-button_icon-container slds-button_icon-x-small"--}}
                                                        {{--aria-haspopup="true" title="More-Options" id="More-Options" name="More-Options">--}}
                                                    {{--<span class="More-Options">--}}
                                                    {{--<svg class="slds-button__icon" aria-hidden="false">--}}
                                                        {{--<use xmlns:xlink="http://www.w3.org/1999/xlink"--}}
                                                             {{--xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>--}}
                                                    {{--</svg>--}}
                                                        {{--</span>--}}
                                                    {{--<span class="slds-assistive-text">More Options</span>--}}
                                                {{--</button>--}}
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
                                                             style="position: absolute; right: 0px; top: 55px; width: 23%; height: 2cm; display: none;">
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
                                                                    <button class="slds-button slds-button_reset slds-p-vertical_xx-small slds-size_1-of-1" onclick="window.location.href = '/post/' + {{$post->question_ID}} + '/delete'" id="deleteQuestion">
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
                                                                 style="position: absolute; right: 0px; top: 55px; width: 23%; height: 1cm; display: none;">
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
                                                                            @if(\App\Http\Controllers\ClientController::isFavourite($post->question_ID) == false)
                                                                                Favourite
                                                                            @endif
                                                                            @if(\App\Http\Controllers\ClientController::isFavourite($post->question_ID))
                                                                                Unfavourite
                                                                            @endif
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                            </footer>
                                                        </section>
                                                    @endif
                                            </div>
                                            <p class="slds-text-body_small"><a href="javascript:void(0);"
                                                                               title="Click for single-item view of this post"
                                                                               class="slds-text-link_reset">
                                                    <?php
                                                    echo \Carbon\Carbon::createFromTimeStamp(strtotime($post->create_time))->diffForHumans();
                                                    ?>
                                                </a>
                                            </p>
                                        </div>
                                    </header>
                                    <div class="slds-post__content slds-text-longform" style="padding-left: 1.5cm;">
                                        <p>
                                            {{$post->content}}
                                        </p>
                                    </div>
                                    <footer class="slds-post__footer">
                                        <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                            <li class="slds-item">{{$post->comments}} answers</li>
                                            <li class="slds-item">{{$post->views}} views</li>
                                        </ul>
                                    </footer>
                                </article>
                                <br/>
                                {{--Answers--}}
                                <div class="slds-feed__item-comments">
                                    <ul>
                                        <li>
                                            @foreach($answer as $a)
                                            <article class="slds-comment slds-media slds-hint-parent">
                                                <div class="slds-media__figure">
                                                    <a href="javascript:void(0);"
                                                       class="slds-avatar slds-avatar_circle slds-avatar_medium">
                                                        <img alt="Jenna Davis" src="/assets/images/avatar2.jpg" title="Jenna Davis avatar"/>
                                                    </a>
                                                </div>
                                                <div class="slds-media__body">
                                                    <header class="slds-media slds-media_center">
                                                        <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                            <p class="slds-truncate">
                                                                <a href="javascript:void(0);">
                                                                    {{$a->username}}
                                                                </a>
                                                                @if($a->answer_ID == $post->best_answer_ID)
                                                                    <svg class="slds-icon slds-icon-text-warning slds-icon-text-warning slds-icon_x-small slds-align-middle"
                                                                         aria-hidden="false">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check"/>
                                                                    </svg>
                                                                @endif
                                                            </p>
                                                            @if($a->answer_ID == $post->best_answer_ID && session()->get('username') == $post->username)
                                                                <button title="Revoke Best Answer" class="slds-button_reset slds-post__footer-action" aria-pressed="false" onclick="window.location.href = '/post/unbestanswer/' + {{$post->question_ID}} + '/' + {{$a->answer_ID}} +  '/'">
                                                                    <svg class="slds-icon slds-icon-text-error slds-icon_x-small slds-align-middle"
                                                                         aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#redo"/>
                                                                    </svg>
                                                                </button>
                                                            @endif
                                                            @if($a->answer_ID != $post->best_answer_ID && session()->get('username') == $post->username)
                                                            <button title="Mark as Best Answer" class="slds-button_reset slds-post__footer-action" aria-pressed="false" onclick="window.location.href = '/post/bestanswer/' + {{$post->question_ID}} + '/' + {{$a->answer_ID}} +  '/'">
                                                                <svg class="slds-icon slds-icon-text-warning slds-icon_x-small slds-align-middle"
                                                                     aria-hidden="true">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#check"/>
                                                                </svg>
                                                            </button>
                                                            @endif
                                                        </div>
                                                    </header>
                                                    <div class="slds-comment__content slds-text-longform">
                                                        {{$a->answer}}
                                                    </div>
                                                    <footer>
                                                        <ul class="slds-post__footer-actions-list slds-list_horizontal" style="align-items: left; float: left;">
                                                            <li class="slds-item">
                                                                <button title="Upvote" class="slds-button_reset slds-post__footer-action" aria-pressed="true" onclick="window.location.href = '/post/' + {{$a->answer_ID}} + '/' + {{$post->question_ID}} + '/upvoteA'">
                                                                    <svg class="slds-icon slds-icon-text-default slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkUpvotesA($a->answer_ID)}} slds-icon_x-small slds-align-middle"
                                                                         aria-hidden="false">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowup"/>
                                                                    </svg>
                                                                </button>
                                                            </li>
                                                            <li class="slds-item" style="padding-right: 5mm;">
                                                                {{$a->upvotes}}
                                                            </li>
                                                            <li class="slds-item">
                                                                <button title="Downvote" class="slds-button_reset slds-post__footer-action" aria-pressed="false" onclick="window.location.href = '/post/' + {{$a->answer_ID}} + '/' + {{$post->question_ID}} +  '/downvoteA'">
                                                                    <svg class="slds-icon slds-icon-text-{{\App\Http\Controllers\ClientControllerHelper::checkDownvotesA($a->answer_ID)}} slds-icon_x-small slds-align-middle"
                                                                         aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#arrowdown"/>
                                                                    </svg>
                                                                </button>
                                                            </li>
                                                            <li class="slds-item">
                                                            </li>
                                                            <li class="slds-item">
                                                            </li>
                                                            <li class="slds-item">
                                                            </li>
                                                            <li class="slds-item">
                                                            </li>
                                                            <li class="slds-item">
                                                            </li>
                                                            <li class="slds-item">
                                                            </li>
                                                            <li class="slds-item">
                                                            </li>
                                                            <li class="slds-item">
                                                                <?php
                                                                echo \Carbon\Carbon::createFromTimeStamp(strtotime($a->create_time))->diffForHumans();
                                                                ?>
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
                                            <div class="slds-media__figure">
                                                <a class="slds-avatar slds-avatar_circle slds-avatar_medium"
                                                   href="javascript:void(0);">
                                                    <img alt="Person name" src="/assets/images/avatar2.jpg"
                                                         title="User avatar"/>
                                                </a>
                                            </div>
                                                <div class="slds-media__body">
                                                    {{--ANSWER FIELD--}}
                                                    <form class="form-horizontal" action="/post/{{$post->question_ID}}/newanswer" method="post" id="answerForm" onKeyup="checkForm()">
                                                        {{csrf_field()}}
                                                        <div class="slds-publisher slds-publisher_comment slds-is-active slds-has-focus">
                                                            <label for="comment-text-input-01" class="slds-assistive-text">Write a answer</label>
                                                            <input type="text" id="content" name="content" class="slds-publisher__input slds-input_bare slds-text-longform" placeholder="Post your answer here"></input>
                                                            <div class="slds-publisher__actions slds-grid slds-grid_align-spread">
                                                                <ul class="slds-grid">
                                                                </ul>
                                                                <input type="submit" id="newAnswerButton" class="slds-button slds-button_brand" value="Post" disabled />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
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
