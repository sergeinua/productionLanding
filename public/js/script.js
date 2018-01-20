function sendEmail() {
    const name = $('#msgName').val(),
        type = $('#msgType').val(),
        to = $('#msgTo').val();
    console.log('name', name);
    console.log('type', type);
    console.log('to', to);
    $.post('/api/message', {
        name: name,
        type: type,
        email: to
    }).then(function (value) {
        console.log('val', value);
    })
}