<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">My Blog</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
        @if (Auth::check())
            <a class="btn btn-sm btn-outline-secondary" href="#">{{ Auth::user()->name}}</a>
        @endif
        </div>
    </div>
</header>
