

    <body <?php body_class(); ?>>
        <div id="headerDog"class="headerDog">
            <div class="headerTop">
                <div id="socialLink" class="socialLink">
                    <ul>
                        <li><i class="fab fa-facebook-f"></i></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><button type="button" name="button" id="modalTrigger"><i class="fas fa-search"></i></button></li>
                    </ul>
                </div>
                <div class="title">
                    <h1>FooDog</h1>
                </div>
            </div>
            <div class="pageLink">
                <?php wp_nav_menu() ?>
            </div>
        </div>
        <div class="modalSearch" id="modalSearch">
            <button type="button" class="modalClose" id="modalClose" name="button"><i class="fas fa-times"></i></button>
            <input type="text" placeholder="Insérez votre recherche ici" name="Search" value=""><button type="submit" class="searchModal" name="searchModal"><i class="fas fa-search"></i></button>
        </div>
        <script type="text/javascript">
            let modalButton = document.getElementById("modalTrigger");
            let modalDiv = document.getElementById("modalSearch");
            let modalClose = document.getElementById("modalClose");
            modalButton.addEventListener("click", function (){modalDiv.classList.toggle("isActive")});
            modalClose.addEventListener("click", function(){modalDiv.classList.remove("isActive")});
        </script>
