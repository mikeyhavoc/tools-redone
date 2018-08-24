<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 8/24/18
 * Time: 3:09 PM
 */
$pageTitle = 'Details'; ?>

    <!doctype html>
    <html lang="en">
    <head>
        <?php include SHARED_PATH . '/js/googleanalytics.js'; ?>
        <?php include SHARED_PATH . '/js/hotjarAnalytics.js'; ?>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="noindex">
        <meta name="description" content="Garys tools, retired bodyman selling his body tools locally in bradenton fl.">
        <link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo node_module('public/css/main.css'); ?>">

        <title><?php echo $page_title; ?></title>
    </head>
<body>
    <header role="banner" class='container-fluid'>
        <section class='row'>
            <h1 class="col-12 col-md-4 tools logo__section logo">
                <a class="logo__title logo" href="<?php echo url_for( 'index.php'); ?>">Garys Tools</a>
            </h1>
        </section>
    </header>

<?php include(SHARED_PATH . '/nav.php'); ?>


<main role="main">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo url_for('index.php'); ?>">Home</a></li>
                    <?php if(isset($breadcrumb)) { ?>
                        <?php foreach ($breadcrumb as $crumb) { ?>
                            <li class="breadcrumb-item"><a href="catalog.php?cat=<?php echo $crumb['category']; ?>"><?php echo $crumb['category']; ?></a></li>
                            <li class="breadcrumb-item active"><?php echo $crumb['code']; ?></li>
                        <?php } ?>
                    <?php } /* isset for breadcrumb*/?>
                </ol>
            </nav>
        </div><!--/col-12-->
    </div><!-- /.row -->


<section>
    <div class="container">
    <div class="row">
        <?php if(isset($items)) {   ?>
            <?php foreach ( $items as $item) { ?>
                <div class="col-12 col-sm-6">
                    <article role="article" class='card'>
                        <h1>Code: <?php echo $item['code']; ?></h1>
                        <h3>Name: <?php echo $item['name']; ?></h3>
                        <h3>Brand:<?php echo $item['brand']; ?></h3>
                        <h4>Category: <?php echo $item['category']; ?></h4>
                        <h4>Pieces: <?php echo $item['pieces']; ?></h4>
                        <h4>Quantity: <?php echo $item['quantity']; ?></h4>
                        <h4>Retail Price $ <?php echo $retail = ($item['retail'] == 0 ? ' N/A' : $item['retail']); ?></h4>
                        <h4>Price: <?php echo $price = ($item['price'] == 0 ? 'Make offer' : '$' . $item['price']); ?></h4>
                        <h4 class="sale">Sold: <?php echo  $sold = ($item['sold'] == 0 ? 'For Sale' : 'sold'); ?></h4>
                        <h4>Code: <?php echo $item['code']; ?></h4>
                        <p>Description: <?php echo $item['description']; ?></p>

                    </article>
                </div>

            <?php } ?>
        <?php } /* isset for $items */?>
        <?php if(isset($images)) { ?>
            <?php  foreach ($images as $image) { ?>
                <div class="col-12 col-sm-6">
                    <img class='card' src='<?php echo IMAGES . $image['image']; ?>' alt='<?php echo $image['description']; ?>'>
                </div>
            <?php  } ?>
        <?php } /* images isset */?>

       </div>
    </section>
</main>
<?php require(SHARED_PATH . '/footer.php'); ?>