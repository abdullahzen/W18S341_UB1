<div id="editModal" class="modal">
    <div class="modal-content">
        <form action="/edit" id="editForm" method="post">
            <div class="slds-scope">
                <div class="demo-only" style="height: 640px;">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true" class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <div class="slds-modal__container">
                            <header class="slds-modal__header">
                                <button class="closeE slds-button slds-button_icon" style="padding-right: 16cm;">
                                    <svg class="slds-button__icon" aria-hidden="true">
                                        <use xlink:href="/assets/icons/utility-sprite/svg/symbols.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink" />
                                    </svg>
                                    <span class="slds-assistive-text">Exit Modal</span>
                                </button>
                                <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01"><strong>Edit Question</strong></h2>
                            </header>
                            <div class="modal-body">
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label slds-text-body_regular" style="padding: 5mm 5mm 1mm 5mm;" for="textarea-id-01"><strong>Language</strong></label>
                                    <select name="category">
                                        <option class="form-control" value="Php" id="Phpe">Php</option>
                                        <option class="form-control" value="C" id="Ce">C</option>
                                        <option class="form-control" value="Java" id="Javae">Java</option>
                                        <option class="form-control" value="JavaScript" id="JavaScripte">JavaScript</option>

                                    </select>
                                </div>

                                <!-- Textarea -->
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label slds-text-body_regular" style="padding: 2mm 5mm;" for="textarea-id-01"><strong>Title</strong></label>
                                    <div class="slds-form-element__control" style="padding: 0mm 5mm;">
                                        <input type="text" class="form-control input-md" style="width:50%;" name="title" id="title" value="{{\App\Http\Controllers\ClientControllerHelper::getQuestionDataFromDBForCurrentQuestion('title', \App\Http\Controllers\ClientControllerHelper::$currentQuestionID)}}"/>
                                    </div>
                                </div>
                                <!-- Textarea -->
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label slds-text-body_regular" style="padding: 3mm 5mm;" for="textarea-id-01"><strong>Question</strong></label>
                                    <div class="slds-form-element__control" style="padding: 0mm 5mm;">
                                        <input type="text" class="form-control input-md slds-form-element__control" style="height: 6cm;" name="content" id="editContent" value="{{\App\Http\Controllers\ClientControllerHelper::getQuestionDataFromDBForCurrentQuestion('content', \App\Http\Controllers\ClientControllerHelper::$currentQuestionID)}}"/>
                                    </div>
                                </div>
                                <input type="text" style="visibility: hidden;" name="hiddenID" id="hiddenID" value="{{\App\Http\Controllers\ClientControllerHelper::$currentQuestionID}}"/>
                                <input type="text" style="visibility: hidden;" id="hiddenCategory" value="{{\App\Http\Controllers\ClientControllerHelper::getCategoryName(\App\Http\Controllers\ClientControllerHelper::$currentQuestionID)}}"/>

                                <div class="form-group" style="padding-left: 14cm; padding-bottom: 5mm;">
                                    <input type="submit" id="editButton" class="btn btn-block btn-md btn-primary" style="width: 2cm;" value="Save"/>
                                </div>
                            </div>
                            <footer class="slds-modal__footer">
                                {{--<button class="slds-button slds-button_brand" id="loginButton">Log in</button>--}}
                            </footer>
                        </div>
                    </section>
                    <div class="slds-backdrop slds-backdrop_open"></div>
                </div>
            </div>
        </form>
    </div>
</div>
<link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{ URL::asset('js/editQuestion.js') }}" type="text/javascript"></script>