$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
});

$(window).scroll(function () {
    if ($(window).scrollTop() >= 450) {
        $('.navbar').css('background','#FECAAE');
        $('.nav-link').css('color','#2d2d2d');
        $('.balance').css('color','#2d2d2d');
    } else {
        $('.navbar').css('background','transparent');
        $('.nav-link').css('color','#7A2B00');
        $('.balance').css('color','#2d2d2d');

    }
});

$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})
