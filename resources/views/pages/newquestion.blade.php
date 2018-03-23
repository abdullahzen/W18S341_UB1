@include('includes.head')
@include('includes.headerfooter')
@include('includes.innerNavBar')
<body>
<div class="slds-scope">
    <div>
        <article id="postquestions" class="slds-card"
                 style="position: absolute; top:10%; left: 25%; width: 50%">
            <form class="form-horizontal" action="/newpost/do" id="postForm" method="post" onkeyup="checkForm()">
                {{ csrf_field() }}
                <div class="slds-card__header slds-grid">
                    <header class="slds-media slds-media_center slds-has-flexi-truncate">
                        <div class="slds-media__figure">
                              <span class="slds-icon_container slds-icon-action-question-post-action slds-icon_container--circle"
                                    title="Post question icon">
                                 <svg class="slds-icon slds-icon_small" aria-hidden="true">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xlink:href="/assets/icons/action-sprite/svg/symbols.svg#question_post_action"/>
                                 </svg>
                              </span>
                        </div>
                        <div class="slds-media__body">
                            <h2>
                                <a href="javascript:void(0);" class="slds-card__header-link slds-truncate"
                                   title="new question">
                                    <span class="slds-text-heading_small">Post a new question</span>
                                </a>
                            </h2>
                        </div>
                    </header>
                </div>
                <div class="slds-card__body slds-card__body_inner">
                    <div class="container" id="postquestion">
                        <fieldset>
                            <div class="slds-form-element">
                                <label class="slds-form-element__label" for="textarea-id-01">Language</label><br/>
                                <select name="category" id="select2" class="slds-select" style="Width:30%">
                                    <?php $categoriesNames = \App\Http\Controllers\ClientControllerHelper::getCategories(); ?>
                                    @foreach ($categoriesNames as $key=>$value)
                                    <option class="form-control" value="{{$value->category}}">{{$value->category}}</option>
                                    @endforeach
                                        <option class="form-control input-md slds-input" value="other2" id="other2">Other</option>
                                </select>
                                    <input type ="text" class="form-control input-md slds-input" placeholder="Enter new category name..." name="newOther2" id="newOther2" style="Width:30%" autocomplete="off"/>
                            </div>

                            <!-- Textarea -->
                            <div class="slds-form-element">
                                <label class="slds-form-element__label" for="textarea-id-01">Title</label>
                                <div class="slds-form-element__control">
                                    <input id="title" type="text"
                                           class="form-control input-md slds-input"
                                           placeholder="Min 6 chars. Max 1000 chars." name="title" style="Width:100%" autocomplete="off"/>
                                </div>
                            </div>
                            <!-- Textarea -->
                            <div class="slds-form-element">
                                <label class="slds-form-element__label" for="textarea-id-01">Content</label>
                                <div class="slds-form-element__control">
                                    <textarea form ="postForm" id="content" type="text" class="form-control input-md slds-input"
                                           style="width:100%; height: 200px;" class="slds-textarea"
                                           placeholder="Min 6 chars. Max 1000 chars."
                                              name="content" autocomplete="off"></textarea>
                                </div>
                            </div>
                            </br>
                            <!-- File Button -->
                        <!--<div class="form-group">
                            <div class="slds-form-element">
                                <span class="slds-form-element__label"
                                      id="file-selector-primary-label">Attachment</span>
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
                        </br>-->
                        <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="button1id"></label>
                                <div class="col-md-8">
                                    <input type="submit" id="newQuestionButton" class="slds-button slds-button_brand"
                                           value="Post" disabled/>
                                    <input type="reset" id="resetButton" class="slds-button slds-button_destructive"
                                           value="Reset"/>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
            <footer class="slds-card__footer"></footer>
        </article>
    </div>
</div>
</body>
<script src="{{ URL::asset('js/post.js') }}" type="text/javascript"></script>
@include('includes.modals')