<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('user.index')}}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('role.index')}}">
            <i class="material-icons">person</i>
            <p>Roles</p>
            </a>
        </li>
        
        <li class="nav-item ">
            <a class="nav-link" href="{{route('post.index')}}">
            <i class="material-icons">person</i>
            <p>Posts</p>
            </a>
        </li>
        

        <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
    </div>
    </div>