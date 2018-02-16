<div id="registerModal" class="modal">
    <div class="modal-content">
        <link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet"
              type="text/css">
        <link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
        <link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
        <link rel="icon" type="image/x-icon">
        <script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/mainpage.js')}}"></script>
        <div class="slds-scope">
            <div class="demo-only" style="height: 640px;">
                <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                         class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                    <div class="slds-modal__container">
                        <header class="slds-modal__header">
                            <span class="closeR">&times;</span>
                            <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01">Registration</h2>
                        </header>
                        <div class="slds-modal__content slds-p-around_medium" id="modal-content-id-1">
                            <div class="slds-form slds-form_stacked">
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-01">Username</label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" id="input-id-01" placeholder="Enter username..."
                                               type="text">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-02">E-mail</label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" id="input-id-01" placeholder="Enter e-mail..."
                                               type="text">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-03">Password</label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" id="input-id-01" placeholder="Enter password..."
                                               type="text">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-04">Confirm Password</label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" id="input-id-01" placeholder="Re-enter password..."
                                               type="text">
                                    </div>
                                </div>
                                {{--<fieldset class="slds-form-element">
                                    <div class="slds-form-element__control">
                                      <span class="slds-checkbox">
                                      <input id="checkbox-48" name="default" type="checkbox" value="on">
                                      <label class="slds-checkbox__label" for="checkbox-48">
                                      <span class="slds-checkbox_faux"></span>
                                      <span class="slds-form-element__label">I agree to terms and conditions</span>
                                      </label>
                                      </span>
                                    </div>
                                </fieldset>--}}
                            </div>
                        </div>
                        <footer class="slds-modal__footer">
                            <button class="slds-button slds-button_brand">Submit</button>
                        </footer>
                    </div>
                </section>
                <div class="slds-backdrop slds-backdrop_open"></div>
            </div>
        </div>
    </div>
</div>