$ ('.bd-example-modal-sm').on('show.bs.modal', function (event)
{
    var button = $(event.relatedTarget) // Button that triggered the modal
    var ImagesResourceId = button.data('id') // Extract info from data-* attributes
    var objectJson = JSON.parse(workData)
    var objectData = objectJson[ImagesResourceId];
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text(objectData.name)
    modal.find('.modal-body #img-description').text(objectData.description)
    modal.find('.modal-body #img-lang').text(objectData.lang)
    modal.find('.modal-body #img-by').text(objectData.username)
});

$('#v-pills-tab a').on('click', function (e)
{
    e.preventDefault()
    $(this).tab('show')
    $('#v-pills-tab a').removeClass("active btn-danger");
    $(this).addClass("active btn-danger");
});