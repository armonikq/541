<div class="modal second member" id="members-<?php echo $type; ?>">
    <div class="modal-header">
        <div class="modal-header-back" onclick="openModal('members-<?php echo $prevType; ?>')">
            <img src="assets/Group 22backButton.svg" alt="">
            <span>BACK</span>
        </div>
        <div class="modal-header-close" onclick="closeModal('members-<?php echo $type; ?>')">X</div>
    </div>
    <div class="modal-body artist-body">
        <div class="modal-second-gallery ">
            <div class="gallery-item artist-photo">
                <img src="<?php echo $image; ?>" alt="" class="gallery-item-base ">
            </div>
        </div>
        <div class="gallery-detail artist-detail">
            <div class="gallery-detail-head">
                <div class="gallery-detail-head-item">
                    <span><?php echo $title; ?></span>
                </div>
            </div>
            <hr />
            <div class="gallery-hashtags">
                <?php

                foreach ($tags as $tag) {
                    echo '#' . $tag . ' ';
                }
                ?>

            </div>
            <hr />
            <div class="gallery-detail-content">
                <?php echo $description; ?>
            </div>
            <hr />
            <div class="gallery-detail-footer">
                <div class="gallery-detail-footer-description">
                    <?php

                    foreach ($socialLinks as $link) {
                        $iconPath = 'assets/default-icon.png';

                        if ($link['type'] == 'linkedin') {
                            $iconPath = 'assets/linkedin.svg';
                        } elseif ($link['type'] == 'instagram') {
                            $iconPath = 'assets/instagram-icon.png';
                        } elseif ($link['type'] == 'twitter') {
                            $iconPath = 'assets/twitter-icon.png';
                        } elseif ($link['type'] == 'spotify') {
                            $iconPath = 'assets/spotify-iconsocialSmalls.svg';
                        }

                        echo '<a href="' . $link['url'] . '" class="socialLink" target="_blank">';
                        echo '<img src="' . $iconPath . '" alt="' . ucfirst($link['type']) . '">';
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <div class="modal-footer-wrapper. setting">
            <div class="modal-footer-next" onclick="openModal('members-<?php echo $nextType; ?>')">
                <span>NEXT</span>
                <img src="assets/Group 21nextFinal.png" alt="">
            </div>
        </div>
    </div>
</div>