<div id="editModal" class="modal">
    <div class="modal-content">
        <form action="/edit" id="editForm" method="get">
            {{ csrf_field() }}
            <div class="slds-scope">
                <div class="demo-only" style="height: 640px;">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true" class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <div class="slds-modal__container">
                            <header class="slds-modal__header">
                                <span class="closeE">X</span>
                                <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01">Edit Details</h2>
                            </header>
                            <div class="modal-body">
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="textarea-id-01">Language</label>
                                    <select name="category">
                                        <option class="form-control" value="Php" id="Phpe">Php</option>
                                        <option class="form-control" value="C" id="Ce">C</option>
                                        <option class="form-control" value="Java" id="Javae">Java</option>
                                        <option class="form-control" value="JavaScript" id="JavaScripte">JavaScript</option>

                                    </select>
                                </div>

                                <!-- Textarea -->
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="textarea-id-01">Title</label>
                                    <div class="slds-form-element__control">

                                        <input type="text" class="form-control input-md" name="title" id="title" value="{{\App\Http\Controllers\ClientControllerHelper::getQuestionDataFromDBForCurrentQuestion('title', \App\Http\Controllers\ClientControllerHelper::$currentQuestionID)}}"/>
                                    </div>
                                </div>
                                <!-- Textarea -->
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="textarea-id-01">Question</label>
                                    <div class="slds-form-element__control">
                                        <input type="text" class="form-control input-md" style="width:50%" class="slds-textarea" name="content" id="editContent" value="{{\App\Http\Controllers\ClientControllerHelper::getQuestionDataFromDBForCurrentQuestion('content', \App\Http\Controllers\ClientControllerHelper::$currentQuestionID)}}"/>
                                    </div>
                                </div>
                                <input type="text" style="visibility: hidden;" name="hiddenID" id="hiddenID" value="{{\App\Http\Controllers\ClientControllerHelper::$currentQuestionID}}"/>
                                <input type="text" style="visibility: hidden;" id="hiddenCategory" value="{{\App\Http\Controllers\ClientControllerHelper::getCategoryName(\App\Http\Controllers\ClientControllerHelper::$currentQuestionID)}}"/>

                                <div class="form-group">
                                    <input type="submit" id="editButton" class="btn btn-block btn-md btn-primary" value="Save"/>
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