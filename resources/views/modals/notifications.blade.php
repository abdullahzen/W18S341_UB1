<div id="notificationModal" class="modal">
    <div class="modal-content">
        <div class="slds-scope">
            <div id="notificationModal" class="modal" style="display:block; height: 640px;">
                <div id="notifications" class="questions" class="modal-content">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                             class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1" style="    width: 75%;
    padding-left: 360px;
    padding-top: 160px;">
                        <header class="slds-modal__header">
                            <div class="slds-page-header">
                                <span class="closeN">&times;</span>
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
                                            All notifications
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <article class="slds-card">
                            <!--NOTIFICATIONS-->
                            <?php $notifications = (\App\Http\Controllers\ClientControllerHelper::getNotifications());?>
                            @foreach ($notifications as $data)
                                {{--Single Notification--}}
                                @if($data->read == 1)
                                    <li class="slds-global-header__notification slds-p-around_xx-small">
                                @endif
                                @if($data->read == 0)
                                    <li class="slds-global-header__notification slds-p-around_xx-small slds-global-header__notification_unread">
                                        @endif
                                        <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                                            <div class="slds-media__figure">
                                                {{--AVATAR--}}
                                                <span class="slds-avatar slds-avatar_small slds-avatar_circle">
                                                    <img alt="Kelly Chan" src="/assets/images/avatar3.jpg"/>
                                                </span>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-grid slds-grid_align-spread">
                                                    <a href="{{$data->url}}"
                                                       class="slds-text-link_reset slds-has-flexi-truncate">
                                                        <h3 class="slds-truncate">
                                                            <strong>{{$data->username}} {{\App\Http\Controllers\ClientControllerHelper::getNotificationTitle($data->notificationType)}}
                                                            </strong>
                                                        </h3>
                                                        <p class="slds-truncate">
                                                            {{$data->content}}
                                                        </p>
                                                        <p class="slds-m-top_x-small slds-text-color_weak">
                                                            <?php
                                                            echo \Carbon\Carbon::createFromTimeStamp(strtotime($data->time))->diffForHumans();
                                                            ?>
                                                        </p>
                                                    </a>
                                                    {{--Unread DOT--}}
                                                    @if($data->read == 0)
                                                        <div class="slds-no-flex slds-grid slds-grid_vertical">
                                                            <div class="slds-align-middle">
                                                                <abbr class="slds-required slds-text-link"
                                                                      title="unread">●</abbr>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    {{--END Unread DOT--}}
                                                </div>
                                            </div>
                                        </div>
                                    </li>
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
