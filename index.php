<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 8/24/18
 * Time: 2:41 PM
 */
require_once 'private/boilerplate.php';
$page_title = "Gary's Tools Site";

?>

<!doctype html>
<html lang="en">
<head>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116676832-2');
    </script>
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:835035,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>


    <!--   --><?php //include SHARED_PATH . '/js/googleanalytics.js'; ?>
    <!--    --><?php //include SHARED_PATH . '/js/hotjarAnalytics.js'; ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex">
    <meta name="description" content="Garys tools, retired bodyman selling his body tools locally in bradenton fl.">
    <link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/main.css">

    <title><?php echo $page_title; ?></title>
</head>
<body>

</body>
</html>
<body>
<header role="banner" class='container-fluid'>
    <section class='row'>
        <h1 class="col-12 col-md-4 tools logo__section logo">
            <a class="logo__title logo" href="<?php echo url_for( 'index.php'); ?>">Garys Tools</a>
        </h1>
    </section>
</header>


<?php require(SHARED_PATH . '/nav.php'); ?>
<main role="main">
    <div class="container-fluid">

    <div class="row">
        <section class="mobile-s">
            <article role="article" class="info col-12 col-sm-6 ">
                <h2 class="text-center">Info</h2>
                <p class="text-left">
                    Hi I am Gary and have been working in body shops over 40 years.
                    I have been in local <em>Bradenton</em> shops for about 25 years. I am <em>selling
                        off my tools</em>.<br> If you are interested I can provide work place references.
                    <br>These tools are my own tools, not selling other peoples tools for them so <em>do not ask</em>.
                    Also, These are mostly <strong>American made tools</strong>, All still usable, many are lightly used,
                    some even new.


                </p>
            </article>
            <article role="article" class="tool-info col-12 col-sm-6">
                <h2 class="text-center">Tool Info</h2>
                <p>Important to note:</p>
                <ul role="list">
                    <li>Generally <em>most</em> of these items there is only one of said item.</li>
                    <li>if any questions about an Item please email</li>
                    <li>listing will be updated asap after sales occur</li>
                    <li>Sales are local only</li>
                    <li>No Shipping Tools</li>
                </ul>
            </article>
        </section>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php
            $categories = random_catalog_array();
            foreach ( $categories as $item) { ?>
            <div class="col-12 col-sm-6 col-md-4">

                <article role="article" class="card text-center">

                        <?php  echo get_image_html($item); ?>

                   <div class="inner-card">
                        Item one<br>
                        $3.99<br>
                        for sale
                    </div>



                </article>

            </div><!--/ item one -->
            <?php } ?>
        </div>
    </div>
</main>
    <?php require(SHARED_PATH . '/footer.php'); ?>
