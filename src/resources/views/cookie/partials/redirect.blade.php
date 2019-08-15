<div id="cookie" class="alert alert-success text-center">
    <div>{{ __('CookieLang::view.info') }} </div>
    <a class="btn btn-danger" href='{{route("setCookie.goHome")}}'>{{ __('CookieLang::view.go_home') }}</a>
    <a class="btn btn-success" href='{{route("setCookie.setRedirectCookie")}}'>{{ __('CookieLang::view.button_info') }}</a>
</div>