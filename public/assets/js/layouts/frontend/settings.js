function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
    return null;
}

function switchTheme() {
  if (getCookie('theme') == "dark") {
    setCookie('theme', 'light', 365);

  } else if (getCookie('theme') == "light") {
    setCookie('theme', 'dark', 365);
    }
}

if (getCookie('theme') == "dark") {
  document.getElementById("toggledark").classList.add('animate');
  document.getElementById("toggledark").classList.add("active");
  document.querySelector('.wave').classList.toggle('active');
  document.documentElement.classList.toggle('theme-dark');
}
document.querySelector('.toggledark').addEventListener('click', function () {
  this.classList.add('animate');
  setTimeout(() => {
    this.classList.toggle('active');
    document.querySelector('.wave').classList.toggle('active');
    document.documentElement.classList.toggle('theme-dark');
  }, 150);
  setTimeout(() => this.classList.remove('animate'), 300);
});
