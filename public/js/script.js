function sendEmail() {
    var name = $('#msgName').val(),
        type = $('#msgType').val(),
        duration = $('#msgDuration').val(),
        budget = $('#msgBudget').val(),
        telephone = $('#msgTelephone').val(),
        email = $('#msgEmail').val();
    $.post('/api/message', {
        name: name,
        type: type,
        duration: duration,
        budget: budget,
        telephone: telephone,
        email: email
    }).then(function (value) {
        $('#form').get(0).reset();
    })
}

function showLoader() {
  // TODO
}

$(document).ready(function() {
  $('.owl-carousel').owlCarousel({
        items: 1,
        merge: true,
        loop: true,
        margin: 10,
        video: true,
        lazyLoad: true,
        center: true,
        responsive: {
            480: {
                items: 1
            },
            600: {
                items: 1
            }
        }
    })
});
