$(document).ready(function() {
    $(".learning").click(function(){
        const selector = document.querySelector(".learning");
        if (selector.classList.contains("active")){
            $(".learning").removeClass("active")
            $("#learning-plus").removeClass("deactive")
            $("#learning-minus").addClass("deactive").removeClass("active")
            $("#learning-arrow").removeClass("active")
            $("#learning-text").removeClass("active")
            $("#learning-navigation").removeClass("active")
        }
        else {
        $(".learning").addClass("active")
        $(".technology").removeClass("active")
        $(".communication").removeClass("active")
        $("#learning-plus").addClass("deactive")
        $("#learning-minus").addClass("active").removeClass("deactive")
        $("#technology-plus").removeClass("deactive")
        $("#technology-minus").addClass("deactive").removeClass("active")
        $("#communication-plus").removeClass("deactive")
        $("#communication-minus").addClass("deactive").removeClass("active")
        $("#learning-arrow").addClass("active")
        $("#technology-arrow").removeClass("active")
        $("#communication-arrow").removeClass("active")
        $("#learning-text").addClass("active")
        $("#technology-text").removeClass("active")
        $("#communication-text").removeClass("active")
        $("#learning-navigation").addClass("active")
        $("#technology-navigation").removeClass("active")
        $("#communication-navigation").removeClass("active")
        }
    })

    $(".technology").click(function(){
        const selector = document.querySelector(".technology");
        if (selector.classList.contains("active")){
            $(".technology").removeClass("active")
            $("#technology-plus").removeClass("deactive")
            $("#technology-minus").addClass("deactive").removeClass("active")
            $("#technology-arrow").removeClass("active")
            $("#technology-text").removeClass("active")
            $("#technology-navigation").removeClass("active")
        }
        else {
        $(".technology").addClass("active")
        $(".learning").removeClass("active")
        $(".communication").removeClass("active")
        $("#technology-plus").addClass("deactive")
        $("#technology-minus").addClass("active").removeClass("deactive")
        $("#learning-plus").removeClass("deactive")
        $("#learning-minus").addClass("deactive").removeClass("active")
        $("#communication-plus").removeClass("deactive")
        $("#communication-minus").addClass("deactive").removeClass("active")
        $("#technology-arrow").addClass("active")
        $("#learning-arrow").removeClass("active")
        $("#communication-arrow").removeClass("active")
        $("#technology-text").addClass("active")
        $("#learning-text").removeClass("active")
        $("#communication-text").removeClass("active")
        $("#technology-navigation").addClass("active")
        $("#learning-navigation").removeClass("active")
        $("#communication-navigation").removeClass("active")
        }
    })

    $(".communication").click(function(){
        const selector = document.querySelector(".communication");
        if (selector.classList.contains("active")){
            $(".communication").removeClass("active")
            $("#communication-plus").removeClass("deactive")
            $("#communication-minus").addClass("deactive").removeClass("active")
            $("#communication-arrow").removeClass("active")
            $("#communication-text").removeClass("active")
            $("#communication-navigation").removeClass("active")
        }
        else {
        $(".communication").addClass("active")
        $(".learning").removeClass("active")
        $(".technology").removeClass("active")
        $("#communication-plus").addClass("deactive")
        $("#communication-minus").addClass("active").removeClass("deactive")
        $("#learning-plus").removeClass("deactive")
        $("#learning-minus").addClass("deactive").removeClass("active")
        $("#technology-plus").removeClass("deactive")
        $("#technology-minus").addClass("deactive").removeClass("active")
        $("#communication-arrow").addClass("active")
        $("#learning-arrow").removeClass("active")
        $("#technology-arrow").removeClass("active")
        $("#communication-text").addClass("active")
        $("#learning-text").removeClass("active")
        $("#technology-text").removeClass("active")
        $("#communication-navigation").addClass("active")
        $("#learning-navigation").removeClass("active")
        $("#technology-navigation").removeClass("active")
        }
    })
  });