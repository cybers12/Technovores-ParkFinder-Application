$(".rightSetting .btn-sidebar-light").on("click", function () {
    $("body").removeClass("menu_dark logo-black");
     $("body").addClass("menu_light logo-white");
     $("#largLogo").attr("src","../../assets/images/lightThemLogos/ParkFinderHorizontale_Bleu.png")
    $("#closedLogo").attr("src","../../assets/images/lightThemLogos/ParkFinderHorizontale_White.png")
    var menu_option = "menu_light";
    localStorage.setItem("choose_logoheader", "logo-white");
    localStorage.setItem("menu_option", menu_option);
}), $(".rightSetting .btn-sidebar-dark").on("click", function () {
    $("body").removeClass("menu_light logo-white");
    $("body").addClass("menu_dark logo-black");
    $("#largLogo").attr("src","../../assets/images/darkThemeLogos/ParkFinderHorizontale_White.png")
    $("#closedLogo").attr("src","../../assets/images/darkThemeLogos/closedLogo.png")
    var menu_option = "menu_dark";
    localStorage.setItem("choose_logoheader", "logo-black");
    localStorage.setItem("menu_option", menu_option);
});

// change theme dark/light on button click
$(".rightSetting .btn-theme-light").on("click", function () {
    $("body").removeClass("dark submenu-closed menu_dark logo-black");
    $("body").addClass("light submenu-closed menu_light logo-white");
    $("#largLogo").attr("src","../../assets/images/lightThemLogos/ParkFinderHorizontale_Bleu.png")
    $("#closedLogo").attr("src","../../assets/images/lightThemLogos/ParkFinderHorizontale_White.png")
    var theme = "light";
    var menu_option = "menu_light";
    localStorage.setItem("choose_logoheader", "logo-white");
    localStorage.setItem("choose_skin", "theme-black");
    localStorage.setItem("theme", theme);
    localStorage.setItem("menu_option", menu_option);
}), $(".rightSetting .btn-theme-dark").on("click", function () {
    $("body").removeClass("light submenu-closed menu_light logo-white");
    $("body").addClass("dark submenu-closed menu_dark logo-black");

    $("#largLogo").attr("src","../../assets/images/darkThemeLogos/ParkFinderHorizontale_White.png")
    $("#closedLogo").attr("src","../../assets/images/darkThemeLogos/closedLogo.png")
    var theme = "dark";
    var menu_option = "menu_dark";
    localStorage.setItem("choose_logoheader", "logo-black");
    localStorage.setItem("choose_skin", "theme-black");
    localStorage.setItem("theme", theme);
    localStorage.setItem("menu_option", menu_option);
});
if(localStorage.getItem("choose_logoheader") == "logo-black"){
    console.log("dark")
    $("#largLogo").attr("src","../../assets/images/darkThemeLogos/ParkFinderHorizontale_White.png")
    $("#closedLogo").attr("src","../../assets/images/darkThemeLogos/closedLogo.png")

}
else{
    console.log("light")
    $("#largLogo").attr("src","../../assets/images/lightThemLogos/ParkFinderHorizontale_Bleu.png")
    $("#closedLogo").attr("src","../../assets/images/lightThemLogos/ParkFinderHorizontale_White.png")
}