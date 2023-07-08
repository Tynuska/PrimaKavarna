<?php get_header(); ?>

<section>
        <div class="medovnik">
            <div class="container">
                <h1>Speciální nabídka</h1>
                <p>Vychutnejte si naše nejlepší dobroty přímo v menu</p> 
                <img src="<?php echo get_template_directory_uri(); ?>/img/medovnik.jpg" alt="Medovník">
                <h2>Nejmedovější medovník jen za 69,-</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="akce">
            <div class="container">
                <div class="akceLeft">
                    <div class="cara"></div>
                    <h3>
                        Každé pondělí druhé cappuccino zdarma
                    </h3>
                    <p>
                        Zajděte si k nám v pondělí dopoledne pro cappuccino s sebou a získáte pro 
                        Vaše hezčí pondělí druhé cappuccino ZDARMA! 
                        Děláme vše pro vaše hezké pondělky! 
                    </p>
                </div>
                <div class="akceRight">
                        <div class="cara"></div>
                    <h3>
                        Zasílat akční nabídku na e-mail
                    </h3>
                    <p>
                        Nepropásněte akce na naší kávu a dezerty u nás v kavárně 
                    </p>
                    <form action="#" method="get" class=>
                        <input type="email" name="email" placeholder="Zadejte Váš e-mail">
                        <input type="submit">
                    </form>
                </div>

            </div>
        </div>
    </section>
    <?php get_footer(); ?>
