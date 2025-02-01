<div class="modal first" id="<?php echo $type; ?>">
    <div class="modal-header">
        <div class="modal-header-back" onclick="openModal('<?php echo $nextType; ?>')">
            <img src="assets/Group 22backButton.svg" alt="">
            <span>BACK</span>
        </div>
        <div class="modal-header-close" onclick="closeModal('<?php echo $type; ?>')">X</div>
    </div>
    <div class="modal-body">
        <div class="banner">
            <img src="<?php echo $image; ?>" alt="">
        </div>
        <div class="content">
            <div class="title"> <?php echo $title; ?></div>
            <div class="description">
                <?php echo $description; ?>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <div class="modal-footer-wrapper. setting">
            <div class="modal-footer-next" onclick="openModal('<?php echo $nextType; ?>')">
                <span>NEXT<br /> <?php echo $nextTitle; ?> </span>
                <img src="assets/Group 21nextFinal.png" alt="">
            </div>
        </div>
    </div>
</div>