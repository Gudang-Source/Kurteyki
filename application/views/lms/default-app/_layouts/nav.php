 <header class="u-bg-white">
    <div class="container">
        <div class="row ">

            <div class="col-12">
                <div class="c-navbar u-border-bottom-zero u-p-zero">

                    <a class="u-text-center u-mr-medium" href="<?php echo base_url() ?>" title='<?php echo $site['title'] ?>'>
                        <img src="<?php echo base_url('storage/assets/lms/default-app/img/logo.png') ?>" alt="<?php echo $site['title'] ?>" style="width: 120px;">
                    </a>

                    <h1 class="u-h3 navbar__title u-text-bold u-hidden-visually"><?php echo $site['title'] ?></h1>

                    <form class='u-ml-auto' action="<?php echo base_url('courses-search') ?>" method="GET">
                        <div class="c-field c-field--inline has-icon-right c-navbar__search u-hidden-down@tablet">
                            <span class="c-field__icon">
                                <i class="fa fa-search"></i> 
                            </span>

                            <label class="u-hidden-visually" for="navbar-search"><?php echo $this->lang->line('search') ?></label>
                            <input class="c-input" id="navbar-search" type="text" name="q" placeholder="<?php echo $this->lang->line('search') ?>">
                        </div>
                    </form>                   

                    <!-- Navigation items that will be collapes and toggle in small viewports -->
                    <nav class="c-nav collapse u-ml-auto" id="main-nav">
                        <ul class="c-nav__list">
                            <li class="c-nav__item">
                            <a class="c-nav__link" href="<?php echo base_url() ?>" title='<?php echo $this->lang->line('home') ?>'><?php echo $this->lang->line('home') ?></a>
                            </li>
                            <?php if (empty($this->session->userdata('user'))): ?>
                                <li class="c-nav__item">
                                    <a class="c-nav__link" href="<?php echo base_url('auth') ?>" title='<?php echo $this->lang->line('sign_in').'/'.$this->lang->line('register') ?>'><?php echo $this->lang->line('sign_in').'/'.$this->lang->line('register') ?></a>
                                </li>
                            <?php endif ?>                            
                            <li class="c-nav__item u-hidden-up@tablet">
                                <form action="<?php echo base_url('courses-search') ?>" method="GET">
                                    <div class="c-field c-field--inline has-icon-right u-hidden-up@tablet">
                                        <span class="c-field__icon">
                                            <i class="fa fa-search"></i> 
                                        </span>

                                        <label class="u-hidden-visually"><?php echo $this->lang->line('search') ?></label>
                                        <input class="c-input" type="text" name="q" placeholder="<?php echo $this->lang->line('search') ?>">
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </nav>
                    <!-- // Navigation items  -->

                    <?php $this->load->view('lms/default-app/_layouts/nav-user'); ?>

                    <button class="c-nav-toggle " type="button" data-toggle="collapse" data-target="#main-nav">
                        <span class="c-nav-toggle__bar"></span>
                        <span class="c-nav-toggle__bar"></span>
                        <span class="c-nav-toggle__bar"></span>
                    </button><!-- // .c-nav-toggle -->

                </div>
            </div>

        </div>
    </div>
</header>