<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">E-Dashboard</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        @if (canAccess(['Dashboard View']))

        <li class="{{ setSidebarActive(['dashboard']) }}">
            <a  href="{{ route('dashboard') }}">
                <div class="parent-icon"><img src="{{ asset('assets/static/dashboard.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        @endif

        @if (canAccess(['Pos View']))

        <li class="{{ setSidebarActive(['pos']) }}">
            <a href="{{ route('pos.index') }}">
                <div class="parent-icon"><img src="{{ asset('assets/static/pos.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">POS</div>
            </a>

        </li>

        @endif

        @if (canAccess(['Order View']))

        <li class="{{ setSidebarActive(['order']) }}">
            <a href="{{ route('order') }}">
                <div class="parent-icon"><img src="{{ asset('assets/static/orders.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Orders</div>
            </a>

        </li>

        @endif


            @if (canAccess(['Product View']))

            <li class="{{ setSidebarActive(['product.*']) }}">
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><img src="{{ asset('assets/static/dashboard.webp') }}"
                            style="width: 30px; height: 30px" />
                    </div>
                   
                    <div class="menu-title">Products</div>
                    
                </a>
                <ul>
                    @if (auth()->guard('web')->user()->can('Product View'))
                    <li> <a href="{{ route('product.index') }}">
                            <i class='bx bx-radio-circle'></i>
                            All Products
                        </a>
                    </li>
                    @endif

                    @if (auth()->guard('web')->user()->can('Product Create'))

                    <li> <a href="{{ route('product.create') }}">
                            <i class='bx bx-radio-circle'></i>
                            Create Products
                        </a>
                    </li>

                    @endif

                </ul>
            </li>

            @endif

        @if (canAccess(['Template View']))

        <li class="{{ setSidebarActive(['template.*']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><img src="{{ asset('assets/static/template.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Template</div>
            </a>
            <ul>
                <li> <a href="{{ route('template.index') }}">
                        <i class='bx bx-radio-circle'></i>
                        All Template
                    </a>
                </li>

                <li> <a href="{{ route('template.create') }}">
                        <i class='bx bx-radio-circle'></i>
                        Add Template
                    </a>
                </li>

            </ul>
        </li>

        @endif

        @if (canAccess(['Attribute View']))



        <li class="{{ setSidebarActive(['attribute.*', 'editAttribute']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><img src="{{ asset('assets/static/dashboard.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Attribute</div>
            </a>
            <ul>
                <li> <a href="{{ route('attribute') }}">
                        <i class='bx bx-radio-circle'></i>
                        List of Attribute
                    </a>
                </li>

                <li> <a href="{{ route('createAttribute') }}">
                        <i class='bx bx-radio-circle'></i>
                        Add Attribute
                    </a>
                </li>

            </ul>
        </li>

        @endif


      

        <li class="{{ setSidebarActive(['report', 'saleReport', 'orderReportPdf', 'reportFilter', 'saleFilter']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><img src="{{ asset('assets/static/reports.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Report</div>
            </a>
            <ul>
                @if (canAccess(['Order Report']))
                <li> <a href="{{ route('report') }}">
                        <i class='bx bx-radio-circle'></i>
                        Order Report
                    </a>
                </li>
                @endif


                @if (canAccess(['Sale Report']))

                <li> <a href="{{ route('saleReport') }}">
                        <i class='bx bx-radio-circle'></i>
                        Sale Report
                    </a>
                </li>

                @endif

            </ul>
        </li>

        <li class="{{ setSidebarActive(['stock', 'stockOutProducts', 'upcomingStockOutProducts']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><img src="{{ asset('assets/static/inventory.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Inventory</div>
            </a>
            <ul>
                @if (canAccess(['Stock']))

                <li> <a href="{{ route('stock') }}">
                        <i class='bx bx-radio-circle'></i>
                        Stock
                    </a>
                </li>

                @endif

                @if (canAccess(['Stock Out Products']))

                <li> <a href="{{ route('stockOutProducts') }}">
                        <i class='bx bx-radio-circle'></i>
                        Stock Out Products
                    </a>
                </li>

                @endif

                @if (canAccess(['Upcoming Stock Out Products']))

                <li> <a href="{{ route('upcomingStockOutProducts') }}">
                        <i class='bx bx-radio-circle'></i>
                        Upcoming Stock Out Products
                    </a>
                </li>

                @endif


            </ul>
        </li>

        
        @if (canAccess(['Customer View']))

        <li class="{{ setSidebarActive(['customerInfo']) }}">
            <a href="{{ route('customerInfo') }}">
                <div class="parent-icon"><img src="{{ asset('assets/static/dashboard.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Customer Information</div>
            </a>

        </li>

        @endif

        <li class="{{ setSidebarActive(['couriarApi']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><img src="{{ asset('assets/static/delivery.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">API Setting</div>
            </a>
            <ul>
                <li> <a href="{{ route('couriarApi') }}">
                        <i class='bx bx-radio-circle'></i>
                        Couriar Api
                    </a>
                </li>


            </ul>
        </li>

        @if (canAccess(['Marketing View']))

        <li class="{{ setSidebarActive(['marketing']) }}">
            <a href={{route('marketing')}}>
                <div class="parent-icon"><img src="{{ asset('assets/static/marketing.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Marketing</div>
            </a>

        </li>

        @endif

        <li class="{{ setSidebarActive(['generalSetting', 'media']) }}">
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><img src="{{ asset('assets/static/dashboard.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                @if (canAccess(['General Setting']))

                <li> <a href="{{ route('generalSetting') }}">
                        <i class='bx bx-radio-circle'></i>
                        General Settings
                    </a>
                </li>

                @endif


                @if (canAccess(['Media']))

                <li> <a href="{{ route('media') }}">
                        <i class='bx bx-radio-circle'></i>
                        Media
                    </a>
                </li>

                @endif

            </ul>
        </li>



        @if (canAccess(['Administration']))

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><img src="{{ asset('assets/static/administration.webp') }}"
                        style="width: 30px; height: 30px" />
                </div>
                <div class="menu-title">Administration</div>
            </a>
            <ul>
                <li> <a href="{{ route('role-user.index') }}">
                        <i class='bx bx-radio-circle'></i>
                        Role User
                    </a>
                </li>



                <li> <a href="{{ route('role-permission.index') }}">
                        <i class='bx bx-radio-circle'></i>
                        Role Permission
                    </a>
                </li>

            </ul>
        </li>

        @endif

     





    </ul>
    <!--end navigation-->
</div>
