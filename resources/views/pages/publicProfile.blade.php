@include('includes.head')
@include('includes.headerfooter')
<body>
    <div class="slds-scope">
        <div>
            <div id="publicProfile" class="publicProfile" style="width: 100%;">
                <article class="slds-card">
                    <div class="slds-scope" style="padding-top: 15mm; padding-left: 18mm;">
                        <div class="slds-text-body_regular" style="padding-left: 8cm; position: absolute; margin-top: 2.6cm; font-size: x-large;">
                            user name<br/>
                            <div class="vl">
                                <div style="margin-left: 2cm; font-size: large;"> <br/><br/> Ranking: <br/><br/> Questions: <br/><br/> Answers:</div>
                            </div>
                        </div>
                        <span class="slds-text-align_left slds-avatar slds-avatar_circle slds-avatar_large" style="height: 6cm; width: 6cm;">
                            <img alt="Person name" src="/assets/images/avatar2.jpg" title="User avatar"/>
                        </span>
                        <div style="margin-top: 2cm; font-size: x-large; font-weight: bold;">User's Questions</div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</body>
<link href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">