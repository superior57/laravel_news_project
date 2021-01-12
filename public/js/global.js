var app = $(document);

app.on("click", ".tab-item", (event) => {
    const element = $(event.target);
    $('.tab-item').parent().removeClass('active');
    element.parent().addClass('active');
    let pane_id = element.attr('data-t-id');

    $(".tab-pane").css('display', 'none');
    $(`#${pane_id}`).css('display', 'block');
})

app.on("click", ".select-item", (event) => {
    const element = $(event.target);
    $('.select-item').parent().removeClass('active');
    element.parent().addClass('active');
    let size_id = element.attr('data-size-id');

})

app.on("mouseover", "document", (event) => {
    console.log(event.target);
})