<div id="{{$language}}" class="questions language" style="width : 100%">
    <div class="slds-card">
        <div class="slds-page-header">
            <div class="slds-media">
                <div class="slds-media__figure">
                           <span class="slds-icon_container slds-icon-standard-opportunity" title="Top Questions">
                              <svg class="slds-icon slds-page-header__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                      xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#opportunity"/>
                              </svg>
                           </span>
                </div>
                <div class="slds-media__body">
                    <h1 class="slds-page-header__title slds-truncate slds-align-middle" title="Top Questions">
                        Top 3 {{$language}} Questions
                    </h1>
                    <p class="slds-text-body_small slds-line-height_reset">
                        Most upvoted {{$language}} related questions of all time.
                    </p>
                </div>
            </div>
        </div>

        <ul class="slds-has-dividers_around slds-has-block-links_space" style="background: white;">
            <?php
            $i = 0;
            $postsUpvoted = \App\Http\Controllers\ClientControllerHelper::getTopQuestionsByUpvotes($language);
            foreach ($postsUpvoted as $key=>$value) {

                echo '<li class="slds-item"><a href="./post/' . $value->question_ID . '">' . $value->title . '</a></li>';
                $i++;
                if ($i == 3)
                    break;
            }

            ?>
        </ul>
    </div>
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
        <!--POSTS-->
        @foreach ($posts as $data)
            <div class="slds-card__header slds-grid">
                <div class="slds-feed" style="    width: 100%;">
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
        <br>
        <br>
        <br>
    </article>
</div>
@include('includes.modals')