<div id="editProfileModal" class="modal">
    <div class="modal-content">
        <form action="/editProfile" id="editProfileForm" method="post">
            {{ csrf_field() }}
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
                                <button class="closeUP slds-button slds-button__icon_left">
                                    <svg class="slds-button__icon" aria-hidden="true">
                                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink" />
                                    </svg>
                                    <span class="slds-assistive-text">Exit Edit User Profile</span>
                                </button>
                                <div style="background-color: rgb(244, 246, 249);">
                                    <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium slds-theme_alert-texture"">
                                    <strong>Upvotes</strong><br>10<br></div>
                            </div>
                            <span class="slds-align_absolute-center slds-avatar slds-avatar_circle slds-avatar_large">
                                    <img alt="Person name" src="/assets/images/avatar2.jpg" title="User avatar"/>
                                </span>
                            <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium slds-theme_alert-texture">
                                <strong>Answers</strong><br>20<br></div>
                </div>
                <div class="slds-media__body">
                    <div class="slds-align_absolute-center">
                        <div class="slds-split-view_container" style="padding-left: 2cm;">
                            <dl class="slds-list_horizontal slds-wrap">
                                <dt class="slds-p-top_xx-large slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak slds-truncate"
                                    title="First Label" style="padding-top: 16mm;"><strong>Username:</strong>
                                </dt>
                                <dd class="slds-p-top_xx-large slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate"
                                    title="Description for first label" style="padding-left: 1cm;">
                                    <input type="text" class="form-control input-md" style="width:60%;" name="userName" id="userName" value="{{\App\Http\Controllers\ClientControllerHelper::getUserDataFromDB('username')}}"/>
                                </dd>
                                <dt class="slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak slds-truncate"
                                    title="Second Label" style="padding-top: 2.6mm;"><strong>Email:</strong>
                                </dt>
                                <dd class="slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate"
                                    title="Description for second label" style="padding-left: 1cm;">
                                    <input type="text" class="form-control input-md" style="width:60%;" name="email" id="email" value="{{\App\Http\Controllers\ClientControllerHelper::getUserDataFromDB('email')}}"/>
                                </dd>
                                <dt class="slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak slds-truncate"
                                    title="Second Label" style="padding-top: 2.6mm;"><strong>Password:</strong>
                                </dt>
                                <dd class="slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate" style="padding-left: 1cm;">
                                    <input type="text" class="form-control input-md" style="width:60%;" name="password" id="password" value="" placeholder="**********"/>
                                </dd>
                                <dt class="slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak"
                                    title="Second Label" style="font-size-adjust: inherit"><strong>Enter New Password:</strong>
                                </dt>
                                <dd class="slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate" style="padding-left: 1cm;">
                                    <input type="text" class="form-control input-md" style="width:60%;" name="newPassword" id="newPassword" value="" placeholder="Enter new password"/>
                                </dd>
                                <dt class="slds-text-align_center slds-text-heading_small slds-item_label slds-text-color_weak"
                                    title="Second Label" style="font-size-adjust: inherit"><strong>Re-enter New Password:</strong>
                                </dt>
                                <dd class="slds-text-align_left slds-text-heading_small slds-item_detail slds-truncate" style="padding-left: 1cm;">
                                    <input type="text" class="form-control input-md" style="width:60%;" name="newPasswordConfirmation" id="newPasswordConfirmation" value="" placeholder="Re-enter new password"/>
                                </dd>
                            </dl>
                            <div style="padding: 0.5rem; background-color: rgb(244, 246, 249); padding-left: 11cm;">
                                <input type="submit" id="editProfileButton" class="slds-button slds-button_icon slds-button_icon-border-filled" value="Save" style="width: 1.5cm;"/>
                            </div>
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
<link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet"
      type="text/css">
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<script src="{{URL::asset('js/editProfile.js')}}"></script>
