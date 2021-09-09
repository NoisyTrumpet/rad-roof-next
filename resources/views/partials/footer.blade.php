<footer class="content-info">
    <div class="footer-top position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 footer-col-1">
                    @php dynamic_sidebar('col-footer-1') @endphp
                </div>
                <div class="col-md-4 col-sm-12 footer-col-2">
                    @php dynamic_sidebar('col-footer-2') @endphp
                </div>
                <div class="col-md-4 col-sm-12 footer-col-3">
                    @php dynamic_sidebar('col-footer-3') @endphp
                </div>
            </div>
        </div>
    </div>
<!-- <div class="bg-light">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 100" style="enable-background:new 0 0 1920 100;" xml:space="preserve">
        <style type="text/css">
            .st0 {
                fill: #2F372B;
            }
        </style>
        <polygon class="st0" points="0,100 960,0 1920,100 " />
    </svg>
</div> -->
    <div class="footer-bottom bg-primary position-relative">
        <div class="angles-wrapper d-flex position-absolute">
            <div class="w-100 bgCol-left"></div>
            <div class="w-100 bgCol-right"></div>
        </div>
        <div class="container text-secondary mb-0 text-center py-4">
            @php dynamic_sidebar('sidebar-footer') @endphp
        </div>
    </div>
</footer>