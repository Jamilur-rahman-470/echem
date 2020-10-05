<header>
    <nav>
        <div class="top-nav">
            <div class="brand">
                <img src="{{ asset('image/logo.jpeg') }}" width='120' alt="">
            </div>
            <div class="search">
                <form action="">
                    <input type="text" placeholder="What are you looking for?">
                    <button><i data-feather='search'></i></button>
                </form>
            </div>
            <div class="tag">
                <p>#PoweringThePrint</p>
            </div>
            <div class="cart"><a href="/"><i data-feather="shopping-cart"></i></a></div>
        </div>
    </nav>
    <div class="bottom-nav row-flex flex-justify-space flex-align-center">
        <div class="links">
            <ul class="row-flex flex-justify-center flex-align-center">
                <li class="" id='mega-shop'>
                    <p>SHOP <i data-feather="down"></i></p>
                    <div class="mega-shop-menu">
                        <x-mega-menu />
                    </div>
                </li>
                <li id='mega-sup'>
                    <p>LEARN</p>
                    <div class="mega-sup-menu">
                        <x-mega-menu />
                    </div>
                </li>
                <li id='mega-learn'>
                    <p>SUPPORT</p>
                    <div class="mega-learn-menu">
                        <x-mega-menu />
                    </div>
                </li>
            </ul>
        </div>
        <div class="btns">
            <a href="/user/sign-in">LOGIN</a>
        </div>
    </div>
</header>
