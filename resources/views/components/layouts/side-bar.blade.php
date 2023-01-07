<div class="sidebar-wrapper toggle">
    <div>
        <div class="logo-wrapper">
            <a href="{{route('/')}}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt=""><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{route('/')}}"><img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">{{ trans('lang.General') }} </h6>
                            <p class="lan-2">{{ trans('lang.Dashboards,widgets & layout.') }}</p>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success">2</label>
                        <a class="sidebar-link sidebar-title {{request()->route()->getPrefix() == '/dashboard' ? 'active' : '' }}" href="{{route('index')}}"><i data-feather="home"></i><span class="lan-3">{{ trans('lang.Dashboards') }}</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ Route::currentRouteName() == 'search' ? 'active' : '' }}" href="{{ route('activities.list') }}"><i data-feather="git-pull-request"></i><span>{{ trans('lang.Activities') }}</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ in_array(request()->route()->getName(),['stores.list','stores.create','stores.edit']) ? 'active' : '' }} " href="{{route('stores.list')}}"><i data-feather="users"> </i><span>{{ trans('lang.Stores') }}</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav {{ in_array(request()->route()->getName(),['customers.list','customers.create','customers.edit']) ? 'active' : '' }} " href="{{route('customers.list')}}"><i data-feather="users"> </i><span>{{ trans('lang.customers') }}</span></a></li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ in_array(request()->route()->getName(),['owners.list','owners.create','owners.edit','employers.list','employers.create','employers.edit']) ? 'active' : '' }}" href="#" data-bs-original-title="" title="">
                            <i data-feather="users"></i><span>{{ trans('lang.users & Employers') }}</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: none;">
                            <li><a href="{{route('owners.list')}}" class="{{ in_array(request()->route()->getName(),['owners.list','owners.create','owners.edit']) ? 'active' : '' }} " data-bs-original-title="" title="">@lang('lang.Owners')</a></li>
                            <li><a href="{{route('employers.list')}}" class=" {{ in_array(request()->route()->getName(),['employers.list','employers.create','employers.edit']) ? 'active' : '' }} " data-bs-original-title="" title="">@lang('lang.Employers')</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title {{ in_array(request()->route()->getName(),['products.list','products.create','products.edit','employers.list','employers.create','employers.edit']) ? 'active' : '' }}" href="#" data-bs-original-title="" title="">
                            <i data-feather="users"> </i><span>{{ trans('lang.Products & Services') }}</span>
                            <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: none;">
                            <li><a href="{{route('products.list')}}" class="{{ in_array(request()->route()->getName(),['products.list','products.create','products.edit']) ? 'active' : '' }} " data-bs-original-title="" title="">@lang('lang.Products')</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>