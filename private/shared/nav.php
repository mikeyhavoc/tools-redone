
        <nav role="navigation" class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigationBarToggle" aria-controls="navigationBarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navigationBarToggle">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for('/index.php') ?>">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" id="hand-tools" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">hand tools</a>

                        <div class="dropdown-menu" aria-labeledby="hand-tools">

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=crimps'); ?>">Crimps/Cutters</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=files'); ?>">Files</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=hammers'); ?>">Hammers</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=pliers'); ?>">Pliers</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=bars'); ?>">pry and pic bars</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=ratchets'); ?>">Ratchets</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=screwdrivers'); ?>">Screwdrivers</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=spoons'); ?>">spoons</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=vise_grips'); ?>">Vise Grips</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=wrenches'); ?>">Wrenches</a>

                        </div>
                    </li>
                    <li>

                        <a href="#" class="nav-link dropdown-toggle" id="tool-parts" role="button" data-toggle="dropdown" aria-hidden="false" aria-haspopup="true" aria-expanded="false">tool parts</a>
                        <div class="dropdown-menu" aria-labelledby="tool-parts">


                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=bits'); ?>">Bits</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=blades'); ?>">Blades</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=cables'); ?>">cables</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=chisels'); ?>">chisels</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=discs'); ?>">Discs/wheels</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=extensions'); ?>">Extensions</a>

                            <a class="dropdown-item" href="<?php echo url_for( 'catalog.php?cat=sockets'); ?>">Sockets</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for( 'catalog.php?cat=air-tools'); ?>">Air Tools</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for( 'catalog.php?cat=misc'); ?>">Misc Tools</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" class="nav-item" href="<?php echo url_for( 'catalog.php?cat=removers'); ?>">Removers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for( 'catalog.php?cat=jacks'); ?>">Jacks</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for( 'catalog.php?cat=cch'); ?>">Clamps/hooks/chains</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url_for('/email.php'); ?>" class="nav-link">Tools Inquiry</a>
                    </li>


                </ul>
            <!--    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
        <main role="main">