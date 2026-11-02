document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.getElementById('navToggle');
  const links = document.getElementById('navLinks');

  toggle.addEventListener('click', function () {
    links.classList.toggle('open');
  });

  links.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
      links.classList.remove('open');
    });
  });
});
