@include('includes.head')
@include('includes.headerfooter')
<body>
<br/>
<br/>
<br/>
<div class="row">
    <div class="column1">
        <div class="slds-scope">
            <article class="slds-card" style = "Width:40%; margin: 8% auto;">
                <div class="slds-card__header slds-grid">
                    <div style="background-color: rgb(244, 246, 249);">
                        <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium">Upvotes<br>10<br></div>
                    </div>
                    <span class="slds-align_absolute-center slds-avatar slds-avatar_circle slds-avatar_large">
                         <img alt="Person name" src="/assets/images/avatar2.jpg" title="User avatar" />
                    </span>
                    <div class="slds-text-heading_small slds-text-body_regular slds-text-align_center slds-m-top_medium">Answers<br>20<br></div>
                </div>
                <div class="slds-media__body">
                    <div class = "slds-align_absolute-center">
                        <div class = "slds-split-view_container">
                            <dl class="slds-list_horizontal slds-wrap">
                                <dt class="slds-p-top_xx-large slds-text-align_center slds-text-heading_medium slds-item_label slds-text-color_weak slds-truncate" title="First Label">Username:</dt>
                                <dd class="slds-p-top_xx-large slds-text-align_left slds-text-heading_medium slds-item_detail slds-truncate" title="Description for first label">my username</dd>
                                <dt class="slds-text-align_center slds-text-heading_medium slds-item_label slds-text-color_weak slds-truncate" title="Second Label">Email:</dt>
                                <dd class="slds-text-align_left slds-text-heading_medium slds-item_detail slds-truncate" title="Description for second label">my email</dd>
                                <dt class="slds-text-align_center slds-text-heading_medium slds-item_label slds-text-color_weak slds-truncate" title="Second Label">Password:</dt>
                                <dd class="slds-text-align_left slds-text-heading_medium slds-item_detail slds-truncate" title="Description for second label">**********</dd>
                            </dl>
                            <div style="padding: 0.5rem; background-color: rgb(244, 246, 249); padding-left: 13cm;">
                                <button class="slds-button slds-button_icon slds-button_icon-border-filled">
                                    <svg class="slds-button__icon_small slds-button__icon" aria-hidden="false">
                                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#edit" xmlns:xlink="http://www.w3.org/1999/xlink" />
                                    </svg>
                                    <span class="slds-assistive-text">Edit user profile</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
</body>

{{--Modal Inclusion--}}
@include('modals.login')
@include('modals.register')