$(function () {
    const $customerTable = $('#customer-table')

    if ($customerTable.length > 0) {
        new DataTable('#customer-table', {
            order: [[1, 'desc']],
        });
    }
})
