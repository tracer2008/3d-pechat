<header id="header" class="header">
    <div class="container">

        <div class="header_body row justify_align">
            <div class="header_left row">
                <a href="{{route('index')}}" class="logo__link">
                    <img src="{{asset('images/logo.svg')}}" alt="" class="logo">
                </a>

                <div class="menu_wrap">
                    <ul class="menu row mb-0">
                        <li class="menu_item"><a href="#services" class="menu_link">Услуги</a></li>
                        <li class="menu_item"><a href="#plastic" class="menu_link">Пластик</a></li>
                        <li class="menu_item"><a href="#portfolio" class="menu_link">Портфолио</a></li>
                        <li class="menu_item"><a href="#equipment" class="menu_link">Оборудование</a></li>
                    </ul>
                </div>
            </div>

            <div class="header_right row">
                <a href="mailto:hello@ic3d.ru" class="header_contact header_email">
                    <img src="{{asset('images/icons/mail.svg')}}" alt="" class="header_contact__icon">
                    hello@ic3d.ru
                </a>
                <a href="tel:+79507137135" class="header_contact header_phone">
                    <img src="{{asset('images/icons/phone.svg')}}" alt="" class="header_contact__icon">
                    +7 950 713 71 35
                </a>
                <a href="#form" class="header_order">Заказать</a>
            </div>

            <div class="mobile_icons">
                <a href="tel:+79507137135" class="mobile_icon mobile_icon-phone"></a>
                <span class="mobile_icon mobile_icon-burger row" onclick="support.openMenu(this)">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </span>
            </div>

            <div class="mobile_menu_wrap ">
                <ul class="menu row mb-0">
                    <li class="menu_item"><a href="#services" class="menu_link">Услуги</a></li>
                    <li class="menu_item"><a href="#plastic" class="menu_link">Пластик</a></li>
                    <li class="menu_item"><a href="#portfolio" class="menu_link">Портфолио</a></li>
                    <li class="menu_item"><a href="#equipment" class="menu_link">Оборудование</a></li>
                </ul>

                <div class="header_right row">
                    <a href="mailto:hello@ic3d.ru" class="header_contact header_email">
                        <img src="{{asset('images/icons/mail.svg')}}" alt="" class="header_contact__icon">
                        hello@ic3d.ru
                    </a>
                    <a href="tel:+79507137135" class="header_contact header_phone">
                        <img src="{{asset('images/icons/phone.svg')}}" alt="" class="header_contact__icon">
                        +7 950 713 71 35
                    </a>
                </div>
            </div>

        </div>

    </div>
</header>
