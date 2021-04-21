export default () => {
    //checkbox checked
    $(".checkbox-wrapper input[type=checkbox]").on('click', function(){
        $(this).toggleClass("active");
        $(this).closest('.checkbox-container').toggleClass("check");
    });
    //checkbox checked
};
