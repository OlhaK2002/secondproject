$(document).on('click', 'button.btn', function(event){
    event.preventDefault();
    let id = $(this).attr('id');
    let text = $("#text_id" + id).val();
    let parent_id = $("#parent_id" + id).val();
    let nesting = $("#nesting" + id).val();
    console.log(id, text, parent_id, nesting);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: '/reply',
        type: 'POST',
        dataType: 'html',
        data: {text: text, parent_id: parent_id, nesting: nesting},
        success: function (result) {
            console.log(result);
            $("#comment" + id).append(result);
            $('textarea.form-control').val('');
        }
    })
})



