@auth
    <footer class="footer py-2">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        <a href="{{ route('home') }}">ElNasr</a>. All Rights
                        Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
@else
    <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-12 my-auto">
                    <div class="copyright text-center text-sm text-white text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        <a href="{{ route('home') }}">ElNasr</a>. All Rights
                        Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endauth
