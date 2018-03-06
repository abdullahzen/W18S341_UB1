@include('includes.head')
@include('includes.headerfooter')
<body>
  <div class="slds-scope">
			{{--<div>
            <article id="postquestions" class="slds-card" style="        width: 98%;float: right;margin-right: 12px;margin-top: 10px;">
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
                     <button class="slds-button slds-button_neutral" onclick="showpostquestion();">New</button>
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
                           <!-- File Button -->
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
                           </br>
                           <!-- Button (Double) -->
                           <div class="form-group">
                              <label class="col-md-4 control-label" for="button1id"></label>
                              <div class="col-md-8">
                                 <button id="button1id" name="button1id" class="slds-button slds-button_brand">
                                 Post
                                 </button>
                                 <button id="button2id" name="button2id"
                                    class="slds-button slds-button_destructive">Reset
                                 </button>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
               <footer class="slds-card__footer"></footer>
            </article>
			</div>--}}
            {{--LEFT MENU--}}
			<div>
				
               @include('includes.leftmenu')
			
               {{--CATEGORY 1: JAVA--}}
                  @include('includes.lang.java')
               {{--CATEGORY 1: JAVASCRIPT--}}
                  @include('includes.lang.js')
               {{--CATEGORY 1: PHP--}}
                  @include('includes.lang.php')
               {{--CATEGORY 1: C--}}
                  @include('includes.lang.c')
            </div>
  </div>
</body>
{{--Modal Inclusion--}}
@include('modals.login')
@include('modals.register')
@include('modals.userProfile')