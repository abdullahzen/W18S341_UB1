<div id="rankModal" class="modal">
    <div class="modal-content">
        <body>
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="column1">
                <div class="slds-scope">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                             class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <article class="slds-card" style="Width:40%; margin: 8% auto;">
                            <div class="slds-card__header slds-grid">
                                <button class="closeU slds-button slds-button__icon_left">
                                    <svg class="slds-button__icon" aria-hidden="true">
                                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink" />
                                    </svg>
                                    <span class="slds-assistive-text">Exit Rankings</span>
                                </button>

                                <span class="slds-icon_container slds-icon-standard-account" title="Description of icon when needed">
                                    <svg class="slds-icon" aria-hidden="true">
                                         <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#account" />
                                    </svg>
                                <span class="slds-assistive-text">Displaying rankings!</span>
                                </span>

                <div class="slds-media__body">
                    <div class="slds-align_absolute-center">
                        <div class="slds-split-view_container" style="padding-left: 4cm;">
                            <table class="slds-table slds-table_bordered slds-table_cell-buffer slds-table_striped">
                                <thead>
                                <tr class="slds-text-title_caps">
                                    <th scope="col">
                                        <div class="slds-truncate" title="user_ID">User ID</div>
                                    </th>
                                    <th scope="col">
                                        <div class="slds-truncate" title="username">Username</div>
                                    </th>
                                    <th scope="col">
                                        <div class="slds-truncate" title="rank">Rank</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row" data-label="user_ID">
                                        <div class="slds-truncate" title="User_ID">{{\App\Http\Controllers\ClientControllerHelper::getUserDataFromDB('user_ID')}}</div>
                                    </th>
                                    <td data-label="username">
                                        <div class="slds-truncate" title="username">{{\App\Http\Controllers\ClientControllerHelper::getUserDataFromDB('username')}}</div>
                                    </td>
                                    <td data-label="rank">
                                        <div class="slds-truncate" title="rank">{{\App\Http\Controllers\ClientController::getRanks('rank')}}</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>>

                        </div>
                    </div>
                </div>
                </article>
                </section>
                <div class="slds-backdrop slds-backdrop_open"></div>
            </div>
        </div>
    </div>
    </body>
    </div>
</div>
</div>
</div>

<link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet"
      type="text/css">
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}"></script>

