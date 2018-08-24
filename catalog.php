<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 8/24/18
 * Time: 3:07 PM
 */
?>

<?php $page_title = 'Tool Catalog'; ?>

<?php $page_title = 'Garys Tool Selling Site'; ?>
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

<?php require(SHARED_PATH . '/nav.php'); ?>

<main role="main">
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    <?php if (isset($page_name)) { echo $page_name;  } ?>
                </h1>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="" aria-current="page" href="<?php echo url_for('index.php'); ?>">Home</a></li>
                    <?php if(isset($breadcrumb)) { ?>
                        <?php foreach ($breadcrumb as $crumb) { ?>
                            <li class="breadcrumb-item">
                                <a class="disabled text-muted" href="catalog.php?cat=<?php echo $crumb['category']; ?>"><?php echo $crumb['category']; ?></a>
                            </li>
                        <?php } //end foreach?>
                    <?php } ?>
                </ol>

            </nav>
        </div>
    </section>

    <section class="container-fluid">
        <div class="row">
            <?php if (isset($items)) { ?>
                <?php foreach ( $items as $item) { ?>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="container-fluid">
                            <article class="cards">
                                <div class="col-12">

                                    <section class="card-holder" id="<?php echo $item['code']; ?>">

                                        <section class="card code">
                                            <h2 class="cat-order-code bottom-drop center" data-code="<?php echo $item['code']; ?>">Code: <?php echo $item['code']; ?></h2>

                                            <h3 class="cat-order-name center"><?php echo $item['name']; ?></h3>

                                            <img class="cat-order-image thumbnail box-image-width" src="<?php echo IMAGES .  $item['image']; ?>" alt="<?php echo $item['description']; ?>">


                                            <h4 class="cat-order-price" data-value="<?php echo $item['price']; ?>">Price: <?php echo $price = ($item['price'] == 0 ? 'Make offer' :  '$' . $item['price']); ?></h4>

                                            <h4 class="cat-order-sold sale"><?php echo $sold = ($item['sold'] == 0 ? 'For Sale' : 'sold'); ?></h4>

                                            <a class="cat-order-btn btn btn-lg btn-outline-danger btn-width center-block"  href='details.php?id=<?php echo $item['id']; ?>'>
                                                More Info
                                            </a>
                                        </section>
                                    </section><!--/card-holder-->
                                </div>
                                <!-- /.row -->
                            </article>
                        </div>
                    </div>
                    <!-- /.col-sm-6 -->
                <?php } //end foreach?>
            <?php } //end isset items?>
        </div>
        <!-- /.row -->
    </section>
</main>
<?php include(SHARED_PATH . '/footer.php'); ?>

