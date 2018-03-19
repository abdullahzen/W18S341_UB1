@include('includes.head')
@include('includes.headerfooter')
<body>
<div class="slds-scope">
    <div>
        <article class="slds-card"
                 style="        width: 98%;float: right;margin-right: 12px;margin-top: 10px;">
            <form action="/addNewCategory" id="newCategoryForm" method="get" onkeyup="checkForm()">
                {{ csrf_field() }}
                <div class="slds-card__header slds-grid">
                    <header class="slds-media slds-media_center slds-has-flexi-truncate">
                        <div class="slds-media__body">
                            <h2>
                                <a href="javascript:void(0);" class="slds-card__header-link slds-truncate"
                                   title="new question">
                                    <span class="slds-text-heading_small">Add a Category</span>
                                </a>
                            </h2>
                        </div>
                    </header>
                </div>
                <div class="slds-card__body slds-card__body_inner">
                    <div class="container">
                        <fieldset>


                            <!-- Textarea -->
                            <div class="slds-form-element">
                                <label class="slds-form-element__label" for="textarea-id-01">Category</label>
                                <div class="slds-form-element__control">
                                    <input type="text" class="form-control" style="width:50%;" name="newCat" id="newCat" placeholder="Enter category..."/>
                                </div>
                            </div>
                            <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="button1id"></label>
                                <div class="col-md-8">
                                    <input type="submit" id="saveNewCategory" class="slds-button slds-button_brand"
                                           value="Save" disabled/>
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
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{ URL::asset('js/addCategory.js') }}" type="text/javascript"></script>
@include('includes.modals')