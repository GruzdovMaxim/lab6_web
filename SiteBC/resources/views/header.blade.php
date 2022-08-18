@section('header')
<header>
    <nav>
        <a href="?page=main" class="logo">
            <img src="images/logo.svg" class="logoimg"></img>
            <div class="logotext">
                <strong>Black Continent</strong>
                <hr>
                <p>Labrador kennel</p>
            </div>
        </a>
        <div class="menu">
            <ul>
                <li><a href="main">Home</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="news">News</a></li>
                <li><a href="about">About</a></li>
            </ul>
        </div>
        <form action="contact">
            <button class="contactBtn"><img src="images/icons/contact.png"></button>
        </form>
        </form>
        <input class="side-menu" type="checkbox" id="side-menu" />
        <label class="menu-button" for="side-menu"><img src="images/icons/menu.svg"></label>
        <div class="menu-phone">
            <ul>
                <li><a href="main">Home</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="news">News</a></li>
                <li><a href="about">About</a></li>
            </ul>
        </div>
    </nav>
</header>
