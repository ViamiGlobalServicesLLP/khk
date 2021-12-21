// include header and footer on webpages
$(function () {
  $("#header").load("inc/header.php");
  $("#footer").load("inc/footer.php");

});

$(function () {
  $("#myheader").load("../../inc/header.php");
  $("#myfooter").load("../../inc/footer.php");

});


// Contact page--->load img on submit btn
$(function () {
  $(".ajax-loader").hide();

  $(".btn_submit").on("click", function (event) {
    $(".ajax-loader").show();
    setTimeout(function () {
      $(".ajax-loader").hide("1000");
    }, 3000);
  });

  $(".ajax-loader").hide();
});




