accordianOneList = document.querySelectorAll(".horizontal-accordian-one"),
accordianOneList.forEach((accordianOne) => {
  accordiantLists = accordianOne.querySelectorAll(".accordian-item");

  accordiantLists.forEach((ele) => {
    ele.addEventListener("click", function SetActive() {
      accordianOne
        .querySelector(".accordian-item.active")
        .querySelector(".accordian-data").style.opacity = "0";
      accordianOne
        .querySelector(".accordian-item.active")
        .classList.add("deactivate");
      accordianOne
        .querySelector(".accordian-item.active")
        .classList.remove("active");
      ele.classList.add("active");
      setTimeout(() => {
        accordianOne
          .querySelector(".accordian-item.active")
          .classList.remove("deactivate");
        ele.querySelector(".accordian-data").style.opacity = "1";
      }, 0);
    });
  });
  })

      