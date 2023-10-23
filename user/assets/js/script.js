// ActiveLink
let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

window.onscroll = () => {
  sections.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      navLinks.forEach((links) => {
        links.classList.remove("active");
        document.querySelector("header nav a[href*=" + id + "]").classList.add("active");
      });
    }
  });
};

// mousemove home img

document.addEventListener("mousemove", move);
function move(e) {
  this.querySelectorAll(".move").forEach((layer) => {
    const speed = layer.getAttribute("data-speed");

    const x = (window.innerWidth - e.pageX * speed) / 120;
    const y = (window.innerWidth - e.pageY * speed) / 120;

    layer.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}

// Sort by
(function () {
  let field = document.querySelector(".product-items");
  let li = Array.from(field.children);

  function FilterProduct() {
    for (let i of li) {
      const name = i.querySelector(".sm-title");
      const x = name.textContent;
      i.setAttribute("data-category", x);
    }

    let indicator = document.querySelector(".indicator").children;

    this.run = function () {
      for (let i = 0; i < indicator.length; i++) {
        indicator[i].onclick = function () {
          for (let x = 0; x < indicator.length; x++) {
            indicator[x].classList.remove("active");
          }
          this.classList.add("active");
          const displayItems = this.getAttribute("data-filter");

          for (let z = 0; z < li.length; z++) {
            li[z].style.transform = "scale(0)";
            setTimeout(() => {
              li[z].style.display = "none";
            }, 500);

            if (li[z].getAttribute("data-category") == displayItems || displayItems == "all") {
              li[z].style.transform = "scale(1)";
              setTimeout(() => {
                li[z].style.display = "block";
              }, 500);
            }
          }
        };
      }
    };
  }

  new FilterProduct().run();
})();
