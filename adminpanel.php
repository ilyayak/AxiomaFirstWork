<?php include "filter.php" ?>
<header>
    <section class="header">
        <form method="post" action="filter.php">

            <input name="filter" placeholder="Введите ключ">
            <button type="submit" id="filter" class="header__button">
                Фильтр
            </button>
        </form>

        <button id="sort" class="header__button">
            <a href="/admin/sort.php">Сортировка</a>
        </button>
        <button id="exit" class="header__button">
            <a href="/admin/exit.php">выход</a>
        </button>
    </section>
</header>