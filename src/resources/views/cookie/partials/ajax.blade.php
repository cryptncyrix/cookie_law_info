<div class="modal modal-lg fade" id="cookie_law_modal">
    <div class="modal-header">
        <h3>Cookie_Law</h3>
    </div>
    <div class="modal-body">
        <p>{{ __('CookieLang::view.info') }}</p>
    </div>
    <div class="modal-footer">
        <button class="btn btn-dark" onclick="setAjaxCookie()">AjaxSetCookie</button>
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
            })
            .css({
                position : 'fixed',
                top : '5% !important',
                left : '25%'
            });
    });
</script>