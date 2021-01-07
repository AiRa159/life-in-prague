<header>
    <p>Život v Praze</p>
</header> 

<ul class = "navigation_bar">
    <li><a href = "/blog/articles/about_prague/prague.php" >O Praze</a></li>
    <li><a href = "/blog/articles/about_university/university.php" >Univerzity</a></li>
    <li><a href = "/blog/articles/about_residence/residence.php" >Koleje</a></li>
    <li>
        <div class = "doc">
            <button id = "documents">Dokumenty</button>
            <div class = "doc_array">
                <a href = "/blog/articles/about_nostr/nostr.php">Nostrifikace</a>
                <a href = "/blog/articles/about_visa/visa.php">Vízum</a>
            </div>
        </div>
    </li> 
    <li>
        <div class = "other_inf">
            <button id = "other">Ostatní</button>
            <div class = "array">
                <a href = "/blog/articles/other/address.php">Adresy</a>
                <a href = "/blog/articles/other/sites.php">Pro studenty</a>
            </div>
        </div>
    </li>
    <?php 
        if(isset($_SESSION["status"])){
            $path = "/blog/profil/profil.php";
        }else
            $path = "/blog/profil/registration.php";
    ?>
    <li id = "profil"><a href = <?php echo $path?>><img alt = "profil_pic" src = "/blog/site_pictures/profil.png"></a></li>
</ul>

<!--Array of social networks-->
<ul class="social_networks">
    <li><a href="https://instagram.com/p.r.a.z.h.s.k.i.y.news?igshid=mkvnjm1b1519"><img alt="insta_pic" src="/blog/site_pictures/insta.png"></a></li>
    <li><a href="https://web.telegram.org/#/im?p=@prazhskiy_news"><img alt="tg_pic" src="/blog/site_pictures/tg.png"></a></li>
    <li><a href = "" onclick = "changeStyle()"><img alt="style_icon" id="imgChange" src = "/blog/site_pictures/moon.png"></a></li>
</ul>
<script src="/change.js"></script>