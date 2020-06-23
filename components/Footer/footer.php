<footer class="footer">
    <div class="container">
        
        <div class="contactWrapper">
            <div class="phoneWrapper">
                <div class="phone"> </div>
                <a style="display: inline-block; font-weight: bold;"> +78005553535 </a> <br> <br>
            </div>
            
            <div class="emailWrapper">
                <div class="email"> </div>
                <a style="display: inline-block; font-weight: bold;"> example@mail.ru </a> <br> <br>
            </div>
        </div>

        <p class="copyright"> СТРОИМ ВМЕСТЕ @ 2020 </p>
    
        <div class="categoryWrapper">
            <?php foreach(DB::queryAll("SELECT * FROM `category`;") as $category)
            { ?>
                <a href="/<?=$category['category_techname'].'/'.'category'.'/'.$category['id_category']?>"> <?=$category['category_name']?> </a> </li>
            <?php } ?>
        </div>
    </div>
</footer>