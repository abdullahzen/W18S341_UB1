@include('includes.head')
@include('includes.headerfooter')
<body>
    <div class="slds-scope">
        <div>
            <div id="post" class="questions" style="    width: 100%;">
                <header>
                    <div>
                        Search for: {{$search}}
                    </div>
                </header>
                @if (sizeof($post) == 0)
                    <div>
                        No search result found.
                    </div>
                @endif
                @foreach ($post as $data)
                    @include('includes.postbox', ["data" => $data])
                @endforeach
            </div>
        </div>
    </div>
</body>
<script src="{{ URL::asset('js/answer.js') }}" type="text/javascript"></script>