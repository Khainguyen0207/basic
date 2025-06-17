$(document).ready(function () {
    const $customerTable = $('#customer-table')
    if ($customerTable) {
        new DataTable('#customer-table', {
            order: [[1, 'desc']],
        });
    }
})
