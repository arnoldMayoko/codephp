    <?php
    require_once "composants/nav.php";
    require "inc/data_base.php"; 

    //Déclaration d'une variable pour l'affichage 
    $contenu = '';

    $sql = 'SELECT * FROM produits';
    $data = $data_base->prepare($sql);
    $data->execute();
   
   while( $produit = $data->fetch(PDO::FETCH_ASSOC) ){

        // print '<pre>';
        //     print_r( $produit );
        // print '</pre>';

        $contenu .= "<div class='produit'>
                        <div class='img_produit'height='100%' width='100%'>
                            <div class='favory_produit'>
                                <a href='><i class='fa-sharp fa-regular fa-heart'></i></a>
                            </div>
                            <a href='./produit_description.php'>
                                <img src='$produit[photo_produit_1]' alt='Titre du produit : '$produit[nom_produit]'' width='100%' height='100%' >
                            </a>
                            <div class='titre_produit'>
                                <a href='./produit_description.php'> <p>'$produit[nom_produit]'</p></a>
                            </div>
                            
                            <div class='prix_produit'>
                                <a href='./produit_description.php'>
                                    <p>$produit[prix_produit]<i class='fa-sharp fa-solid fa-euro-sign'></i></p>
                                </a>
                            </div>
                        </div>
                        
                            <div class='space'>
                                    
                            </div>
                    </div>";
                    
   }


    ?>


 <main class="accueil_produit">
    <div class="menu_ul_choix">
        <ul class="ul_categorie_produit">
            <li class="li_categorie_produit">
                <div class="tous_les_produits" ">
                    <a href="" class="">TOUS LES PRODUITS</a>
                    <div class="line_tous_produits" id="tous_produits"></div>
                </div>

                <div class="barbe">
                    <a href="">BARBES</a>
                    <div class="line_barbe"></div>
                </div>

                <div class="chevelure">
                    <a href="">CHEVELURE</a>
                    <div class="line_chevelure"></div>
                </div>

                <div class="accessoires">
                    <a href="">ACCESSOIRES</a>
                    <div class="line_accessoires"></div>
                </div>
            </li>
        </ul>
    </div>
</main>
  <!-- FRONT PRODUIT TOUS LES PRODUIT-->
    <section class="section_tous_produits">
        <div class="parent_produit">
           
                <?= $contenu; ?>

          
        </div>
    </section>





    
    <?php
    require_once "composants/footer.php"
    ?>