@include('includes.head')
@include('includes.headerfooter')
@include('includes.innerNavBar')
<body>
<div class="slds-scope">
    <article class="slds-card">
        <section class="slds-popover slds-popover_large" role="dialog" aria-label="Notifications"
                 id="notifications-container" aria-describedby="notifications-container"
                 style="position: absolute; top:10%; left: 25%; width: 100%">
            <header>
                <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small slds-text-align--center">
                    <div class="slds-media__body">
                        <div class="slds-grid slds-grid_align-spread">
                            <a class="slds-text-link_reset slds-has-flexi-truncate slds-text-align--center">
                                <h1 class="slds-truncate">Notifications</strong>
                                </h1>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <div id="notifications" class="questions slds-container_center" style="width: 100%;">
                <div class="slds-scope">
                    @if(sizeof($notifications) == 0)
                            <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small slds-text-align--center">
                                <div class="slds-media__body">
                                    <div class="slds-grid slds-grid_align-spread">
                                        <a class="slds-text-link_reset slds-has-flexi-truncate slds-text-align--center">
                                            <h1 class="slds-truncate">You have no new notification</strong>
                                            </h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    @endif
                    @foreach ($notifications as $data)
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
                                            <a href="{{url('/clearNotification/' . $data->id)}}"
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
                                                    echo \Carbon\Carbon::createFromTimestamp(strtotime($data->time))->diffForHumans();
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
                                            <div>
                                                <a href="/deleteNotification/{{$data->id}}"
                                                   class="slds-text-link_reset slds-has-flexi-truncate slds-text-align--center">
                                                    <button>
                                                        <h3 class="slds-truncate"
                                                            title="Mark all As Read">Delete Notification</strong>
                                                        </h3>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                    @endforeach
                </div>
            </div>
        </section>
    </article>
</div>
</body>
@include('includes.modals')