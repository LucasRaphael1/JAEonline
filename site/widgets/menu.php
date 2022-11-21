<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/logoJae.jpeg" alt="Logo">
                </span>

                <div class="text logo-text">
                    <span class="name">J.A.E</span>
                    <span class="profession">Grêmio Estudantil</span>

                    <div>
                    <span style="text-align:center; background:<?= $user->plano == "diamond" ? "#5a5ac8" : "#ffe700" ?> !important; border-radius:5px; color: <?= $user->plano == "diamond" ? "#FFF" : "#000" ?>; padding: 2px 5px;">
                    <?= $user->plano ?> - <?= $user->combos ?>pts.</span>
                    </div>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="/site/sistema/sistema.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Menu</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/site/planos/planos.php">
                            <i class='bx bx-diamond icon' ></i>
                            <span class="text nav-text">Planos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/site/resgate/resgatar.php">
                            <i class='bx bx-basket icon'></i>
                            <span class="text nav-text">Resgatar Combos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/site/embreve/embreve.html">
                            <i class='bx bx-info-circle icon' ></i>
                            <span class="text nav-text">Sobre Nós</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="https://www.instagram.com/jae.brb/">
                            <i class='bx bxl-instagram icon'></i>
                            <span class="text nav-text">Nosso Instagram</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="/site/sair/sair.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav> 