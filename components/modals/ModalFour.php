<div class="modal second" id="<?php echo $type; ?>">
    <div class="modal-header">
        <div class="modal-header-back" onclick="openModal('<?php echo $prevType; ?>')">
            <img src="assets/Group 22backButton.svg" alt="">
            <span>BACK</span>
        </div>
        <div class="modal-header-close" onclick="closeModal('<?php echo $type; ?>')">X</div>
    </div>
    <div class="modal-body">
        <div class="modal-second-gallery">
            <div class="gallery-item">
                <img src="assets/Group 49backButton.svg" alt="" class="gallery-item-navigator-left"
                    onclick="beforeGalleryItem('gallery-items-<?php echo $type; ?>', '<?php echo $type; ?>')">
                <img src="assets/Projeler/EASTERN ROADS//ALBUM_COVER-min 2.jpg" alt=""
                    class="gallery-item-base">
                <img src="assets/Group 49backButton.svg" style="scale: -1;" alt=""
                    class="gallery-item-navigator-right" onclick="nextGalleryItem('gallery-items-<?php echo $type; ?>','<?php echo $type; ?>')">
            </div>
            <div class="gallery-items" id="gallery-items-<?php echo $type; ?>">
                <?php
                foreach ($images as $image) {
                    $activeClass = $image['banner'] ? 'active' : '';
                    echo '<div class="gallery-items-item ' . $activeClass . '">';
                    echo '<img src="' . $image['url'] . '" alt="" class="gallery-item-base">';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <div class="gallery-detail">
            <div class="gallery-detail-head">
                <div class="gallery-detail-head-item"><?php echo $title ?></div>
                <a href="">
                    <img src="assets/shareIcon.svg" alt="">
                </a>
            </div>
            <hr />
            <div class="gallery-badges">
                <?php
                foreach ($badges as $badge) {
                    $artistClass = $badge['isArtist'] ? 'artist' : '';
                    $onClick = $badge['isArtist'] ? 'onclick="openModal(\'members-' . $badge['id'] . '\')"' : '';

                    echo '<div class="gallery-badge-item ' . $artistClass . '" ' . $onClick . '>';

                    if (!empty($badge['image'])) {
                        echo '<div class="gallery-badge-item-artist">';
                        echo '<img src="' . $badge['image'] . '" alt="' . $badge['name'] . '">';
                        echo '</div>';
                    }

                    echo '<div class="gallery-badge-item-text">' . $badge['name'] . '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <hr />
            <div class="gallery-detail-content">
                <?php echo $description; ?>
            </div>
            <hr />
            <div class="gallery-detail-footer">
                <div class="gallery-detail-footer-title">PROJECT LINKS:</div>
                <div class="gallery-detail-footer-description">
                    <?php
                    foreach ($socialLinks as $link) {
                        echo '<a href="' . $link['url'] . '" class="socialLink" target="_blank">';
                        echo '<img src="' . $link['icon'] . '" alt="' . $link['alt'] . '">';
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="modal-footer-wrapper. setting">
            <div class="modal-footer-next" onclick="openModal('<?php echo $nextType; ?>')">
                <span>NEXT</span>
                <img src="assets/Group 21nextFinal.png" alt="">
            </div>
        </div>
    </div>
</div>