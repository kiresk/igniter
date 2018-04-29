<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Cool stuff</a></li>
                <li><a class="text-muted" href="#">Random feature</a></li>
                <li><a class="text-muted" href="#">Team feature</a></li>
                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                <li><a class="text-muted" href="#">Another one</a></li>
                <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Resource</a></li>
                <li><a class="text-muted" href="#">Resource name</a></li>
                <li><a class="text-muted" href="#">Another resource</a></li>
                <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>{{ __('O nás') }}</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
        </div>

        <div class="col-12 col-md">
            <a class="link-no-decoration" rel="nofollow" target="_blank" href="https://github.com/kiresk/igniter">
                <img class="valign-bottom opacity-5" src="{{ URL::asset('images/github.png') }}">
                <small style="margin-left: -4px" class="opacity-2 text-muted">Igniter</small>
            </a>
            <hr>
            <div class="d-block mb-2 text-muted opacity-2">
                <small>{{__('Všetky práva vyhradené.')}}</small>
                <br /><small>&copy; 2017 - {{ date('Y') }}</small>
            </div>
        </div>
    </div>
</footer>