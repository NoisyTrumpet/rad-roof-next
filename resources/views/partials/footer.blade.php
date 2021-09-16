<footer class="content-info">
    <div class="position-relative bg-light pt-5"></div>
        <div class="footer-top position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-col-1">
                        @php dynamic_sidebar('col-footer-1') @endphp
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-col-2 my-3 my-md-0">
                        @php dynamic_sidebar('col-footer-2') @endphp
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 footer-col-3">
                        @php dynamic_sidebar('col-footer-3') @endphp
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-primary position-relative">
            <div class="angles-wrapper d-flex position-absolute">
                <div class="w-100 bgCol-left"></div>
                <div class="w-100 bgCol-right"></div>
            </div>
            <div class="container text-secondary mb-0 text-center py-4 position-relative bottom-widgets">
                @php dynamic_sidebar('sidebar-footer') @endphp
            </div>
        </div>
</footer>
