    <div class="modal first" id="<?php echo $type; ?>">
       <div class="modal-header">
          <div class="modal-header-back" onclick="openModal('connectıons')">
             <img src="assets/Group 22backButton.svg" alt="">
             <span>BACK</span>
          </div>
          <div class="modal-header-close" onclick="closeModal('core')">X</div>
       </div>
       <div class="modal-body">
          <div class="banner">
             <img src="<?php echo $svgIcon; ?>" alt="sol">
          </div>
          <div class="content">
             <div class="title"><?php echo $title; ?></div>
             <div class="description ">
                <?php echo $description; ?>
             </div>
          </div>
       </div>
       <div class="modal-footer">
          <div class="modal-footer-wrapper">
             <div class="footer-button first-color">Learn More</div>
             <div class="modal-footer-next" onclick="openModal('dialectıcal')">
                <span>NEXT<br />CREATORS</span>
                <img src="assets/Group 21nextFinal.png" alt="">
             </div>
          </div>
       </div>
    </div>