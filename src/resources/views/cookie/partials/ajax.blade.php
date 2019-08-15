<div class="modal modal-lg fade" id="cookie_law_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
    <div class="modal-header">
        <h3>Cookie Info</h3>
    </div>
    <div class="modal-body">
        <p>{{ __('CookieLang::view.info') }}</p>
    </div>
    <div class="modal-footer">
        <a class="btn btn-danger" href='{{route("setCookie.goHome")}}'>{{ __('CookieLang::view.go_home') }}</a>
        <button class="btn btn-dark" onclick="setAjaxCookie()">{{ __('CookieLang::view.button_info') }}</button>
    </div>
</div>
    </div>
</div>

@if(config('cookie.template.extern_jQuery'))
    @include('CookieView::partials.cdn._jQuery');
@endif

<script>
    function setAjaxCookie() {
        $.ajax({
            type: 'POST',
            url: '{{route("setCookie.setAjaxCookie")}}',
            data: '_token = {{ csrf_token() }}',
            success: function (data) {
                $("#cookie_law_modal").remove();
                $('.modal-backdrop').hide();
            },
        });
    }

    $(window).on('load',function(){
        $('#cookie_law_modal')
            .modal({
                backdrop: 'static',
                keyboard: false
            });
    });
</script>