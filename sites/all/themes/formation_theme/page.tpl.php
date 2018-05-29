
<div id="page">
    <div class="wrapper">
        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 margin-vertical-30" id="logo">
                        <a href="<?php print $front_page;?>">
                                <img src="/drupal_formation/sites/default/files/logo.jpg" alt="<?php print $site_name;?>" height="50" width="auto" />
                                <span class="site-name"><?php print $site_name ;?></span>
                        </a>
                    </div>
                    <div class="col-lg-8" id="menu">
                        <?php if ($page['menu']): ?>
                            <?php print render($page['menu']); ?>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
        <div id="wrapper_slider">
            <div id="slider">
                <?php if ($page['slider']): ?>
                    <?php print render($page['slider']); ?>
                <?php endif; ?>
            </div>
        </div>
        <div id="main-content">
            <div class="container">
                <div class="row  " id="content">
                    <div class="col-lg-12">
                        <?php print render($title_suffix); ?>
                        <?php print render($messages); ?>
                        <?php if ($tabs): ?>
                            <div class="tabs"><?php print render($tabs); ?></div>
                        <?php endif; ?>
                        <?php if ($action_links): ?>
                            <ul class="action-links"><?php print render($action_links); ?></ul>
                        <?php endif; ?>
                        <?php if ($page['content']): ?>
                            <?php print render($page['content']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="full_content" class=" ">
                <?php if ($page['full_content']): ?>
                    <?php print render($page['full_content']); ?>
                <?php endif; ?>
            </div>
        </div>
        <div id="prefooter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 first_half_middle  " >
                        <?php if ($page['first_half_middle']): ?>
                            <?php print render($page['first_half_middle']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 second_half_middle  " >
                        <?php if ($page['second_half_middle']): ?>
                            <?php print render($page['second_half_middle']); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 first_middle  " >
                        <?php if ($page['first_middle']): ?>
                            <?php print render($page['first_middle']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 second_middle  " >
                        <?php if ($page['second_middle']): ?>
                            <?php print render($page['second_middle']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 thrid_middle  " >
                        <?php if ($page['thrid_middle']): ?>
                            <?php print render($page['thrid_middle']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 first_footer  " >
                        <?php if ($page['first_footer']): ?>
                            <?php print render($page['first_footer']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 second_footer  " >
                        <?php if ($page['second_footer']): ?>
                            <?php print render($page['second_footer']); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4 thrid_footer  " >
                        <?php if ($page['thrid_footer']): ?>
                            <?php print render($page['thrid_footer']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div id="full_footer">
                <?php if ($page['full_footer']): ?>
                    <?php print render($page['full_footer']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
