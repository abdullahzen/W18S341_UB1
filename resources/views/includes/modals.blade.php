<!--Modal inclusions-->
@include('modals.login')
@include('modals.register')
@include('modals.userProfile')
@include('modals.edit')
@include('modals.editProfile')

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
