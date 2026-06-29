<header>

    <div class="left">

        <button id="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </button>

        <h2>Dashboard Waroeng Lumintue's</h2>

    </div>

    <div class="right">

        <div class="profile-dropdown">

            <div class="profile-btn" id="profileBtn">

                <img src="https://ui-avatars.com/api/?name=Yeqiu" alt="">

                <div class="profile-info">
                    <h4>Yeqiu</h4>
                    <small>Pemilik Warung</small>
                </div>

                <i class="fa-solid fa-chevron-down"></i>

            </div>

            <div class="dropdown-menu" id="dropdownMenu">

                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    Profile
                </a>

                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    Pengaturan
                </a>

                <hr>

                <form method="POST" action="">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </div>

</header>