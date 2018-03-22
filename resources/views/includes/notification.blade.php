<section class="slds-popover slds-popover_large slds-nubbin_top-right" role="dialog" aria-label="Notifications"
         id="notifications-container" aria-describedby="notifications-container"
         style="position: absolute; right: 7.5rem; display: none;">
    <div class="slds-popover__body slds-p-around_none">
        <ul>
            <li class="slds-global-header__notification slds-p-around_xx-small">
                <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                    <div class="slds-media__body">
                        <div class="slds-grid slds-grid_align-spread">
                            <a class="slds-text-link_reset slds-has-flexi-truncate slds-text-align--center">
                                <h3 class="slds-truncate"
                                    title="All Notifications">Notifications</strong>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <?php $notifications = (\App\Http\Controllers\ClientControllerHelper::getNotifications(5));?>
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
                                            <abbr class="slds-required slds-text-link" title="unread">●</abbr>
                                        </div>
                                    </div>
                                @endif
                                {{--END Unread DOT--}}
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            {{--All Notification Button--}}
            <li class="slds-global-header__notification slds-p-around_xx-small">
                <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                    <div class="slds-media__body">
                        <div class="slds-grid slds-grid_align-spread">
                            <a id="notificationButton" class="slds-text-link_reset slds-has-flexi-truncate slds-text-align--center">
                                <h3 class="slds-truncate"
                                    title="All Notifications">
                                    <strong>View all notifications</strong>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

@include('modals.notifications')
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
