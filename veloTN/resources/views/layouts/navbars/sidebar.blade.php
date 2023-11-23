<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel"></i>
                    <span class="nav-link-text">{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p style="font-size: 11px">{{ __('User Profile') }}</p>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('bikes.index_backend') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p style="font-size: 11px">{{ __('Bikes Management') }}</p>
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('bikes_booking.index_backend') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p style="font-size: 11px">{{ __('Bookings Management') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('fondateurs.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p style="font-size: 11px">{{ __('Founders Management') }}</p>
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('associations.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p style="font-size: 11px">{{ __('Associations Management') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('events.index_backend') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p style="font-size: 11px">{{ __('Events Management') }}</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('rides.index_backend') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p style="font-size: 11px">{{ __('Balades Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
