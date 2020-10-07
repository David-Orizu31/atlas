<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}
        @else
            {!! __('voyager::theme.footer_copyright') !!} <a href="mailto:fangjennifer911@gmail.com" target="_blank">Magic Fingers</a>
            <br>
            Message me on fangjennifer911@gmail.com for complaint
        @endif


    </div>
</footer>
