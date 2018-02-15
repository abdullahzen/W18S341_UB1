<div id="registerModal" class="modal">
    <div class="modal-content">
        <form action="./register" id="registrationForm">
            <div class="slds-scope">
                <div class="demo-only" style="height: 640px;">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true" class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <div class="slds-modal__container">
                            <header class="slds-modal__header">
                                <span class="closeR">&times;</span>
                                <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01">Registration Details</h2>
                            </header>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <center>
                                        {{--<div id="loginError"></div>--}}
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control input-md" placeholder="Username" name="username" id="username"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control input-md" placeholder="Email" name="email" id="email"/>
                                            {{--<span class="pull-right"><a href="#">Forgot Password?</a></span>--}}
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control input-md" placeholder="Password" name="password" id="password"/>
                                            {{--<span class="pull-right"><a href="#">Forgot Password?</a></span>--}}
                                        </div>
                                        <div class="form-group">
                                            <label>Password confirmation</label>
                                            <input type="password" class="form-control input-md" placeholder="Password_confirmation" name="passwordConfirmation" id="passwordConfirmation"/>
                                            {{--<span class="pull-right"><a href="#">Forgot Password?</a></span>--}}
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" id="submitButton" class="btn btn-block btn-md btn-primary" value="Submit"/>
                                        </div>
                                    </center>
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