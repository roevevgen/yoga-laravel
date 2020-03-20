<header>
    <div class="container">
        <nav>
            <ul>
                <li class="{{ Request::path() === '/about' ? 'current_page_item' : '' }}"><a href="/about">О нас</a></li>
                <li class="{{ Request::path() === '/photo' ? 'current_page_item' : '' }}"><a href="/photo">Фото</a></li>
                <li class="{{ Request::path() === '/price' ? 'current_page_item' : '' }}"><a href="/price">Стоимость</a></li>
                <li class="{{ Request::path() === '/contacts' ? 'current_page_item' : '' }}"><a href="/contacts">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>



