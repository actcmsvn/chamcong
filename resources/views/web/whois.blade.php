<x-web-layout title="{{ __('WhoIs') }}">
	<section class="hero-wrap hero-wrap-2" style="background-image:url({{ asset('images/bg_4.jpg') }})">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{route('home')}}">Post <i class="fa fa-chevron-right"></i></a></span> <span>Post Detail <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Post Details</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <form id="whois-lookup-form" action="" method="POST">
                    @csrf
                    <div class="form-group{{ $errors->has('domain') ? ' has-error' : '' }}">
                        <label for="domain">Domain</label>
                        <input name="domain" type="text" value="{{ old('domain') }}" class="form-control" placeholder="Domain name">
                        @if ($errors->has('domain'))
                            <span class="help-block">
                                <strong>{{ $errors->first('domain') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default btn-block btn-lg">Search</button>
                </form>

                <br>
                <div id="response"></div>
                <script type="text/javascript">
                $(function() {
                    $( "#whois-lookup-form" ).on( "submit", function( event ) {
                        event.preventDefault();

                        var request = $.ajax({
                            url: $( this ).attr('action'),
                            method: $( this ).attr('method'),
                            data: $( this ).serialize(),
                            dataType: "json",
                            cache: false
                        });

                        request.done(function( response ) {
                            
                            $('#response').html('<pre>' + response.response + '</pre>');

                            grecaptcha.reset();
                            
                        });

                        request.fail(function( jqXHR, textStatus ) {
                            //alert( "Request failed: " + textStatus );

                            grecaptcha.reset();
                        });
                    });
                });
                </script>

            </div>
        </div>
    </section>
</x-web-layout>