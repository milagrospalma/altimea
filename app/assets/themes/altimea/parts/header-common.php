<?php
$menu = get_menu_content();
?>

<?php if( $menu ) { ?>
    <ul class="menu-options js-main-menu">
        <?php foreach ($menu as $menuOption) { ?>
            <?php 
                $isSubmenu = $menuOption['alt_menu_conditional'];
            ?>
                <li>
                    <a href="<?php echo $isSubmenu ? 'javascript:void(0)' : $menuOption['alt_menu_href'];?>" class="<?php if ( $isSubmenu ){ echo 'js-submenu'; }?>">
                        <?php echo $menuOption['alt_menu_option']; ?>
                        <?php if ( $isSubmenu ) { ?>
                            <svg class="menu-arrow" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.575 6.55C5.44167 6.55 5.31267 6.525 5.188 6.475C5.06267 6.425 4.95833 6.35833 4.875 6.275L0.275 1.675C0.0916663 1.49167 0 1.25833 0 0.974999C0 0.691666 0.0916663 0.458333 0.275 0.275C0.458333 0.0916663 0.691667 0 0.975 0C1.25833 0 1.49167 0.0916663 1.675 0.275L5.575 4.175L9.475 0.275C9.65833 0.0916663 9.89167 0 10.175 0C10.4583 0 10.6917 0.0916663 10.875 0.275C11.0583 0.458333 11.15 0.691666 11.15 0.974999C11.15 1.25833 11.0583 1.49167 10.875 1.675L6.275 6.275C6.175 6.375 6.06667 6.44567 5.95 6.487C5.83333 6.529 5.70833 6.55 5.575 6.55V6.55Z" fill="#002C6B"/>
                            </svg>
                        <?php } ?>
                    </a>
                    <?php if ( $isSubmenu ) { ?>
                        <div class="container-submenu">
                            <ul>
                                <?php foreach ($menuOption['alt_menu_submenu'] as $submenuOption) { ?>
                                    <li>
                                        <a href="<?php echo empty($submenuOption['alt_submenu_href']) ? 'javascript:void(0)' : $submenuOption['alt_submenu_href'];?>">
                                            <?php echo $submenuOption['alt_submenu_option']; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </li>
            <?php ;?>
        <?php } ?>
    </ul>
<?php } ?>