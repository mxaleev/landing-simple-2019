<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 03.08.2019
 * Time: 20:20
 */
require($_SERVER["DOCUMENT_ROOT"]."/core/header.php");?>

<style>
    p {
        margin-bottom: 16px;
    }
    .container {
        width: 1140px;
        margin: 0 auto;
    }
    .blog-post__pick {
        position: relative;
        border-left: 3px solid #ffae00;
        margin-left: 61px;
        padding-left: 25px;
        margin-top: 25px;
        margin-bottom: 30px;
        font-style: italic;
        font-size: 18px;
        line-height: 28px;
    }
    .blog-post__pick:before {
        content: "\201c";
        color: #c33;
        font-size: 120px;
        font-family: Georgia,serif;
        font-style: normal;
        position: absolute;
        left: -64px;
        top: 0;
        line-height: 97px;
        min-height: 97px;
    }
</style>

<div class="container">

    <div class="blog-post__pick">
        <p>
            <strong>Пример</strong>
        </p>
        <p>
            ИП на ОСНО реализовал продукции на 1 млн 800 тысяч рублей, в том числе НДС (20%) = 300 тысяч рублей. Были закуплены материалы на 890 тысяч рублей, в том числе НДС (20%) = 148 333 рублей. Налог к уплате равен: 300 000 - 148 333 = 151 667 рублей.
        </p>
    </div>

</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/core/footer.php");?>