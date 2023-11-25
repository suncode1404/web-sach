function dndk() {
   const login = document.querySelector(".btn_login");
   const regis = document.querySelector(".btn_regis");
   const btnlog = document.querySelector(".regis-sub");
   const pagelogin = document.querySelector(".box_login");
   const pageregis = document.querySelector(".box_resg");
   login.addEventListener("click", () => {
      pagelogin.classList.add("hidden");
      pageregis.classList.remove("hidden");
   });
   btnlog.addEventListener("click", () => {
      pagelogin.classList.add("hidden");
      pageregis.classList.remove("hidden");
   });
   regis.addEventListener("click", () => {
      pageregis.classList.add("hidden");
      pagelogin.classList.remove("hidden");
   });
}
dndk();
