
<div class="nav_menu">
    <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
        <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    
                    <img src="http://media.doisongphapluat.com/695/2021/2/10/Lisa.jpg" alt="">
                    
                    
                        <span><?=$user->name?>,</span>
                        <h2><?=$user->email?></h2>
                    
                </a>
            
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                    <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                    </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="{{route('admin.logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
            </li>

            
        </ul>
    </nav>
</div>