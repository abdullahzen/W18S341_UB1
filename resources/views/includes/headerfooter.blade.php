   @include('includes.head')
   <body>
      <div class="slds-scope">
         <div class="demo-only" style="height: 0.001rem;">
            <div class="demo-only" style="height: 28.571rem;">
               <header class="slds-global-header_container">
                  <a href="javascript:void(0);" class="slds-assistive-text slds-assistive-text_focus">Skip to Navigation</a><a href="javascript:void(0);" class="slds-assistive-text slds-assistive-text_focus">Skip to Main Content</a>
                  <div class="slds-global-header slds-grid slds-grid_align-spread">
                     <div class="slds-global-header__item">
                        <ul class="slds-global-header__item slds-grid slds-grid_vertical-align-center">
                           <li class="slds-grid">
                              <div class="slds-context-bar__icon-action">
                                 <button class="slds-button slds-icon-waffle_container slds-context-bar__button" title="Description of the icon when needed" {{--onclick="displaycategories();"--}}>
                                 <span class="slds-icon-waffle">
                                 <span class="slds-r1"></span>
                                 <span class="slds-r2"></span>
                                 <span class="slds-r3"></span>
                                 <span class="slds-r4"></span>
                                 <span class="slds-r5"></span>
                                 <span class="slds-r6"></span>
                                 <span class="slds-r7"></span>
                                 <span class="slds-r8"></span>
                                 <span class="slds-r9"></span>
                                 </span>
                                 <span class="slds-assistive-text">Open App Launcher</span>
                                 </button>
                              </div>
                           </li>
                           <li class="slds-grid">
                              <div class="slds-global-header__logo">
                                 <img src="../assets/images/logo_new.svg" alt="Smiley face" height="80" width="80">
                              </div>
                           </li>
                           <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                              <div class="slds-button-group" role="group">
                                 <button class="slds-button slds-button_neutral" onclick="location.href='..'">Home</button>

                                  @if(session()->has('username'))
                                    <button class="slds-button slds-button_neutral" onclick="window.location.href='../post'">New Post</button>
                                  @else
                                    <button class="slds-button slds-button_neutral" id="registerButton">Register</button>
                                    <button class="slds-button slds-button_neutral" id="loginButton">Login</button>
                                  @endif
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="slds-global-header__item">
                        <div class="slds-global-header__logo"></div>
                     </div>
                     <div class="slds-global-header__item slds-global-header__item_search" style="margin-right: 33%;">
                        <div aria-expanded="false" aria-haspopup="listbox" class="slds-form-element slds-lookup" role="combobox">
                           <label class="slds-assistive-text" for="global-search-01">Search Salesforce</label>
                           <div class="slds-form-element__control slds-input-has-icon slds-input-has-icon_left-right">
                              <svg class="slds-input__icon slds-input__icon_left" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#search" />
                              </svg>
                              <input type="text" aria-autocomplete="list" aria-controls="global-search-list-01" autocomplete="off" class="slds-input slds-lookup__search-input" id="global-search-01" placeholder="Search" role="textbox" />
                           </div>
                        </div>
                     </div>
                     @if(session()->has('id'))
                     <ul class="slds-global-header__item slds-grid slds-grid_vertical-align-center">
                        <li class="slds-grid">
                           <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon-favorites" aria-pressed="false" title="Toggle Favorites">
                              <svg class="slds-button__icon slds-global-header__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#favorite" />
                              </svg>
                              <span class="slds-assistive-text">Toggle Favorite</span>
                           </button>
                           <span class="slds-dropdown-trigger slds-dropdown-trigger_click">
                              <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon slds-m-left_none" title="View Favorites">
                                 <svg class="slds-button__icon" aria-hidden="true">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#chevrondown" />
                                 </svg>
                                 <span class="slds-assistive-text">View Favorites</span>
                              </button>
                           </span>
                        </li>
                        <li class="slds-dropdown-trigger slds-dropdown-trigger_click slds-p-horizontal_xxx-small">
                           <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-small slds-button_icon-container slds-button_icon-x-small slds-global-header__button_icon-actions slds-m-horizontal_xx-small" title="Global Actions">
                              <svg class="slds-button__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#add" />
                              </svg>
                              <span class="slds-assistive-text">Global Actions</span>
                           </button>
                        </li>
                        <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                           <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon" title="Help and Training">
                              <svg class="slds-button__icon slds-global-header__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#question" />
                              </svg>
                              <span class="slds-assistive-text">Help and Training</span>
                           </button>
                        </li>
                        <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                           <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon" id="userProfileButton" title="Setup">
                              <svg class="slds-button__icon slds-global-header__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#setup" />
                              </svg>
                              <span class="slds-assistive-text">Setup</span>
                           </button>
                        </li>
                        <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                           <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon" title="Notifications" id="Notifications">
                              <svg class="slds-button__icon slds-global-header__icon" aria-hidden="true">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#notification" />
                              </svg>
                              <span class="slds-assistive-text">Notifications</span>
                           </button>
                        </li>
                        <li class="slds-dropdown-trigger slds-dropdown-trigger_click slds-m-left_x-small">
                           <button class="slds-button" aria-haspopup="true">
                           <span class="slds-avatar slds-avatar_circle slds-avatar_medium">
                           <img alt="Person name" src="/assets/images/avatar2.jpg" title="User avatar" />
                           </span>
                           </button>
                        </li>
                         {{session()->get('username')}}
                        <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                            <a href="/logout">
                               <button class="slds-button slds-button_icon slds-button_icon slds-button_icon-container slds-button_icon-small slds-global-header__button_icon" title="Logout" id="logout">
                               <img src="../assets/icons/utility/logout_60.png" alt="Smiley face" height="17" width="17">
                               <span class="slds-assistive-text">Logout</span>
                               </button>
                            </a>
                        </li>
                        </ul>
                     </div>
                  <section class="slds-popover slds-popover_large slds-nubbin_top-right" role="dialog" aria-label="Notifications" id="notifications-container"  aria-describedby="notifications-container" style="position: absolute; right: 5.125rem; display: none;">
                     <div  class="slds-popover__body slds-p-around_none">
                        <ul>
                           <li class="slds-global-header__notification slds-p-around_xx-small slds-global-header__notification_unread">
                              <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                                 <div class="slds-media__figure">
                                    <span class="slds-avatar slds-avatar_small slds-avatar_circle">
                                    <img alt="Kelly Chan" src="/assets/images/avatar3.jpg" title="Kelly Chan avatar" />
                                    </span>
                                 </div>
                                 <div class="slds-media__body">
                                    <div class="slds-grid slds-grid_align-spread">
                                       <a href="javascript:void(0);" class="slds-text-link_reset slds-has-flexi-truncate">
                                          <h3 class="slds-truncate" title="Kelly Chan mentioned you in a comment:">
                                             <strong>Kelly Chan mentioned you in a comment:</strong>
                                          </h3>
                                          <p class="slds-truncate" title="I need you to review this for me @Paulina">I need you to review this for me @Paulina</p>
                                          <p class="slds-m-top_x-small slds-text-color_weak">10m ago</p>
                                       </a>
                                       <div class="slds-no-flex slds-grid slds-grid_vertical">
                                          <div class="slds-dropdown-trigger slds-dropdown-trigger_click slds-is-open">
                                             <button class="slds-button slds-button_icon slds-button_icon-border-filled slds-button_icon-x-small" aria-haspopup="true" title="Show More">
                                                <svg class="slds-button__icon" aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down" />
                                                </svg>
                                                <span class="slds-assistive-text">Show More</span>
                                             </button>
                                          </div>
                                          <div class="slds-align-middle">
                                             <abbr class="slds-required slds-text-link" title="unread">●</abbr>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="slds-global-header__notification slds-p-around_xx-small">
                              <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                                 <div class="slds-media__figure">
                                    <span class="slds-avatar slds-avatar_small slds-avatar_circle">
                                    <img alt="Kelly Chan" src="/assets/images/avatar3.jpg" title="Kelly Chan avatar" />
                                    </span>
                                 </div>
                                 <div class="slds-media__body">
                                    <div class="slds-grid slds-grid_align-spread">
                                       <a href="javascript:void(0);" class="slds-text-link_reset slds-has-flexi-truncate">
                                          <h3 class="slds-truncate" title="Kelly Chan mentioned you in a comment:">
                                             <strong>Kelly Chan mentioned you in a comment:</strong>
                                          </h3>
                                          <p class="slds-truncate" title="I need you to review this for me @Paulina">I need you to review this for me @Paulina</p>
                                          <p class="slds-m-top_x-small slds-text-color_weak">10m ago</p>
                                       </a>
                                       <div class="slds-no-flex slds-grid slds-grid_vertical">
                                          <div class="slds-dropdown-trigger slds-dropdown-trigger_click slds-is-open">
                                             <button class="slds-button slds-button_icon slds-button_icon-border-filled slds-button_icon-x-small" aria-haspopup="true" title="Show More">
                                                <svg class="slds-button__icon" aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down" />
                                                </svg>
                                                <span class="slds-assistive-text">Show More</span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="slds-global-header__notification slds-p-around_xx-small">
                              <div class="slds-media slds-has-flexi-truncate slds-p-around_x-small">
                                 <div class="slds-media__figure">
                                    <span class="slds-avatar slds-avatar_small slds-avatar_circle">
                                    <img alt="Kelly Chan" src="/assets/images/avatar3.jpg" title="Kelly Chan avatar" />
                                    </span>
                                 </div>
                                 <div class="slds-media__body">
                                    <div class="slds-grid slds-grid_align-spread">
                                       <a href="javascript:void(0);" class="slds-text-link_reset slds-has-flexi-truncate">
                                          <h3 class="slds-truncate" title="Kelly Chan mentioned you in a comment:">
                                             <strong>Kelly Chan mentioned you in a comment:</strong>
                                          </h3>
                                          <p class="slds-truncate" title="I need you to review this for me @Paulina">I need you to review this for me @Paulina</p>
                                          <p class="slds-m-top_x-small slds-text-color_weak">10m ago</p>
                                       </a>
                                       <div class="slds-no-flex slds-grid slds-grid_vertical">
                                          <div class="slds-dropdown-trigger slds-dropdown-trigger_click slds-is-open">
                                             <button class="slds-button slds-button_icon slds-button_icon-border-filled slds-button_icon-x-small" aria-haspopup="true" title="Show More">
                                                <svg class="slds-button__icon" aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down" />
                                                </svg>
                                                <span class="slds-assistive-text">Show More</span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </section>
                    @endif
               </header>
            </div>
         </div>
         <div style="height: 50px;">
            <div class="slds-docked-form-footer">
               <ul class="slds-global-header__item slds-grid slds-grid_vertical-align-center">
                  <li class="slds-grid">
                     <div class="slds-global-header__logo">
                        <img src="../assets/images/logo_new.svg" alt="Smiley face" height="80" width="80">
                     </div>
                  </li>
                  <li class="slds-dropdown-trigger slds-dropdown-trigger_click">
                     <div class="slds-button-group" role="group">
                        <button class="slds-button slds-button_neutral">About Us</button>
                        <button class="slds-button slds-button_neutral">Contact Us</button>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      </span>
      </div>
      </div>
   </body>
</html>