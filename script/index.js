const swiper = new Swiper(".swiper-container", {
  slidesPerView: 1,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

const controlItems = document.querySelectorAll(".control-item");
controlItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    swiper.slideTo(index);
    updateActiveControl(index);
  });
});

function updateActiveControl(activeIndex) {
  controlItems.forEach((item, index) => {
    item.classList.remove("active");
    if (index === activeIndex) {
      item.classList.add("active");
    }
  });
}

swiper.on("slideChange", () => {
  const currentIndex = swiper.activeIndex % controlItems.length;
  updateActiveControl(currentIndex);
});

function openModal(modal) {
  const modalContent = document.querySelectorAll(`.modal`);
  modalContent.forEach((m) => {
    if (m.id === modal) {
      m.classList.add("active");
    } else {
      m.classList.remove("active");
    }
  });
}

function closeModal(modal) {
  const modalContent = document.querySelector(`#${modal}`);
  modalContent.classList.remove("active");
}

function toggleDropdownMenu(forceVal) {
  const dropdownContent = document.querySelector(`.dropdown`);
  if (forceVal !== undefined) {
    if (forceVal) {
      dropdownContent.classList.add("active");
    } else {
      dropdownContent.classList.remove("active");
    }
  } else {
    dropdownContent.classList.toggle("active");
  }
}

let projectIndex = 0;

const gotoLeftProjects = () => {
  const projects = document.querySelector(".cards");
  projectIndex = projectIndex - 1;
  projects.scrollLeft =
    projects.children[projectIndex + 1].clientWidth * projectIndex +
    30 * projectIndex;
};

const gotoRightProjects = () => {
  const projects = document.querySelector(".cards");
  projectIndex = projectIndex + 1;
  projects.scrollLeft =
    projects.children[projectIndex + 1].clientWidth * projectIndex +
    30 * projectIndex;
};

let gallery = 0;

const gotoLeftMembers = () => {
  const projects = document.querySelector(".gallery-cards");
  const scrollWidth = projects.scrollWidth;
  if (scrollWidth + projects.w) gallery = gallery - 1;
  projects.scrollLeft =
    projects.children[gallery + 1].clientWidth * gallery + 10 * gallery;
};

const gotoRightMembers = () => {
  const projects = document.querySelector(".gallery-cards");
  gallery = gallery + 1;
  projects.scrollLeft =
    projects.children[gallery + 1].clientWidth * gallery + 10 * gallery;
};

const galleries = {};

const beforeGalleryItem = (galleryId, modalId) => {
  const gallery = document.getElementById(galleryId);
  const modalBaseImage = document.querySelector(
    `#${modalId} .gallery-item-base`
  );
  const galleryIndex = galleries[modalId] || 0;
  const nextGalleryIndex =
    galleryIndex - 1 < 0 ? gallery.children.length - 1 : galleryIndex - 1;
  console.log(nextGalleryIndex);
  galleries[modalId] = nextGalleryIndex;
  const item = gallery.children[nextGalleryIndex].children[0];
  [...gallery.children].forEach((item, index) => {
    item.classList.remove("active");
  });
  gallery.children[nextGalleryIndex].classList.add("active");
  modalBaseImage.src = item.src;
};

const nextGalleryItem = (galleryId, modalId) => {
  const gallery = document.getElementById(galleryId);
  const modalBaseImage = document.querySelector(
    `#${modalId} .gallery-item-base`
  );
  const galleryIndex = galleries[modalId] || 0;
  const nextGalleryIndex =
    galleryIndex + 1 >= gallery.children.length ? 0 : galleryIndex + 1;
  galleries[modalId] = nextGalleryIndex;
  const item = gallery.children[nextGalleryIndex].children[0];
  [...gallery.children].forEach((item, index) => {
    item.classList.remove("active");
  });
  gallery.children[nextGalleryIndex].classList.add("active");
  modalBaseImage.src = item.src;
};

const lazyImages = document.querySelectorAll(".lazy-load");

window.onload = function () {
  const img = document.getElementById("card-image");
  img.onload = function () {
    img.classList.add("loaded");
  };
};
