<header>
    <section class="header">
        <form method="post" action="?filter" class="section__checkbox">

            <button id="filter" class="header__button" type="submit">
                    Фильтр
            </button>
            <div class="header__checkbox" name="headerCheckbox">
                    <label>Усидчивость</label><input type="checkbox" name="perseverance" >
                    <label>Опрятность</label> <input type="checkbox" name="neatness">
                    <label>Самообучаемость</label><input type="checkbox" name="selflearning">
                    <label>Трудолюбие</label><input type="checkbox" name="industriousness">
            </div>
        </form>

        <button id="exit" class="header__button">
            <a href="?exit">
                выход
            </a>
        </button>
    </section>
</header>