<!-- <body>
    <section>
    <article>
        <h1>Bienvenue sur notre page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reprehenderit natus mollitia ut voluptas iste tenetur dignissimos! Impedit possimus illo eos, odit obcaecati sit modi magnam cum debitis! Eos, eveniet.</p>
    </article>
    <article>
        <h1>Nos valeurs</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repudiandae beatae accusantium eligendi qui dolorem maxime nobis labore rerum quis vero provident obcaecati, ex architecto commodi est, expedita modi tempore.
        Dolorum ex, vel laboriosam, ipsum temporibus earum nobis molestias, dicta quaerat eius obcaecati dolore rerum tempore mollitia architecto reprehenderit quidem repudiandae nihil asperiores? Veniam amet ab minima libero totam dolore!
        Quibusdam perspiciatis fugiat nobis illum omnis, provident placeat minus repellendus odit voluptates laborum, aperiam harum eius iusto voluptas ipsa voluptatibus corrupti quam? Nesciunt deleniti nihil nam, explicabo alias et eius?
        Omnis nulla beatae soluta eum atque fugit iure sint, quam minus est quod, dolorem, incidunt voluptate. Sed tempore, quod illum soluta cum debitis quisquam architecto? Dolore necessitatibus sapiente explicabo totam?
        Animi, corrupti, vero reiciendis iste porro impedit facilis quidem sit vitae laudantium nulla debitis. Optio tempora debitis tenetur nulla, possimus nostrum natus hic iusto officia, nihil ab itaque necessitatibus adipisci.
        Adipisci doloremque labore explicabo reprehenderit tempora sapiente ipsum temporibus! Dicta, officiis nam sed adipisci iure qui. Quod iste quisquam, veritatis quidem soluta laborum architecto illo, commodi possimus placeat corrupti a.
        </p>
    </article>
    </section> -->

    <?php

    $content = glob('./includes/*.inc.php');
    $page = isset($_GET['page']) ? $_GET['page'] : "";

    $page = './includes/' . $page . '.inc.php';

$page = in_array($page, $content) ? $page : './includes/home.inc.php';

require $page;