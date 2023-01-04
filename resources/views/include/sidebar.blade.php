<div class="profile-bx text-center">
    <div class="user-profile-thumb">
        <img src="assets/images/profile/pic1.jpg" alt="" />
    </div>
    <div class="profile-info">
        <h4><%= data.getName() %></h4>
        <span><%= data.getEmail() %></span>
    </div>
    <div class="profile-tabnav">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link" href="/profile"><i class="ti-pencil-alt"></i>Edit Profile</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="enrolled_courses"><i class="ti-book"></i>Courses</a></li>
            <li class="nav-item"><a class="nav-link" href="address"><i class="ti-book"></i>Address</a></li>
            <li class="nav-item"><a class="nav-link" href="change_pass"><i class="ti-lock"></i>Change
                    Password</a>
            </li>
        </ul>
    </div>
</div>