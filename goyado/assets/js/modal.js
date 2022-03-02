$(document).ready(function() {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    $(".p-room__detailImg img, .p-room-multiCol__img img").click(function() {
        modal.style.display = "block";
        modalImg.src = $(this).attr("src");
        $("body").addClass("change");
    });
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        $("body").removeClass("change");
    }
});