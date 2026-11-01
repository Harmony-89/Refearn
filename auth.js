const signinH = document.getElemntById("signbtn2");
const logH = document.getElementById("loginbtn2");
const logpage = document.getElementById("logPage");
const signpage = document.getElementById("signpage");

signinH.addEventListener("click", function () {
  Signin();
});
logH.addEventListener("click", function () {
  Login();
});

function Signin() {
  signpage.classList.add("active");
  logpage.classList.remove("active");
}
