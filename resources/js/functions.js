function delete_all() {
    if (confirm('are you sure to delete all records?')){
        $('.delete-all').click();
    }
}
$(function () {
    $('.delete-all-btn').on('click', function () {
        delete_all();
    })
})
