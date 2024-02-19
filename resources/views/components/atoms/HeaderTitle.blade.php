<div class="page-header">
    <h4 class="page-title text-capitalize">{{ $title }}</h4>
    <ul class="breadcrumbs">
        <li class="nav-home">
            <a href="#">
                <i class="fa-solid fa-rocket"></i>
            </a>
        </li>
        @if ($induk != null)
            <li class="separator">
                <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">{{ $induk }}</a>
            </li>
        @endif
        <li class="separator">
            <i class="fa-solid fa-chevron-right"></i>
        </li>
        <li class="nav-item">
            <a href="#">{{ $title }}</a>
        </li>
    </ul>
</div>
