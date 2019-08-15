@if(config('cookie.cookie.enable') === true &&
   (!array_key_exists(config('cookie.cookie.name'), $_COOKIE) ||
   is_null($_COOKIE[config('cookie.cookie.name')])))

      @if(config('cookie.cookie.mechanism') == 'Redirect' ||
          config('cookie.cookie.mechanism') == 'Ajax')
         @include('CookieView::partials.'. strtolower(config('cookie.cookie.mechanism')))
      @else
           <div class="alert alert-danger">{{ __('CookieLang::view.error_mechanism') }} </div>
      @endif

      @if(config('cookie.template.extern_bootstrap'))
          @include('CookieView::partials.cdn._bootstrap');
      @endif
@endif
