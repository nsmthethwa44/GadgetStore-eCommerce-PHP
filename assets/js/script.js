  // faqs method 
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item = btn.parentElement;         
      item.classList.toggle('open');
    });
  });

// toggle admin sidebar 
  document.addEventListener("DOMContentLoaded", () => {
  let sidebar = document.querySelector(".sidebar");
  let openSidebar = document.querySelector(".admin-menu");
  let closeSidebar = document.querySelector(".close-sidebar");

  if (sidebar && openSidebar && closeSidebar) {
    openSidebar.onclick = () => {
      sidebar.classList.toggle("active");
    };

     closeSidebar.onclick = () =>{
      sidebar.classList.remove("active");
    }
  }
  });


  // toggle navbar on small devices 
  document.addEventListener("DOMContentLoaded", () => {
  let frontEndHeader = document.querySelector(".frontend-header .navbar");
  let openMenu = document.querySelector(".open-menu");
  let closeMenu = document.querySelector(".close-menu");

  if (frontEndHeader && openMenu && closeMenu) {
    openMenu.onclick = () => {
      frontEndHeader.classList.toggle("active");
    };

     closeMenu.onclick = () =>{
      frontEndHeader.classList.remove("active");
    }
  }

let goTop = document.querySelector(".goTop");
  // hide top header on scroll 
window.onscroll = () =>{
  if (window.scrollY > 10){
    goTop.classList.add("active");
  }else{
    goTop.classList.remove("active");
  }
}
   
});

// toggle product details 
document.addEventListener('DOMContentLoaded', () => {
  const modalBody   = document.getElementById('product-content');
   const modal       = document.getElementById('product-details');

  document.querySelectorAll('.close').forEach(btn => {
    btn.onclick = () => {
      modal.classList.remove("active")
    };
  });

  // open modal on View click
  document.querySelectorAll('.view-btn').forEach(btn => {
    btn.addEventListener('click', async () => {
      const id = btn.dataset.id;

      try {
        const res  = await fetch(`product.php?id=${id}`);
        const data = await res.json();   // expects JSON

        modalBody.innerHTML = `
          <div class="wrapper">
                <div class="box">
                    <div class="box-img"><img src="${data.photo}" alt="" class="img-box"></div>
                </div>
                <div class="box">
                    <div class="text-box">
                        <h2>${data.title}</h2>

                        <div class="ratings">
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></i></li>
                            </ul>
                            <p>(02 Reviews)</p>
                            |
                            <p>Damon: <span>Lorem</span></p>
                        </div>

                        <h3>R${data.price}</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Assumenda sapiente blanditiis ipsa obcaecati rem quis quae atque vero pariatur possimus!...</p>

                            <div class="divider"></div>
                            <div class="buttons">
                                <button class="btn">Add To Cart</button>
                            </div>
                            <div class="divider"></div>

                            <ul class="cat-tags">
                                <li><strong>Category:</strong> Headphones, Cellphones, Lorem, ipsum.</li>
                                <li><strong>Tags:</strong> Headphones,Lorem,  Cellphones</li>
                            </ul>
                    </div>

                    
                </div>
            </div>
        `;
        modal.classList.add("active");
      } catch(e) {
        modalBody.innerHTML = '<p class="product-error">Error loading product.</p>';
        modal.classList.add("active");
      }
    });
  });
  window.onclick   = e => { if (e.target === modal) modal.classList.remove("active"); };
});


// category slides 
var swiper = new Swiper(".category", {
    slidesPerView: 10,
    spaceBetween: 10,
    slidesPerGroup: 1,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    loop: true,
    loopFillGroupWithBlank: true,
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  // },
  breakpoints: {
  
  200: {
  slidesPerView: 2,
  },
  
  567: {
  slidesPerView: 3,
  },
  992: {
  slidesPerView: 6,
  },
  1000: {
  slidesPerView: 9,
  },
  },
  });



