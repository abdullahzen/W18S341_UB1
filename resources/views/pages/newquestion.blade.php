@include('includes.head')
@include('includes.headerfooter')
{{--REMAKE THE CSS--}}
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<center>
    <form action="./post/do" method="post" id="postForm">
        {{ csrf_field() }}
        <div class="demo-only" style="height: 640px;">
            <div class="slds-modal__container">
                <header class="slds-modal__header">
                    {{--<span class="closeP">&times;</span>--}}
                    <h2 class="slds-text-heading_medium slds-hyphenate" id="modal-heading-01">Post a new question</h2>
                </header>
                <div class="modal-body">
                    <div class="container-fluid">
                        <center>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control input-md" placeholder="title" name="title"/>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category">
                                    <option class="form-control" value="Java">Java</option>
                                    <option class="form-control" value="JavaScript">JavaScript</option>
                                    <option class="form-control" value="Php">Php</option>
                                    <option class="form-control" value="C">C</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Question</label>
                                <input type="text" class="form-control input-md" placeholder="question"
                                       name="question"/>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="newpostButton"
                                       class="btn btn-block btn-md btn-primary" value="Post"/>
                            </div>
                        </center>
                    </div>
                </div>
                <footer class="slds-modal__footer">
                    {{--<button class="slds-button slds-button_brand" id="loginButton">Log in</button>--}}
                </footer>
            </div>
            <div class="slds-backdrop slds-backdrop_open"></div>
        </div>
    </form>
</center>
<link class="user" href="{{URL::asset('css/salesforce-lightning-design-system-vf.min.css')}}" rel="stylesheet"
      type="text/css">
<link class="user" href="{{URL::asset('css/mainpage.css')}}" rel="stylesheet" type="text/css">
<link class="user" href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/x-icon">
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/mainpage.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('js/post.js') }}" type="text/javascript"></script>