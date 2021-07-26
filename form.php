<form action="?signup" method="post" class="box login" enctype="multipart/form-data">
    <fieldset class="boxBody">
        <button class="">
           <a href="?win">логин</a>
        </button>
        <div class="block block__one" id="block__one">
            <select type="radio" id="male" name="male">Ваш пол
                <option value="1">М</option>
                <option value="2">Ж</option>
            </select>
            <label>Фото для Аватара</label>
            <input type="file" name="avatar">
            <input type="text" name="name" placeholder="Имя*" data-required="Y">
            <input type="text" name="second_name" placeholder="Фамилия*" data-required="Y">
            <input type="text" name="third_name" placeholder="Отчество">
            <input type="date" name="birthdate" placeholder="Дата рождения" name="party" min="1980-04-01"
                   data-required="Y">
            <button class="button button__step" data-block-target="#block__two" data-block-validate="#block__one">
                Дальше
            </button>
        </div>
        dsg4g24gg

        <div class="block block__two hidden" id="block__two">
            <label>Личные качества</label>
            <input type="text" name="skills" placeholder="">
            <div class="section section__checkbox">
                <label>Навыки</label>
                <input type="checkbox" name="perseverance" >Усидчивость
                <input type="checkbox" name="neatness">опрятность
                <input type="checkbox" name="selflearning">самообучаемость
                <input type="checkbox" name="industriousness">трудолюбие
            </div>
            <button class="button button__step" data-block-target="#block__one">Назад</button>
            <button class="button button__step" data-block-validate="#block__two" data-block-target="#block__three">
                Дальше
            </button>
        </div>


        <div class="block block__three hidden" id="block__three">
            <label>Фото для Аватара</label>
            <input type="file" name="photo">
            <button class="button button__step" data-block-target="#block__two">Назад</button>
            <button class="button button__step" data-block-validate="#block__three" data-block-target="#block__four">
                Дальше
            </button>
        </div>


        <div class="block block__four hidden" id="block__four">
            <label>Загрузите фотографию</label>
            <input type="file" name="photos">
            <button class="button button__step" data-block-target="#block__three">Назад</button>
        </div>

        <button id="loadButton"> sdfgdst</button>
    </fieldset>
    <footer>
        <button type="submit" class="btnLogin" id="#startButton"> start</button>
    </footer>
</form>
