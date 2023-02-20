<?php

['username'=> "asa"]

die(`
<form action="formProcess.php" method="post">
        <label for="username">user name:</label>
        <input type="text" name="username" id="username" placeholder="Enter your name">
        <br>
        <label for="password">password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <br>
        <label for="email">user email:</label>
        <input type="email" name="email" id="email" placeholder="Тимур ЛОХ">
        <br>
        <label for="File">File:</label>
        <input type="File" name="File" id="File" placeholder="Enter your File">
        <br>
        <label for="language">Язык</label>
        <select name="language" id="language">
            <option selected disabled>твой язык самый дилнный</option>
            <option value="ru">Русский</option>
            <option value="en">Анлгискмй</option>
            <option value="kz">Казахский</option>
        </select>

        <div class="form_row">
            <label for="radio_women">Женский</label>
            <input type="radio" name="sex" value="Женский">
            <label for="radio_men">Мужской</label>
            <input type="radio" name="sex" value="Мужской">
            <label for="radio_empty">Оставить пустым</label>
            <input type="radio" name="sex" value="Оставить пустым" checked>
        </div>

        <div class="form_row">
            <label for="checkbox_women">Женский</label>
            <input type="checkbox" name="sex" value="Женский">
            <label for="checkbox_men">Мужской</label>
            <input type="checkbox" name="sex" value="Мужской">
            <label for="checkbox_empty">Оставить пустым</label>
            <input type="checkbox" name="sex" value="Оставить пустым" checked>
        </div>

        <input type="hidden" name="hidden" value="some hidden value">
        <div class="form_row">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" value="1" min="0" max="110">
        </div>
        <div class="form_row">
            <label for="about">about</label>
            <textarea name="about" id="about" cols="5" rows="10"></textarea>
        </div>

        <div class="form">
            <input type="submit" name="submit" id="submit">
            <input type="reset" name="reset" id="reset">
        </div>

        <div class="form_row">
            <button>Submit</button>
            <button type="s"></button>
        </div>
    </form>)