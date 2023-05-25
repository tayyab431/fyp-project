const cards = document.querySelectorAll('.card');

cards.forEach(function(card) {
  const btns = card.querySelectorAll('.card-buttons button');
  const sections = card.querySelectorAll('.card-section');

  card.addEventListener("click", function(event) {
    const clickedElement = event.target;
    const section = clickedElement.dataset.section;

    if (section) {
      // Remove active class from all buttons within the card
      btns.forEach(function(btn) {
        btn.classList.remove("active");
      });

      // Remove active class from all sections within the card
      sections.forEach(function(section) {
        section.classList.remove("active");
      });

      // Add active class to the clicked button
      clickedElement.classList.add("active");

      // Add active class to the corresponding section within the card
      const targetSection = card.querySelector('#' + section);
      targetSection.classList.add("active");
    }
  });
});
