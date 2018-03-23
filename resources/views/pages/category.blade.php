<div id="{{$language}}" class="questions language" style="position: absolute; left: 25%; width: 50%;">
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