<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{asset('assets-merchant/images/logo-sbucks.png')}}" class="logo-icon-2" alt="" />
        </div>
        <div>
            <h4 class="logo-text">Sbucks</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{url('/merchant')}}" class="has-arrow">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard Merchants</div>
            </a>
        </li>
        <li class="menu-label">Web Apps</li>
        <li>
            <a href="{{route('menuCategories')}}">
                <div class="parent-icon icon-color-2"><i class="bx bx-envelope"></i>
                </div>
                <div class="menu-title">Menu Categories</div>
            </a>
        </li>
        <li>
            <a href="{{route('menus')}}">
                <div class="parent-icon icon-color-3"> <i class="bx bx-conversation"></i>
                </div>
                <div class="menu-title">Menus</div>
            </a>
        </li>
        <li>
            <a href="{{route('orders')}}">
                <div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
        </li>
        <li>
            <a href="{{route('invoices')}}">
                <div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
                </div>
                <div class="menu-title">Invoices</div>
            </a>
    </ul>
    <!--end navigation-->
</div>
