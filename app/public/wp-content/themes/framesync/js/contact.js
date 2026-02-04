document.querySelectorAll(".faq-question").forEach(button => {
  button.addEventListener("click", () => {
    const item = button.closest(".faq-item");
    const answer = item.querySelector(".faq-answer");
    const icon = button.querySelector(".faq-icon");

    const isOpen = answer.style.maxHeight;

    // Close all others (optional – remove if you want multiple open)
    document.querySelectorAll(".faq-answer").forEach(a => {
      a.style.maxHeight = null;
    });
    document.querySelectorAll(".faq-icon").forEach(i => {
      i.classList.remove("rotate-180");
    });

    if (!isOpen) {
      answer.style.maxHeight = answer.scrollHeight + "px";
      icon.classList.add("rotate-180");
    }
  });
});
