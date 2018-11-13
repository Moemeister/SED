<?php
    session_start();
    /*if ($_SESSION['username'] == null){
        echo 'NO AUTHORIZATION';
    }*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>QUE SED</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/effect_nav.js"></script>
</head>
<body>
    <header>
        <div class="menu_bar">
            <a href="#" class="btn-menu"><span class="icon-menu"></span>Menu</a>
        </div>
        <nav>
            <ul>
                <li><a href="#"><span class="icon-home"></span> SEDShop</a></li>
                <li><a href="#"><span class="icon-bubble"></span> About</a></li>
                <li class="account" >
                    <?php
                        if(isset($_SESSION['username'])){
                            echo '<a href="logout.php"><span class="icon-cog"></span>'.$_SESSION['username'].' Log Out</a>';

                        }else{
                            echo '<a href="login.php"><span class="icon-cog"></span> Log In</a>';
                        }
                    ?>
                </li>
            </ul>
        </nav>
        
        

    </header>



    <section class="header_banner">
            <img class="img_banner"src="img/onlineshopping-banner.png" alt="banner online shop">
    </section>

        <div class="container">
            <p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, quam veritatis dignissimos numquam ea non expedita consequatur recusandae assumenda itaque beatae optio odit, ex laborum ut fugit maxime officia voluptatem.</span>
            </p>
        </div>


        <div class="row">
            <a class="item" href="#">
                <div class="image" style="background-image: url(https://i.postimg.cc/kG2nG90k/JPEG-Bild-C9-EE86-A30950-4.jpg);"></div>
                <p class="item_description">Plant</p>
            </a>
            <a class="item" href="#">
                <div class="image" style="background-image: url(https://i.postimg.cc/0Nxx17cM/JPEG-Bild-C9-EE86-A30950-2.jpg);"></div>
                <p class="item_description">Another Plant</p>
            </a>
            <a class="item" href="#">
                <div class="image" style="background-image: url(https://i.postimg.cc/0Nxx17cM/JPEG-Bild-C9-EE86-A30950-2.jpg);"></div>
                <p class="item_description">Another Plant</p>
            </a>
            <a class="item" href="#">
                <div class="image" style="background-image: url(https://i.postimg.cc/0Nxx17cM/JPEG-Bild-C9-EE86-A30950-2.jpg);"></div>
                <p class="item_description">Another Plant</p>
            </a>
        </div>
        <div class="container">
            <p>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit porro numquam laudantium odio nostrum error animi nisi libero ex fugiat nam minima cupiditate, molestiae eius, officia eaque, aliquam nulla magnam?</span>
                <span>Incidunt iusto deleniti nisi commodi magni hic ratione, explicabo quam reiciendis libero fuga ullam harum eius repudiandae fugiat provident dignissimos voluptas voluptate soluta! Temporibus voluptates, sint impedit dolor odio reprehenderit?</span>
                <span>Ipsam minus tempore, officiis dolor, sit quasi suscipit repellat dolorum odit quis aspernatur cupiditate nesciunt perferendis totam aperiam soluta? Ex, est! Id nulla aliquam odit. Aspernatur beatae laborum omnis reprehenderit!</span>
                <span>Optio natus commodi ab tenetur blanditiis quae laboriosam porro aperiam voluptatem, id repellendus dolore unde. Expedita numquam sapiente enim minima reprehenderit consequatur eum quos, sed pariatur ex. Cum, culpa quisquam.</span>
                <span>Sunt eos molestiae ad architecto totam nihil similique itaque, veritatis numquam esse quaerat dolor aspernatur? Et saepe repellendus quidem placeat officiis harum delectus accusamus tenetur. Repudiandae nemo at facilis repellat!</span>
                <span>Eius est earum quidem expedita nisi fuga vitae esse, dolorum qui rem officia maxime aliquam quia, voluptates, itaque sint id velit harum molestiae. Dolore laudantium sed omnis enim. Sapiente, veniam.</span>
                <span>Non nisi soluta reprehenderit repellendus quod blanditiis nobis assumenda expedita ipsa fugit, distinctio at fugiat laudantium cum voluptas illo placeat tempora animi sapiente praesentium nihil eveniet? Mollitia voluptatum tenetur nemo.</span>
                <span>Veritatis laborum nesciunt in unde dignissimos ea praesentium harum temporibus, iure eos maiores placeat laboriosam qui tempore voluptas soluta ullam molestiae expedita molestias eaque odit! Sapiente explicabo mollitia rerum asperiores!</span>
                <span>Saepe unde, cupiditate ipsam molestias mollitia nam, cum dolorem sunt voluptatum nesciunt autem sequi ab veritatis soluta nihil incidunt quo quia eum adipisci? Quis ut quo necessitatibus fugit ipsam praesentium.</span>
                <span>Aspernatur, quod, sapiente veniam beatae, eius dicta placeat error optio soluta illum quisquam quis necessitatibus unde ea voluptates? Magni suscipit dignissimos aliquam officia rerum necessitatibus sed ullam natus ex. Fugit.</span>
                <span>Alias odit provident porro, aspernatur cum laboriosam assumenda eius recusandae exercitationem vero vitae deserunt quibusdam totam eos a officiis quo qui iure molestiae illo veniam debitis quaerat eveniet quod! Natus.</span>
                <span>Explicabo saepe commodi voluptates sunt cum assumenda libero. Ab tempora consequuntur voluptas nesciunt optio laboriosam fugiat possimus. Fugit ex suscipit itaque, veritatis, eos quo dignissimos similique adipisci ea non harum?</span>
                <span>Quae excepturi facilis magnam quam dolores nobis deserunt possimus enim cum debitis illo temporibus vel laudantium odit repellat cupiditate quas ea dignissimos quibusdam, rem hic animi. Enim magni modi inventore.</span>
                <span>Temporibus, perferendis dignissimos et repellendus molestiae, optio quos quia tempora perspiciatis laudantium at alias. Odit ab facilis voluptates ex. Sequi voluptatibus expedita repudiandae nulla omnis blanditiis ea impedit, vel aliquam!</span>
                <span>Blanditiis quo similique laborum tenetur veritatis, ipsum consectetur dolorum sunt aliquid ex rerum nihil animi amet consequatur quibusdam esse optio voluptates nam quis? Suscipit eum perspiciatis dicta ducimus sunt. Perspiciatis!</span>
                <span>Neque modi, tempore deleniti libero quidem quasi dignissimos rem inventore incidunt est architecto eveniet suscipit necessitatibus atque. Voluptas pariatur esse facere dicta doloribus, at ab ut fugit eius molestiae atque?</span>
                <span>Porro, repellat ipsam magni laborum minima perspiciatis ad dolore odio consequuntur eaque, impedit aliquam repudiandae repellendus voluptatibus velit molestiae aut error qui earum? Repudiandae obcaecati, vero accusamus itaque officiis eius!</span>
                <span>Expedita saepe nobis ratione neque? Amet, libero. Eum unde molestiae sit libero, tempore saepe soluta dolore omnis eos maxime accusantium aut architecto velit harum error at voluptatibus labore distinctio! Sequi?</span>
                <span>Reiciendis incidunt architecto assumenda quaerat distinctio sed natus voluptate impedit quasi laudantium facere et molestias illum debitis autem doloremque quas, recusandae corrupti quam itaque sunt culpa quidem vitae vel. Nobis.</span>
                <span>Temporibus magni molestias pariatur, assumenda qui nisi. Repudiandae deserunt sit inventore repellendus maiores, molestias ut sequi, beatae velit exercitationem provident quod iste odit suscipit, explicabo laborum dolorum vitae dolore dicta.</span>
            </p>
        </div>
</body>
</html>
