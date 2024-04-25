function toggleContent(contentId, buttonPlusId, buttonMinusId) {
    let content = document.getElementById(contentId);
    let buttonPlus = document.getElementById(buttonPlusId);
    let buttonMinus = document.getElementById(buttonMinusId);

    if (content.style.display === "none") {
      content.style.display = "block";
      buttonPlus.style.display = "none";
      buttonMinus.style.display = "inline-block";
    } else {
      content.style.display = "none";
      buttonPlus.style.display = "inline-block";
      buttonMinus.style.display = "none";
    }
  }


  