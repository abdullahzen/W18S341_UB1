<div id="registerModal" class="modal">
    <form action="/register" id="registrationForm" method="post" onkeyup="checkValidForm()">
        {{ csrf_field() }}
        <div class="slds-scope">
            <div class="demo-only" style="height: 640px;">
                <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                         class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                    <div class="slds-modal__container">
                        <header class="slds-modal__header">
                            <span class="closeR">&times;</span>
                            <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01"><b>Registration
                                    Details</b></h2>
                        </header>
                        <div class="modal-body">
                            <div class="container">
                                <div id="registerError"></div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-01"><b>Username</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="username" id="username"
                                               placeholder="Enter Username"
                                               type="text">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-02"><b>E-mail</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="email" id="email" placeholder="Enter E-mail"
                                               type="text">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-03"><b>Password</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="password" id="password"
                                               placeholder="Enter Password"
                                               type="password">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-04"><b>Confirm
                                            Password</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="passwordConfirmation" id="passwordConfirmation"
                                               placeholder="Re-enter Password"
                                               type="password">
                                    </div>
                                </div>
                                </br>
                                <div class="form-group">
                                    <input type="submit" id="submitButton" class="slds-button slds-button_brand"
                                           value="REGISTER" disabled/>
                                </div>
                            </div>
                        </div>
                        <footer class="slds-modal__footer">
                        </footer>
                    </div>
                </section>
                <div class="slds-backdrop slds-backdrop_open"></div>
            </div>
        </div>
    </form>
</div>
<link class="user" href="{{URL::asset('css/customRegisterLoginStyles.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<script src="{{ URL::asset('js/register.js') }}" type="text/javascript"></script>