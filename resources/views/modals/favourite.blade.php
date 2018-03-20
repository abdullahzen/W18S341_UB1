<div id="favModal" class="modal">
    <div class="modal-content">
        <div class="slds-scope">
            <div id="favModal" class="modal" style="display:block; height: 640px;">
                <div id="favourite" class="questions" class="modal-content">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                             class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1" style="    width: 75%;
    padding-left: 360px;
    padding-top: 160px;">
                        <header class="slds-modal__header">
                            <div class="slds-card__header slds-grid">
                                <button class="closeF slds-button slds-button__icon_left">
                                    <svg class="slds-button__icon" id="closeF" aria-hidden="true">
                                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#close"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"/>
                                    </svg>
                                    <span class="slds-assistive-text">Exit Edit User Profile</span>
                                </button>
                            </div>
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
                                        <h1 class="slds-page-header__title slds-truncate slds-align-middle"
                                            title="All Questions">
                                            My Favourite Questions
                                        </h1>
                                        <p class="slds-text-body_small slds-line-height_reset">
                                            All the questions you've favourited.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--POSTS-->
                            <?php $favourites = (\App\Http\Controllers\ClientControllerHelper::getFavourites());?>
                            @foreach ($favourites as $data)
                                @include('includes.postbox', ['data' => $data])
                            @endforeach
                            <br/>
                        </article>
                    </section>
                    <div class="slds-backdrop slds-backdrop_open"></div>
                </div>
            </div>
        </div>
    </div>
</div>