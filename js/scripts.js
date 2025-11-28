document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  if (form) {
    form.addEventListener("submit", function (event) {
      const nombre = document.getElementById("nombre").value.trim();
      const correo = document.getElementById("correo").value.trim();
      const asunto = document.getElementById("asunto").value.trim();
      const comentario = document.getElementById("comentario").value.trim();

      if (!nombre || !correo || !asunto || !comentario) {
        alert("Por favor, completa todos los campos.");
        event.preventDefault();
      }
    });
  }
});
