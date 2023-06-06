{{-- Untuk side bar --}}
@php
    $currentRouteName = Route::currentRouteName();
@endphp

<div class="side-navbar bg-dark active-nav d-flex justify-content-between flex-wrap flex-column pt-2" id="sidebar">
    <ul class="nav flex-column text-white w-100">
        <a class="text-decoration-none mt-3 align-items-center text-white" href="{{route('home')}}">
            <i class="ps-3 bi bi-database-fill"></i>
            <strong class="">Master Barang</strong>
        </a>
        <li class="nav-item col-md-auto mt-5">
            <a href="{{route('home')}}" class="nav-link">
                <i class="bi bi-house-fill pe-1"></i>
                <span class="">Home</span>
            </a>
        </li>
        <li class="nav-item col-md-auto">
            <a href="{{route('barangs.index')}}" class="nav-link">
                <i class="bi bi-archive-fill pe-1"></i>
                <span class="">Data Barang</span>
            </a>
        </li>
    </ul>
    <div class="dropdown p-3">
        <a href="#" class="btn border-none btn-secondary text-white">
            <i class="bi bi-person-fill"></i>
            <span class="">Profile</span>
        </a>
    </div>
</div>
<div class="my-container active-cont">
    <nav class="navbar top-navbar navbar-light bg-dark px-5 d-flex">
        <a class="btn border-0 text-white" id="menu-btn"><i class="bi bi-menu-button-wide"></i></a>
    </nav>
