export default () => {
    //faq, open close
    $(".faq__content-title").click(function() {
        $(this).closest(".faq__content-li").toggleClass("active");
        $(this).find(".plus").toggleClass("active");
        $(this).closest(".faq__content-li").find(".faq__content-text").slideToggle();
    });
    //faq, open close
};
