function toggleParagraph() {
    var paragraph = document.getElementById("expandableParagraph");
    if (paragraph.style.display === "none") {
      paragraph.style.display = "block";
    } else {
      paragraph.style.display = "none";
    }
  }