@php
    // $exceptions = ['login', 'register', 'password.request', 'password.reset'];
@endphp
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    @include('pages.partials.head')
    
    @stack('child-styles')

    <body id="app">       
        <div class="ie-panel">
            <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{asset('frontend/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
        </div>

        
        <div class="page">
            <!-- Page Header -->
            @include('pages.partials.navbar')
           
            @yield('content')
        </div>
        
        @include('pages.partials.scripts')

        @stack('child-scripts')
    </body>
</html>