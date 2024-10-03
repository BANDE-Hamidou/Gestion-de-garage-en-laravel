

  <!--=============== HEADER ===============-->
  <header class="header">
    <nav class="nav container">
        <div class="nav__data">
            <a href="#" class="nav__logo">
                <i class="ri-code-s-slash-line"></i> Garage
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="#" class="nav__link">Home</a>
                </li>

                <li>
                    <a href="{{ route('vehicules.index') }}" class="nav__link">vehicules</a>
                </li>
                
                <!--=============== DROPDOWN 1 ===============-->

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link dropdown__button">
                        Annexes <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-code-line"></i>
                                </div>

                                <span class="dropdown__title">Ouagadougou</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Fada</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Bobo Dioulasso</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-pen-nib-line"></i>
                                </div>

                                <span class="dropdown__title">Designs</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Web designs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">App designs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Component design</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-apps-2-line"></i>
                                </div>

                                <span class="dropdown__title">Others</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Recent blogs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Tutorial videos</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Webinar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- <li>
                    <a href="#" class="nav__link">Pricing</a>
                </li> --}}

                <!--=============== DROPDOWN 3 ===============-->
                <li class="dropdown__item">                        
                    <div class="nav__link dropdown__button">
                        Entretiens <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">About us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety and quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <!--=============== DROPDOWN 3 ===============-->
                @php 
                    $user = auth()->user();
                @endphp
                @if (auth()->check()) 
                    @if ($user->is_admin) 
                <li class="dropdown__item">                        
                    <div class="nav__link dropdown__button">
                        Factures <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">About us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety and quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!--=============== DROPDOWN 3 ===============-->
                <li class="dropdown__item">                        
                    <div class="nav__link dropdown__button">
                        services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">About us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety and quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!--=============== DROPDOWN 3 ===============-->
                <li class="dropdown__item">                        
                    <div class="nav__link dropdown__button">
                        Personnel <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">About us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety and quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown__item">                        
                    <div class="nav__link dropdown__button">
                        Clients <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-community-line"></i>
                                </div>

                                <span class="dropdown__title">About us</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">About us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Support</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Contact us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown__group">
                                <div class="dropdown__icon">
                                    <i class="ri-shield-line"></i>
                                </div>

                                <span class="dropdown__title">Safety and quality</span>

                                <ul class="dropdown__list">
                                    <li>
                                        <a href="#" class="dropdown__link">Cookie settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown__link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
            @endif


            </ul>
        </div>
    </nav>
</header>