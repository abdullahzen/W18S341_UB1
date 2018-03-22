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
            foreach ($postsUpvoted as $key => $value) {

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
            @include('includes.postbox', ['data' => $data])
        @endforeach
        <br>
        <br>
        <br>
    </article>
</div>
<script src="{{URL::asset('js/mainpage.js')}}"></script>