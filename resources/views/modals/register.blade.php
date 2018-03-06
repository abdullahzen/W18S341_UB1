<html>



        <head>

                <style>
                
                    
                /* Full-width input fields */
                input[type=text], input[type=password] {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #ccc;
                    box-sizing: border-box;
                }
                
                /* Set a style for all buttons */
                .button {
                    background-color: #5BDB41;
                    color: white;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                }
                
                button:hover {
                    opacity: 0.8;
                }
                
                .container {
                    padding: 16px;
                }
                
                .modal-content {
                    background-color: #fefefe;
                    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                    border: 1px solid #888;
                    width: 80%; /* Could be more or less, depending on screen size */
                }
                
                
                </style>
                
                
                </head>
                






<div id="registerModal" class="modal">
    <div class="modal-content">
        <form action="./register" id="registrationForm" method="GET">
            <div class="slds-scope">
                <div class="demo-only" style="height: 640px;">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true" class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <div class="slds-modal__container">
                            <header class="slds-modal__header">
                                <span class="closeR">&times;</span>
                                <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01"><b>Registration Details</b></h2>
                            </header>
                            <div class="modal-body">
                                    <div class="container">
                                {{--<div id="loginError"></div>--}}
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-01"><b>Username</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="username" id="username" placeholder="Enter a username..."
                                               type="text">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-02"><b>E-mail</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="email" id="email" placeholder="Enter E-mail..."
                                               type="text">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-03"><b>Password</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="password" id="password" placeholder="Enter password..."
                                               type="password">
                                    </div>
                                </div>
                                <div class="slds-form-element">
                                    <label class="slds-form-element__label" for="input-id-04"><b>Confirm Password</b></label>
                                    <div class="slds-form-element__control">
                                        <input class="slds-input" name="passwordConfirmation" id="passwordConfirmation" placeholder="Re-enter password..."
                                               type="password">
                                    </div>
                                </div>
                            </br>
                                <div class="form-group">
                                    <input type="submit" id="submitButton" class="button" value="REGISTER"/>
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
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<script src="{{ URL::asset('js/register.js') }}" type="text/javascript"></script>








</html>