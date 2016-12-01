<footer>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 address-block">
                    <p id="address-title"><span class="icon-white"></span>al yousuf head office</p>
                        <div class="row">
                            <div class="col-lg-3 text-right">Address:</div>
                            <div class="col-lg-9">1st Flr., Daihatsu Showroom
                                <br>Bet. 2nd & 3rd interchange
                                <br>Sh. Zayed Road, Dubai, U.A.E
                                <br>P.O Box 25,Dubai
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 text-right">Tel:</div>
                            <div class="col-lg-9">+971 4 339 0000</div>
                            <div class="col-lg-3 text-right">Fax:</div>
                            <div class="col-lg-9">+971 4 339 5544</div>
                        </div>
                </div>
                <div class="col-lg-4 map-block">2</div>
                <div class="col-lg-2 links-block">
                    <ul>
                    <?php if (isset($menu)):?>
                        <?php foreach ($menu as $item):?>
                            <li><a href="?view=content&page=<?=$item['url']?>"><span class="icon-white"></span><?=$item['name']?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>
                    </ul>
                </div>
                <div class="col-lg-3 social-block">
                    <ul class="footer-social-list">
                        <?php if (isset($social_menu)):?>
                            <?php foreach ($social_menu as $item):?>
                                <li><a href="?view=content&page=<?=$item['url']?>"><i class="fa fa-lg <?=$item['fa-icon']?>"></i></a></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                    <form action="">
                        <div class="form-group">
                            <label for="footer-mail"></label>
                            <input id="footer-mail" type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/parallax.js"></script>
<script src="js/common.js"></script>
</body>
</html>