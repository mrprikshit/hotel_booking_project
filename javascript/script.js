let menubar = document.getElementById("menu_icon");
let menu    = document.querySelector(".cont")

menubar.addEventListener("click", ()=> {
	if (menubar.className == "bi bi-list") {
		menu.classList.add("show");
		menubar.className = "bi bi-x";
	}else{
		menu.classList.remove("show");
		menubar.className = "bi bi-list";
	}
});