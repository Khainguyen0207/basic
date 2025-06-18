export default class Notification {
    static showError(message, toastID) {
        const $dom = `
         <div class="toast align-items-center text-bg-danger border-0 show rounded-1" style="flex-basis: unset;font-size: 14px;display: none" role="alert" aria-live="assertive"
             aria-atomic="true" id="error-${toastID}">
            <div class="d-flex justify-content-between">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 my-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
            </div>
            <script>
                setTimeout(function () {
                    $('#error-${toastID}').hide().fadeIn();
                }, 0);

                setTimeout(function () {
                    $('#error-${toastID}').remove()
                }, 3000)
            </script>
        </div>
    `
        $('#validation').append($dom)
    }

    static showSuccess(message, toastID) {
        const $dom = `
         <div class="toast align-items-center text-bg-success border-0 show rounded-1" style="flex-basis: unset; font-size: 14px;display: none" role="alert" aria-live="assertive"
             aria-atomic="true" id="error-${toastID}">
            <div class="d-flex justify-content-between">
                <div class="toast-body">${message}</div>
                <button type="button" class="btn-close btn-close-white me-2 my-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
            </div>
            <script>
                setTimeout(function () {
                    $('#error-${toastID}').hide().fadeIn();
                }, 500);

                setTimeout(function () {
                    $('#error-${toastID}').remove()
                }, 3000)
            </script>
        </div>
    `
        $('#validation').append($dom)
    }
}

