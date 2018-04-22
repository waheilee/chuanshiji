
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="index.html">Stisla Lite</a>
            </div>
            <div class="sidebar-user">
                <div class="sidebar-user-picture">
                    <img alt="image" src="./distAdmin/img/avatar/avatar-1.jpeg">
                </div>
                <div class="sidebar-user-details">
                    <div class="user-name">Ujang Maman</div>
                    <div class="user-role">
                        {{Auth::user()->name}}
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">控制台</li>
                <li class="active">
                    <a href="index.html"><i class="ion ion-speedometer"></i><span>控制台</span></a>
                </li>

                <li class="menu-header">Components</li>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>分类管理</span></a>
                    <ul class="menu-dropdown">
                        <li><a href="{{url('/tree')}}"><i class="ion ion-ios-circle-outline"></i>分类管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>项目路演</span></a>
                    <ul class="menu-dropdown">
                        <li><a href="{{url('/project')}}"><i class="ion ion-ios-circle-outline"></i>文章管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>会务安排</span></a>
                    <ul class="menu-dropdown">
                        <li><a href="{{url('/meet')}}"><i class="ion ion-ios-circle-outline"></i>文章管理</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>产品展示</span></a>
                    <ul class="menu-dropdown">
                        <li><a href="{{url('/product')}}"><i class="ion ion-ios-circle-outline"></i>文章管理</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>营销网络</span></a>
                    <ul class="menu-dropdown">
                        <li><a href="{{url('/market')}}"><i class="ion ion-ios-circle-outline"></i>文章管理</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>营销网络</span></a>
                    <ul class="menu-dropdown">
                        <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i>文章管理</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#" class="has-dropdown"><i class="ion ion-flag"></i><span>联系我们</span></a>
                    <ul class="menu-dropdown">
                        <li><a href="ion-icons.html"><i class="ion ion-ios-circle-outline"></i>文章管理</a></li>

                    </ul>
                </li>
                {{--<li>--}}
                    {{--<a href="#"><i class="ion ion-heart"></i> Badges--}}
                        {{--<div class="badge badge-primary">10</div>--}}
                    {{--</a>--}}
                {{--</li>--}}

                <li>
                    <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Credits</a>
                </li>

            </ul>
            <div class="p-3 mt-4 mb-4">
                <a href="#"
                   class="btn btn-danger btn-shadow btn-round has-icon has-icon-nofloat btn-block">
                    <i class="ion ion-help-buoy"></i>
                    <div>Go PRO!</div>
                </a>
            </div>
        </aside>
    </div>
