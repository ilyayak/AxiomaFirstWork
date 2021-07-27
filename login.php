
<form method="post"  action="?start" class="box Login">
    <fieldset class="boxBody boxBody">
        <h1 class="title">Войдите</h1>

        <div class="block block__one" id="1">
            <input type="text" name="login"
                   id="login"
                   placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль ">
        </div>
    </fieldset>
    <footer>
        <button type="submit" class="boxBody btnLogin" id="btnLoginStart"> start</button>
           <button  id="loadButton">
               <a href="?form">Регистрация</a>
           </button>
    </footer>
</form>