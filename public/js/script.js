function sendEmail() {
    var name = $('#msgName').val(),
        type = $('#msgType').val(),
        duration = $('#msgDuration').val(),
        budget = $('#msgBudget').val(),
        telephone = $('#msgTelephone').val(),
        email = $('#msgEmail').val();
    if (name.length && telephone.length) {
      $.post('/api/message', {
          name: name,
          type: type,
          duration: duration,
          budget: budget,
          telephone: telephone,
          email: email
      }).then(function (value) {
          messageSent();
      });
    }
}

function messageSent() {
    $('.sent-text').removeClass('hidden');
    $('.send-btn').addClass('sent');
    $('#form').get(0).reset();
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

function showModal() {
    $('#myModal').modal({
      backdrop: 'static',
      keyboard: false
    });
}

function hideModal() {
    $('#myModal').modal('hide');
}
