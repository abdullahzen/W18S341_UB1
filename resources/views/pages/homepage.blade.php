@include('includes.head')
@include('includes.headerfooter')
<body>
<br/>
<br/>
<br/>
<div class="row">
    <div class="column1">
        <div class="slds-scope">
            {{--@if(session()->has('id'))
            <article class="slds-card" style="width:50%">
                <div class="slds-card__header slds-grid">
                    <header class="slds-media slds-media_center slds-has-flexi-truncate">
                        <div class="slds-media__figure">
                        <span class="slds-icon_container slds-icon-action-question-post-action slds-icon_container--circle"
                              title="description of icon when needed">
                           <svg class="slds-icon slds-icon_small" aria-hidden="true">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                   xlink:href="/assets/icons/action-sprite/svg/symbols.svg#question_post_action"/>
                           </svg>
                        </span>
                        </div>
                        <div class="slds-media__body">
                            <h2>
                                <a href="javascript:void(0);" class="slds-card__header-link slds-truncate"
                                   title="[object Object]">
                                    <span class="slds-text-heading_small">Post a new question?</span>
                                </a>
                            </h2>
                        </div>
                    </header>

                    <div class="slds-no-flex">
                        <button class="slds-button slds-button_neutral" id="newpostButton">Post</button>
                    </div>
                </div>
                <div class="slds-card__body slds-card__body_inner">
                    <div class="container" id="postquestion" style="display : none;">
                        <form class="form-horizontal">
                            <fieldset>
                                <fieldset class="slds-form-element">
                                    <legend class="slds-form-element__legend slds-form-element__label">Select the
                                        language
                                    </legend>
                                    <div class="slds-form-element__control">
                                        <div class="slds-visual-picker slds-visual-picker_small">
                                            <input type="radio" id="visual-picker-41" name="options" value="on"/>
                                            <label for="visual-picker-41">
                                       <span class="slds-visual-picker__figure slds-visual-picker__icon slds-align_absolute-center">
                                          <span class="slds-is-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon_medium slds-icon-action-check"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/action-sprite/svg/symbols.svg#check"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                          <span class="slds-is-not-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon-utility-connected_apps slds-icon_medium slds-icon-text-default"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#connected_apps"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                       </span>
                                                <span class="slds-visual-picker__body">Java</span>
                                            </label>
                                        </div>
                                        <div class="slds-visual-picker slds-visual-picker_small">
                                            <input type="radio" id="visual-picker-42" name="options" value="on"/>
                                            <label for="visual-picker-42">
                                       <span class="slds-visual-picker__figure slds-visual-picker__icon slds-align_absolute-center">
                                          <span class="slds-is-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon_medium slds-icon-action-check"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/action-sprite/svg/symbols.svg#check"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                          <span class="slds-is-not-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon-utility-desktop_console slds-icon_medium slds-icon-text-default"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#desktop_console"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                       </span>
                                                <span class="slds-visual-picker__body">JavaScript</span>
                                            </label>
                                        </div>
                                        <div class="slds-visual-picker slds-visual-picker_small">
                                            <input type="radio" id="visual-picker-43" name="options" value="on"/>
                                            <label for="visual-picker-43">
                                       <span class="slds-visual-picker__figure slds-visual-picker__icon slds-align_absolute-center">
                                          <span class="slds-is-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon_medium slds-icon-action-check"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/action-sprite/svg/symbols.svg#check"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                          <span class="slds-is-not-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon-utility-inbox slds-icon_medium slds-icon-text-default"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#inbox"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                       </span>
                                                <span class="slds-visual-picker__body">&nbsp &nbsp Php &nbsp &nbsp </span>
                                            </label>
                                        </div>
                                        <div class="slds-visual-picker slds-visual-picker_small">
                                            <input type="radio" id="visual-picker-44" name="options" value="on"/>
                                            <label for="visual-picker-44">
                                       <span class="slds-visual-picker__figure slds-visual-picker__icon slds-align_absolute-center">
                                          <span class="slds-is-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon_medium slds-icon-action-check"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/action-sprite/svg/symbols.svg#check"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                          <span class="slds-is-not-selected">
                                             <span class="slds-icon_container" title="description of icon when needed">
                                                <svg class="slds-icon slds-icon-utility-keyboard_dismiss slds-icon_medium slds-icon-text-default"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#keyboard_dismiss"/>
                                                </svg>
                                                <span class="slds-assistive-text">Provide description of icon</span>
                                             </span>
                                          </span>
                                       </span>
                                                <span class="slds-visual-picker__body">&nbsp &nbsp C &nbsp &nbsp</span>
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- Textarea -->
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="textarea-id-01">Question</label>
                                    <div class="slds-form-element__control">
                                        <textarea id="textarea-id-01" style="width:50%" class="slds-textarea"
                                                  placeholder="Write your question here...."></textarea>
                                    </div>
                                </div>
                                </br>
                                --}}{{--<!-- File Button -->
                                <div class="form-group">
                                    <div class="slds-form-element">
                                        <span class="slds-form-element__label" id="file-selector-primary-label">Attachment</span>
                                        <div class="slds-form-element__control">
                                            <div class="slds-file-selector slds-file-selector_files">
                                                <div class="slds-file-selector__dropzone">
                                                    <input type="file"
                                                           class="slds-file-selector__input slds-assistive-text"
                                                           accept="image/png" id="file-upload-input-01"
                                                           aria-labelledby="file-selector-primary-label file-selector-secondary-label"/>
                                                    <label class="slds-file-selector__body" for="file-upload-input-01"
                                                           id="file-selector-secondary-label">
                                             <span class="slds-file-selector__button slds-button slds-button_neutral">
                                                <svg class="slds-button__icon slds-button__icon_left"
                                                     aria-hidden="true">
                                                   <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#upload"/>
                                                </svg>
                                                Upload Files
                                             </span>
                                                        <span class="slds-file-selector__text slds-medium-show">or Drop Files</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>--}}{{--
                                <!-- Button (Double) -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="button1id"></label>
                                    <div class="col-md-8">
                                        <button id="button1id" name="button1id" class="slds-button slds-button_brand">
                                            Post
                                        </button>
                                        --}}{{--<button id="button2id" name="button2id"
                                                class="slds-button slds-button_destructive">Reset
                                        </button>--}}{{--
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <footer class="slds-card__footer"></footer>
            </article>
            @endif--}}


            <br/>
            <div class="slds-page-header">
                <div class="slds-media">
                    <div class="slds-media__figure">
                     <span class="slds-icon_container slds-icon-standard-opportunity" title="Top Questions">
                        <svg class="slds-icon slds-page-header__icon" aria-hidden="true">
                           <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                xlink:href="/assets/icons/standard-sprite/svg/symbols.svg#opportunity"/>
                        </svg>
                     </span>
                    </div>
                    <div class="slds-media__body">
                        <h1 class="slds-page-header__title slds-truncate slds-align-middle" title="Top Questions">Top
                            Questions</h1>
                        <p class="slds-text-body_small slds-line-height_reset">Top questions are selected based on
                            number of responses / correct answers</p>
                    </div>
                </div>
            </div>
            <ul class="slds-has-dividers_around slds-has-block-links_space">
                <li class="slds-item"><a href="javascript:void(0);">How to select all elements with particular ARIA
                        value using jQuery?</a></li>
                <li class="slds-item"><a href="javascript:void(0);">How do I detect a click outside an element?</a></li>
                <li class="slds-item"><a href="javascript:void(0);">onClickOut (click after leaving the element)
                        [duplicate]</a></li>
            </ul>
            <br/>
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
                        <h1 class="slds-page-header__title slds-truncate slds-align-middle" title="All Questions">All
                            Questions</h1>
                        <p class="slds-text-body_small slds-line-height_reset">Below is the list of all questions
                            segregated by topics</p>
                    </div>
                </div>
            </div>
            <br/>
            <div class="demo-only section" style="width: 320px; background-color: rgb(250, 250, 251);">
                <nav class="slds-nav-vertical slds-nav-vertical_shade" aria-label="Sub page">
                    <div class="slds-nav-vertical__section">
                        <h2 id="entity-header" class="slds-nav-vertical__title slds-text-title_caps">Catgeories</h2>
                        <ul>
                            <li id="Javali" class="slds-nav-vertical__item slds-is-active"><a href="javascript:void(0);"
                                                                                              onclick="showJava();"
                                                                                              class="slds-nav-vertical__action"
                                                                                              aria-describedby="entity-header"
                                                                                              aria-current="page">Java</a>
                            </li>
                            <li id="JavaScriptli" class="slds-nav-vertical__item"><a href="javascript:void(0);"
                                                                                     onclick="showJavaScript();"
                                                                                     class="slds-nav-vertical__action"
                                                                                     aria-describedby="entity-header">Javascript</a>
                            </li>
                            <li id="Phpli" class="slds-nav-vertical__item"><a href="javascript:void(0);"
                                                                              onclick="showPhp();"
                                                                              class="slds-nav-vertical__action"
                                                                              aria-describedby="entity-header">Php</a>
                            </li>
                            <li id="Cli" class="slds-nav-vertical__item"><a href="javascript:void(0);"
                                                                            onclick="showC();"
                                                                            class="slds-nav-vertical__action"
                                                                            aria-describedby="entity-header">C</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div id="Java" class="questions">
                <article class="slds-card">
                    <div class="slds-card__header slds-grid">
                        <div class="slds-feed">
                            <ul class="slds-feed__list">
                                <li class="slds-feed__item">
                                    <article class="slds-post">
                                        <header class="slds-post__header slds-media">
                                            <div class="slds-media__figure">
                                                <a href="javascript:void(0);"
                                                   class="slds-avatar slds-avatar_circle slds-avatar_large">
                                                    <img alt="Jason Rodgers" src="/assets/images/avatar1.jpg"
                                                         title="Jason Rodgers avatar"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                    <p><a href="javascript:void(0);" title="Jason Rodgers">Jason
                                                            Rogers</a> — <a href="javascript:void(0);"
                                                                            title="Design Systems">Design Systems</a>
                                                    </p>
                                                    <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                            aria-haspopup="true" title="More Options">
                                                        <svg class="slds-button__icon" aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                        </svg>
                                                        <span class="slds-assistive-text">More Options</span>
                                                    </button>
                                                </div>
                                                <p class="slds-text-body_small"><a href="javascript:void(0);"
                                                                                   title="Click for single-item view of this post"
                                                                                   class="slds-text-link_reset">5 days
                                                        Ago</a></p>
                                            </div>
                                        </header>
                                        <div class="slds-post__content slds-text-longform">
                                            <p>Hey there! <a href="javascript:void(0);" title="Jenna Davis">@Jenna
                                                    Davis</a>, I've inherited a project I'm working on and I'm updating
                                                some jquery animations (very little practice with jquery).
                                                I have a div I need to add and remove the style attribute from. Here is
                                                the div:
                                            </p>
                                        </div>
                                        <footer class="slds-post__footer">
                                            <ul class="slds-post__footer-actions-list slds-list_horizontal">
                                                <li class="slds-col slds-item slds-m-right_medium">
                                                    <button title="Upvote this item"
                                                            class="slds-button_reset slds-post__footer-action"
                                                            aria-pressed="false">
                                                        <svg class="slds-icon slds-icon-text-default slds-icon_x-small slds-align-middle"
                                                             aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share_mobile"/>
                                                        </svg>
                                                        Upvote
                                                    </button>
                                                </li>

                                            </ul>
                                            <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                                <li class="slds-item">2 answers</li>
                                                <li class="slds-item">259 views</li>
                                            </ul>
                                        </footer>
                                    </article>
                                    <div class="slds-feed__item-comments">
                                        <ul>
                                            <li>
                                                <article class="slds-comment slds-media slds-hint-parent">
                                                    <div class="slds-media__figure">
                                                        <a href="javascript:void(0);"
                                                           class="slds-avatar slds-avatar_circle slds-avatar_medium">
                                                            <img alt="Jenna Davis" src="/assets/images/avatar2.jpg"
                                                                 title="Jenna Davis avatar"/>
                                                        </a>
                                                    </div>
                                                    <div class="slds-media__body">
                                                        <header class="slds-media slds-media_center">
                                                            <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                                <p class="slds-truncate" title="Jenna Davis"><a
                                                                            href="javascript:void(0);">Jenna Davis</a>
                                                                </p>
                                                                <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                                        aria-haspopup="true" title="More Options">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">More Options</span>
                                                                </button>
                                                            </div>
                                                        </header>
                                                        <div class="slds-comment__content slds-text-longform">Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                        <footer>
                                                            <ul class="slds-list_horizontal slds-has-dividers_right slds-text-body_small">
                                                                <li class="slds-item">
                                                                    <button class="slds-button_reset slds-text-color_weak"
                                                                            title="Upvote this item"
                                                                            aria-pressed="false">Upvote
                                                                    </button>
                                                                </li>
                                                                <li class="slds-item">16hr Ago</li>
                                                            </ul>
                                                        </footer>
                                                    </div>
                                                </article>
                                            </li>
                                            <li>
                                                <article class="slds-comment slds-media slds-hint-parent">
                                                    <div class="slds-media__figure">
                                                        <a href="javascript:void(0);"
                                                           class="slds-avatar slds-avatar_circle slds-avatar_medium">
                                                            <img alt="Jenna Davis" src="/assets/images/avatar2.jpg"
                                                                 title="Jenna Davis avatar"/>
                                                        </a>
                                                    </div>
                                                    <div class="slds-media__body">
                                                        <header class="slds-media slds-media_center">
                                                            <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                                <p class="slds-truncate" title="Jenna Davis"><a
                                                                            href="javascript:void(0);">Jenna Davis</a>
                                                                </p>
                                                                <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                                        aria-haspopup="true" title="More Options">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">More Options</span>
                                                                </button>
                                                            </div>
                                                        </header>
                                                        <div class="slds-comment__content slds-text-longform">Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                        <footer>
                                                            <ul class="slds-list_horizontal slds-has-dividers_right slds-text-body_small">
                                                                <li class="slds-item">
                                                                    <button class="slds-button_reset slds-text-color_weak"
                                                                            title="Upvote this item"
                                                                            aria-pressed="false">Upvote
                                                                    </button>
                                                                </li>
                                                                <li class="slds-item">16hr Ago</li>
                                                            </ul>
                                                        </footer>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                        <div class="slds-media slds-comment slds-hint-parent">
                                            <div class="slds-media__figure">
                                                <a class="slds-avatar slds-avatar_circle slds-avatar_medium"
                                                   href="javascript:void(0);">
                                                    <img alt="Person name" src="/assets/images/avatar2.jpg"
                                                         title="User avatar"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-publisher slds-publisher_comment">
                                                    <label for="comment-text-input-01" class="slds-assistive-text">Write
                                                        a answer</label>
                                                    <textarea id="comment-text-input-01"
                                                              class="slds-publisher__input slds-input_bare slds-text-longform"
                                                              placeholder="Write a answers..."></textarea>
                                                    <div class="slds-publisher__actions slds-grid slds-grid_align-spread">
                                                        <ul class="slds-grid">
                                                            <li>
                                                                <button class="slds-button slds-button_icon slds-button_icon-container"
                                                                        title="Add User">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#adduser"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">Add User</span>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="slds-button slds-button_icon slds-button_icon-container"
                                                                        title="Attach a file">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#attach"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">Attach a file</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <button class="slds-button slds-button_brand">Answers</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div id="Javascript" class="questions" style="display : none;">
                <article class="slds-card">
                    <div class="slds-card__header slds-grid">
                        <div class="slds-feed">
                            <ul class="slds-feed__list">
                                <li class="slds-feed__item">
                                    <article class="slds-post">
                                        <header class="slds-post__header slds-media">
                                            <div class="slds-media__figure">
                                                <a href="javascript:void(0);"
                                                   class="slds-avatar slds-avatar_circle slds-avatar_large">
                                                    <img alt="Jason Rodgers" src="/assets/images/avatar1.jpg"
                                                         title="Jason Rodgers avatar"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                    <p><a href="javascript:void(0);" title="Jason Rodgers">Jason
                                                            Rogers</a> — <a href="javascript:void(0);"
                                                                            title="Design Systems">Design Systems</a>
                                                    </p>
                                                    <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                            aria-haspopup="true" title="More Options">
                                                        <svg class="slds-button__icon" aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                        </svg>
                                                        <span class="slds-assistive-text">More Options</span>
                                                    </button>
                                                </div>
                                                <p class="slds-text-body_small"><a href="javascript:void(0);"
                                                                                   title="Click for single-item view of this post"
                                                                                   class="slds-text-link_reset">5 days
                                                        Ago</a></p>
                                            </div>
                                        </header>
                                        <div class="slds-post__content slds-text-longform">
                                            <p>Hey <a href="javascript:void(0);" title="Jenna Davis">@Jenna Davis</a>,
                                                I've inherited a project I'm working on and I'm updating some jquery
                                                animations (very little practice with jquery).
                                                I have a div I need to add and remove the style attribute from. Here is
                                                the div:
                                            </p>
                                        </div>
                                        <footer class="slds-post__footer">
                                            <ul class="slds-post__footer-actions-list slds-list_horizontal">
                                                <li class="slds-col slds-item slds-m-right_medium">
                                                    <button title="Upvote this item"
                                                            class="slds-button_reset slds-post__footer-action"
                                                            aria-pressed="false">
                                                        <svg class="slds-icon slds-icon-text-default slds-icon_x-small slds-align-middle"
                                                             aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share_mobile"/>
                                                        </svg>
                                                        Upvote
                                                    </button>
                                                </li>

                                            </ul>
                                            <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                                <li class="slds-item">8 answers</li>
                                                <li class="slds-item">259 views</li>
                                            </ul>
                                        </footer>
                                    </article>
                                    <div class="slds-feed__item-comments">
                                        <div class="slds-p-horizontal_medium slds-p-vertical_x-small slds-grid">
                                            <button class="slds-button_reset slds-text-link">More answers</button>
                                            <span class="slds-text-body_small slds-col_bump-left">1 of 8</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <article class="slds-comment slds-media slds-hint-parent">
                                                    <div class="slds-media__figure">
                                                        <a href="javascript:void(0);"
                                                           class="slds-avatar slds-avatar_circle slds-avatar_medium">
                                                            <img alt="Jenna Davis" src="/assets/images/avatar2.jpg"
                                                                 title="Jenna Davis avatar"/>
                                                        </a>
                                                    </div>
                                                    <div class="slds-media__body">
                                                        <header class="slds-media slds-media_center">
                                                            <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                                <p class="slds-truncate" title="Jenna Davis"><a
                                                                            href="javascript:void(0);">Jenna Davis</a>
                                                                </p>
                                                                <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                                        aria-haspopup="true" title="More Options">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">More Options</span>
                                                                </button>
                                                            </div>
                                                        </header>
                                                        <div class="slds-comment__content slds-text-longform">Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                        <footer>
                                                            <ul class="slds-list_horizontal slds-has-dividers_right slds-text-body_small">
                                                                <li class="slds-item">
                                                                    <button class="slds-button_reset slds-text-color_weak"
                                                                            title="Upvote this item"
                                                                            aria-pressed="false">Upvote
                                                                    </button>
                                                                </li>
                                                                <li class="slds-item">16hr Ago</li>
                                                            </ul>
                                                        </footer>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                        <div class="slds-media slds-comment slds-hint-parent">
                                            <div class="slds-media__figure">
                                                <a class="slds-avatar slds-avatar_circle slds-avatar_medium"
                                                   href="javascript:void(0);">
                                                    <img alt="Person name" src="/assets/images/avatar2.jpg"
                                                         title="User avatar"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-publisher slds-publisher_comment">
                                                    <label for="comment-text-input-01" class="slds-assistive-text">Write
                                                        a answer</label>
                                                    <textarea id="comment-text-input-01"
                                                              class="slds-publisher__input slds-input_bare slds-text-longform"
                                                              placeholder="Write a answer..."></textarea>
                                                    <div class="slds-publisher__actions slds-grid slds-grid_align-spread">
                                                        <ul class="slds-grid">
                                                            <li>
                                                                <button class="slds-button slds-button_icon slds-button_icon-container"
                                                                        title="Add User">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#adduser"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">Add User</span>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="slds-button slds-button_icon slds-button_icon-container"
                                                                        title="Attach a file">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#attach"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">Attach a file</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <button class="slds-button slds-button_brand">Answer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div id="Php" class="questions" style="display : none;">
                <article class="slds-card">
                    <div class="slds-card__header slds-grid">
                        <div class="slds-feed">
                            <ul class="slds-feed__list">
                                <li class="slds-feed__item">
                                    <article class="slds-post">
                                        <header class="slds-post__header slds-media">
                                            <div class="slds-media__figure">
                                                <a href="javascript:void(0);"
                                                   class="slds-avatar slds-avatar_circle slds-avatar_large">
                                                    <img alt="Jason Rodgers" src="/assets/images/avatar1.jpg"
                                                         title="Jason Rodgers avatar"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                    <p><a href="javascript:void(0);" title="Jason Rodgers">Jason
                                                            Rogers</a> — <a href="javascript:void(0);"
                                                                            title="Design Systems">Design Systems</a>
                                                    </p>
                                                    <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                            aria-haspopup="true" title="More Options">
                                                        <svg class="slds-button__icon" aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                        </svg>
                                                        <span class="slds-assistive-text">More Options</span>
                                                    </button>
                                                </div>
                                                <p class="slds-text-body_small"><a href="javascript:void(0);"
                                                                                   title="Click for single-item view of this post"
                                                                                   class="slds-text-link_reset">5 days
                                                        Ago</a></p>
                                            </div>
                                        </header>
                                        <div class="slds-post__content slds-text-longform">
                                            <p>Hey <a href="javascript:void(0);" title="Jenna Davis">@Jenna Davis</a>,
                                                I've inherited a project I'm working on and I'm updating some jquery
                                                animations (very little practice with jquery).
                                                I have a div I need to add and remove the style attribute from. Here is
                                                the div:
                                            </p>
                                        </div>
                                        <footer class="slds-post__footer">
                                            <ul class="slds-post__footer-actions-list slds-list_horizontal">
                                                <li class="slds-col slds-item slds-m-right_medium">
                                                    <button title="Upvote this item"
                                                            class="slds-button_reset slds-post__footer-action"
                                                            aria-pressed="false">
                                                        <svg class="slds-icon slds-icon-text-default slds-icon_x-small slds-align-middle"
                                                             aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share_mobile"/>
                                                        </svg>
                                                        Upvote
                                                    </button>
                                                </li>

                                            </ul>
                                            <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                                <li class="slds-item">8 answers</li>
                                                <li class="slds-item">259 views</li>
                                            </ul>
                                        </footer>
                                    </article>
                                    <div class="slds-feed__item-comments">
                                        <div class="slds-p-horizontal_medium slds-p-vertical_x-small slds-grid">
                                            <button class="slds-button_reset slds-text-link">More answers</button>
                                            <span class="slds-text-body_small slds-col_bump-left">1 of 8</span>
                                        </div>
                                        <ul>
                                            <li>
                                                <article class="slds-comment slds-media slds-hint-parent">
                                                    <div class="slds-media__figure">
                                                        <a href="javascript:void(0);"
                                                           class="slds-avatar slds-avatar_circle slds-avatar_medium">
                                                            <img alt="Jenna Davis" src="/assets/images/avatar2.jpg"
                                                                 title="Jenna Davis avatar"/>
                                                        </a>
                                                    </div>
                                                    <div class="slds-media__body">
                                                        <header class="slds-media slds-media_center">
                                                            <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                                <p class="slds-truncate" title="Jenna Davis"><a
                                                                            href="javascript:void(0);">Jenna Davis</a>
                                                                </p>
                                                                <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                                        aria-haspopup="true" title="More Options">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">More Options</span>
                                                                </button>
                                                            </div>
                                                        </header>
                                                        <div class="slds-comment__content slds-text-longform">Lorem
                                                            ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </div>
                                                        <footer>
                                                            <ul class="slds-list_horizontal slds-has-dividers_right slds-text-body_small">
                                                                <li class="slds-item">
                                                                    <button class="slds-button_reset slds-text-color_weak"
                                                                            title="Upvote this item"
                                                                            aria-pressed="false">Upvote
                                                                    </button>
                                                                </li>
                                                                <li class="slds-item">16hr Ago</li>
                                                            </ul>
                                                        </footer>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul>
                                        <div class="slds-media slds-comment slds-hint-parent">
                                            <div class="slds-media__figure">
                                                <a class="slds-avatar slds-avatar_circle slds-avatar_medium"
                                                   href="javascript:void(0);">
                                                    <img alt="Person name" src="/assets/images/avatar2.jpg"
                                                         title="User avatar"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-publisher slds-publisher_comment slds-is-active slds-has-focus">
                                                    <label for="comment-text-input-01" class="slds-assistive-text">Write
                                                        a answer</label>
                                                    <textarea id="comment-text-input-01"
                                                              class="slds-publisher__input slds-input_bare slds-text-longform"
                                                              placeholder="Write a answers..."></textarea>
                                                    <div class="slds-publisher__actions slds-grid slds-grid_align-spread">
                                                        <ul class="slds-grid">
                                                            <li>
                                                                <button class="slds-button slds-button_icon slds-button_icon-container"
                                                                        title="Add User">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#adduser"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">Add User</span>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="slds-button slds-button_icon slds-button_icon-container"
                                                                        title="Attach a file">
                                                                    <svg class="slds-button__icon" aria-hidden="true">
                                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                             xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#attach"/>
                                                                    </svg>
                                                                    <span class="slds-assistive-text">Attach a file</span>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                        <button class="slds-button slds-button_brand">Answer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div id="C" class="questions" style="display : none;">
                <article class="slds-card">
                    <div class="slds-card__header slds-grid">
                        <div class="slds-feed">
                            <ul class="slds-feed__list">
                                <li class="slds-feed__item">
                                    <article class="slds-post">
                                        <header class="slds-post__header slds-media">
                                            <div class="slds-media__figure">
                                                <a href="javascript:void(0);"
                                                   class="slds-avatar slds-avatar_circle slds-avatar_large">
                                                    <img alt="Jason Rodgers" src="/assets/images/avatar1.jpg"
                                                         title="Jason Rodgers avatar"/>
                                                </a>
                                            </div>
                                            <div class="slds-media__body">
                                                <div class="slds-grid slds-grid_align-spread slds-has-flexi-truncate">
                                                    <p><a href="javascript:void(0);" title="Jason Rodgers">Jason
                                                            Rogers</a> — <a href="javascript:void(0);"
                                                                            title="Design Systems">Design Systems</a>
                                                    </p>
                                                    <button class="slds-button slds-button_icon slds-button_icon-border slds-button_icon-x-small"
                                                            aria-haspopup="true" title="More Options">
                                                        <svg class="slds-button__icon" aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#down"/>
                                                        </svg>
                                                        <span class="slds-assistive-text">More Options</span>
                                                    </button>
                                                </div>
                                                <p class="slds-text-body_small"><a href="javascript:void(0);"
                                                                                   title="Click for single-item view of this post"
                                                                                   class="slds-text-link_reset">5 days
                                                        Ago</a></p>
                                            </div>
                                        </header>
                                        <div class="slds-post__content slds-text-longform">
                                            <p>Hey there!<a href="javascript:void(0);" title="Jenna Davis">@Jenna
                                                    Davis</a>, I've inherited a project I'm working on and I'm updating
                                                some jquery animations (very little practice with jquery).
                                                I have a div I need to add and remove the style attribute from. Here is
                                                the div:
                                            </p>
                                        </div>
                                        <footer class="slds-post__footer">
                                            <ul class="slds-post__footer-actions-list slds-list_horizontal">
                                                <li class="slds-col slds-item slds-m-right_medium">
                                                    <button title="Upvote this item"
                                                            class="slds-button_reset slds-post__footer-action slds-is-active"
                                                            aria-pressed="true">
                                                        <svg class="slds-icon slds-icon-text-default slds-icon_x-small slds-align-middle"
                                                             aria-hidden="true">
                                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                 xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#share_mobile"/>
                                                        </svg>
                                                        Upvoted
                                                    </button>
                                                </li>

                                            </ul>
                                            <ul class="slds-post__footer-meta-list slds-list_horizontal slds-has-dividers_right slds-text-title">
                                                <li class="slds-item">20 answers</li>
                                                <li class="slds-item">259 views</li>
                                            </ul>
                                        </footer>
                                    </article>
                                    <div class="slds-feed__item-comments">
                                        <div class="slds-p-horizontal_medium slds-p-vertical_x-small"><a
                                                    href="javascript:void(0);">You</a> Upvoted this post
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <!--     <div class="slds-tabs_scoped">
               <ul class="slds-tabs_scoped__nav" role="tablist">
                  <li class="slds-tabs_scoped__item slds-is-active" role="presentation" title="Item One"><a aria-controls="tab-scoped-1" aria-selected="true" class="slds-tabs_scoped__link" href="javascript:void(0);" id="tab-scoped-1__item" role="tab" tabindex="0">Java</a></li>
                  <li class="slds-tabs_scoped__item" role="presentation" title="Item Two"><a aria-controls="tab-scoped-2" aria-selected="false" class="slds-tabs_scoped__link" href="javascript:void(0);" id="tab-scoped-2__item" role="tab" tabindex="-1">C#</a></li>
                  <li class="slds-tabs_scoped__item" role="presentation" title="Item Three"><a aria-controls="tab-scoped-3" aria-selected="false" class="slds-tabs_scoped__link" href="javascript:void(0);" id="tab-scoped-3__item" role="tab" tabindex="-1">Apex</a></li>
               </ul>
               <div aria-labelledby="tab-scoped-1__item" class="slds-tabs_scoped__content slds-show" id="tab-scoped-1" role="tabpanel">Java</div>
               <div aria-labelledby="tab-scoped-2__item" class="slds-tabs_scoped__content slds-hide" id="tab-scoped-2" role="tabpanel">C#</div>
               <div aria-labelledby="tab-scoped-3__item" class="slds-tabs_scoped__content slds-hide" id="tab-scoped-3" role="tabpanel">Apex</div>
               </div> -->
            <!--    <div class="slds-form-element">
               <span class="slds-form-element__label" id="file-selector-primary-label">Attachment</span>
               <div class="slds-form-element__control">
                  <div class="slds-file-selector slds-file-selector_files">
                     <div class="slds-file-selector__dropzone">
                        <input accept="image/png" aria-labelledby="file-selector-primary-label file-selector-secondary-label" class="slds-file-selector__input slds-assistive-text" id="file-upload-input-01" type="file">
                        <label class="slds-file-selector__body" for="file-upload-input-01" id="file-selector-secondary-label">
                        <span class="slds-file-selector__button slds-button slds-button_neutral">
                        <img src="./assets/icons/utility/upload_60.png" alt="Smiley face" height="17" width="17">Upload Files</span>
                        <span class="slds-file-selector__text slds-medium-show">or Drop Files</span>
                        </label>
                     </div>
                  </div>
               </div>
               </div>   -->
            <br>
            <br>
            <br>
        </div>
    </div>
    <!--  	<div class="column2">
       <div class="slds-post__content slds-text-longform">


       <p>Cannot find an answer? Do not worry. Try the search here.....</p>
        <gcse:searchbox></gcse:searchbox>
       </div>

       <div>
        <gcse:searchresults></gcse:searchresults>
       </div>
       </div>

       </div> -->
</div>
</body>

{{--Modal Inclusion--}}
@include('modals.login')
@include('modals.register')