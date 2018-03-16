@include('includes.head')
@include('includes.headerfooter')
@include('includes.leftmenu')

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
            font-weight: bold;
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
<form action="/login" method="post" id="loginForm">
    {{csrf_field()}}
    <div class="slds-scope">
        <div class="demo-only" style="height: 640px;">
            <section aria-describedby="modal-content-id-1" aria-labelledby="modal-heading-01" aria-modal="true"
                     class="slds-modal slds-fade-in-open" role="dialog" tabindex="-1">
                <div class="slds-modal__container">
                    <header class="slds-modal__header">
                        <a href="/">
                        <span class="close">&times;</span>
                        </a>
                        <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01"><b>Member
                                Login</b></h2>
                    </header>
                    <div class="modal-body">
                        <div class="container">
                            <center>
                                <div id="loginError">{{$loginmsg}}</div>
                                <div class="form-group">
                                    <label><b>Username</b></label>
                                    <input type="text" class="form-control input-md"
                                           placeholder="Enter Username" name="username"/>
                                </div>
                                <div class="form-group">
                                    <label><b>Password</b></label>
                                    <input type="password" class="form-control input-md"
                                           placeholder="Enter Password" name="password"/>
                                    {{--<span class="pull-right"><a href="#">Forgot Password?</a></span>--}}
                                </div>
                                </br>
                                <div class="form-group">
                                    <input type="submit" id="loginButton" class="slds-button slds-button_brand" value="LOGIN"/>
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
<link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet"
      type="text/css">
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}"></script>
<script src="{{ URL::asset('js/login.js') }}" type="text/javascript"></script>
</html>