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
        console.log('val', value);
    })
}