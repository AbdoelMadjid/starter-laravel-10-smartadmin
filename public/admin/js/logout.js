// File: logout.js

document.addEventListener("DOMContentLoaded", function () {
    const logoutButton = document.getElementById('logout');
    if (logoutButton) {
        logoutButton.addEventListener('click', function (event) {
            event.preventDefault();
            bootbox.confirm({
                title: logoutButton.getAttribute('data-title'),
                message: logoutButton.getAttribute('data-message'),
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {
                        logoutButton.closest('form').submit();
                    }
                }
            });
        });
    }
});
