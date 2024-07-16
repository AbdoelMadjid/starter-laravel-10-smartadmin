"use strict";
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("#ya-atau-tidak").forEach(function(elem) {
                elem.addEventListener("click", function(event) {
                    event.preventDefault(); // Mencegah perilaku default

                    initApp.playSound('/admin/media/sound', 'voice_on')

                    var title = elem.getAttribute("data-title");
                    var message = elem.getAttribute("data-message");
                    var secondsLeft = 10; // Waktu dalam detik

                    // Fungsi untuk memperbarui tampilan timer
                    function updateTimerDisplay() {
                        document.getElementById("timer-display").innerText = "Otomatis selama " + secondsLeft + " detik";
                        secondsLeft--;

                        if (secondsLeft < 0) {
                            clearTimeout(autoRedirectTimer);
                            document.getElementById('logout-form').submit(); // Lakukan perpindahan otomatis di sini jika diperlukan
                        }
                    }

                    // Timer untuk update timer display
                    var timerInterval = setInterval(updateTimerDisplay, 1000);

                    // Konfigurasi untuk bootbox
                    bootbox.confirm({
                        title: "<i class='fal fa-times-circle text-primary mr-2'></i> <span class='text-primary fw-300'><strong>" + title + "</strong></span>",
                        message: "<span class='fw-900 font-italic'>Pertanyaan: </span><strong>" + message + "</strong><br><br> <span class='text-primary font-italic fs-nano' id='timer-display'></span>",
                        buttons: {
                            confirm: {
                                label: 'Ya',
                                className: 'btn-success'
                            },
                            cancel: {
                                label: 'Tidak',
                                className: 'btn-danger'
                            }
                        },
                        className: "modal-alert",
                        closeButton: false,
                        callback: function (result) {
                            clearInterval(timerInterval); // Hentikan update timer
                            clearTimeout(autoRedirectTimer); // Batalkan timer saat tombol diklik
                            if (result) {
                                document.getElementById('logout-form').submit(); // Submit the hidden form
                            } else {
                                console.log("Action cancelled.");
                            }
                        }
                    });

                    // Timer untuk redirect otomatis
                    var autoRedirectTimer = setTimeout(function() {
                        clearInterval(timerInterval); // Hentikan update timer
                        document.getElementById('logout-form').submit(); // Gunakan URL dinamis
                    }, secondsLeft * 1000); // Convert detik menjadi milidetik
                });
            });
        });
