<div id="loginModal" class="modal">
    <div class="modal-content">
        <form action="/login" method="post" id="loginForm">
            {{csrf_field()}}
            <div class="slds-scope">
                <div class="demo-only" style="height: 640px;">
                    <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true" class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                        <div class="slds-modal__container">
                            <header class="slds-modal__header">
                                <span class="close">&times;</span>
                                <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01"><b>Member Login</b></h2>
                            </header>
                            <div class="modal-body">
                                <div class="container">
                                    <center>
                                    <div id="loginError">
                                        <input type="hidden" name="loginmsg" id="loginmsg" value="{{Session()->get('loginmsg')}}">
                                        {{Session()->get('loginmsg')}}
                                        {{--{{dd(Session()->get('loginmsg'))}}--}}
                                    </div>
                                    <div class="form-group">
                                        <label><b>Username</b></label>
                                        <input type="text" class="form-control input-md" placeholder="Enter Username" name="username"/>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Password</b></label>
                                        <input type="password" class="form-control input-md" placeholder="Enter Password" name="password"/>
                                        {{--<span class="pull-right"><a href="#">Forgot Password?</a></span>--}}
                                    </div>
                                </br>
                                    <div class="form-group">
                                        <input type="submit" id="loginSubmitButton" class="slds-button slds-button_brand" value="LOGIN"/>
                                    </div>
                                    </center>
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
</div>
<link rel="icon" type="image/x-icon">
<link class="user" href="{{URL::asset('css/customRegisterLoginStyles.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<script src="{{ URL::asset('js/login.js') }}" type="text/javascript"></script>