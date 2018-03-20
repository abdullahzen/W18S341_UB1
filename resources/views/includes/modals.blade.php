<!--Modal inclusions-->
@include('modals.login')
@include('modals.register')

@if(Session()->has('id'))

    @include('modals.userProfile')
    @include('modals.edit')
    @include('modals.editProfile')
    @include('modals.favourite')
    @include('modals.notifications')

@endif

@if(Session()->has('loginmsg'))
<script>
    loginModal.style.display = "block";
</script>
    {{Session()->flush()}}
@endif

@if(Session()->has('regmsg'))
    <script>
        registerModal.style.display = "block";
    </script>
    {{Session()->flush()}}
@endif
