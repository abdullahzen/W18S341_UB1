<div id="favModal" class="modal">
    <div class="modal-content">
        <div class="slds-scope">
            <div id="favModal" class="modal" style="display:block; height: 640px;">
                <div id="favourite" class="questions" class="modal-content">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                             class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1" style="width: 75%; padding-left: 25%; padding-top: 3%;">
                        <header class="slds-modal__header">
                            <div class="slds-page-header">
                                <span class="closeF">&times;</span>
                                <div class="slds-media">
                                    <div class="slds-media__figure">
                                       <span class="slds-icon_container slds-icon-standard-opportunity"
                                             title="All Questions">
                                          <svg class="slds-icon slds-page-header__icon" aria-hidden="true">
                                             <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                  xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#question_best"/>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="slds-media__body">
                                        <h1 class="slds-page-header__title slds-truncate slds-align-middle"
                                            title="All Questions">
                                            My Favourites
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <article class="slds-card">
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

<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
