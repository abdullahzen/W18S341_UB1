@include('includes.head')
@include('includes.headerfooter')
@include('includes.innerNavBar')
<body>
    <div class="slds-scope">
        <div>
            <div id="publicProfile" class="publicProfile" style="position: absolute; top: 10%; width: 50%; left: 25%">
                <article class="slds-card">
                    <div class="slds-scope" style="padding-top: 5%; padding-left: 5%;">
                        <div class="slds-text-body_regular" style="padding-left: 15%; position: absolute; margin-top: 5%; font-size: x-large;">
                            {{ucwords($username)}}<br/>
                            <div class="vl">
                                <div style="margin-left: 1%; font-size: large;"> <br/> Rank: {{\App\Http\Controllers\ClientControllerHelper::getRank($username)}}
                                    <br/> Questions: {{\App\Http\Controllers\ClientControllerHelper::getNumberOfQuestionsForUser($username)}}
                                    <br/> Answers: {{\App\Http\Controllers\ClientControllerHelper::getNumberOfAnswersForUser($username)}}
                                </div>
                            </div>
                        </div>
                        <span class="slds-text-align_left slds-avatar slds-avatar_circle slds-avatar_large" style="height: 15%; width: 15%;">
                            <img alt="Person name" src="/assets/images/avatar2.jpg" title="User avatar"/>
                        </span>
                        <div style="margin-top: 1%; font-size: x-large; font-weight: bold; margin-left: 5%;">{{ucwords($username)}}'s Questions</div>
                        <?php $posts = (\App\Http\Controllers\ClientControllerHelper::getAllPostsForUser($username));?>
                        @foreach ($posts as $data)
                            @include('includes.postbox', ['data' => $data])
                        @endforeach
                        <br>
                        <br>
                        <br>
                    </div>
                </article>
            </div>
        </div>
    </div>
</body>
<link href="{{URL::asset('css/ourstyle.css')}}" rel="stylesheet" type="text/css">
@include('includes.modals')