@include('includes.head')
@include('includes.headerfooter')

<body>
<div class="slds-scope">
    <div id="favModal" class="modal" style="display:block; height: 640px;">
        <div id="Java" class="questions" class="modal-content">
			<section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true" class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1" style="    width: 75%;
    padding-left: 360px;
    padding-top: 160px;">
			<header class="slds-modal__header">
								 <a href="/">
                                <span class="close" >&times;</span>
								</a>
								<br/>
                            </header>
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
                                My Favourite Questions
                            </h1>
                            <p class="slds-text-body_small slds-line-height_reset">
                                All the questions you've favourited.
                            </p>
                        </div>
                    </div>
                </div>
                {{--POSTS--}}
                @foreach ($favourites as $data)
                    <div class="slds-card__header slds-grid">
                        <div class="slds-feed">
                            <ul class="slds-feed__list">
                                <li class="slds-feed__item">
                                    <article class="slds-post">
                                        <header class="slds-post__header slds-media">
                                            <div class="slds-media__figure">
                                                <a href="javascript:void(0);"
                                                   class="slds-avatar slds-avatar_circle slds-avatar_large">
                                                    <img src="/assets/images/avatar1.jpg"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                    <p>
                                                        <a href="./post/{{$data->question_ID}}">{{$data->title}}</a>
                                                        <br/>
                                                        <a href="javascript:void(0);">{{--{{$data->username}}--}}</a>
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
                                                    <button title="Upvote this item"
                                                            class="slds-button_reset slds-post__footer-action"
                                                            aria-pressed="false">
                                                        {{$data->upvotes}}
                                                        <svg class="slds-icon slds-icon-text-default slds-icon_x-small slds-align-middle"
                                                             aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share_mobile"/>
                                                        </svg>
                                                        Upvote
                                                    </button>
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
                <br/>
            </article>
			</section>
                    <div class="slds-backdrop slds-backdrop_open"></div>
        </div>
    </div>
</div>
</body>
{{--Modal Inclusion--}}
@include('modals.login')
@include('modals.register')
@include('modals.userProfile')