<?php
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['csrf_token'];

function MonMail($token)
{
    echo '
        <form id="contact-form" novalidate>
            <div class="row">
                <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off" aria-hidden="true">
                <input type="hidden" name="csrf_token" value="' . $token . '">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="cf-nom" class="visually-hidden">Nom / Organisation</label>
                        <input type="text" id="cf-nom" name="nom" class="form-control" placeholder="Nom / Organisation" autocomplete="organization" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="cf-email" class="visually-hidden">Email</label>
                        <input type="email" id="cf-email" name="email" class="form-control" placeholder="Email" autocomplete="email" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="cf-tel" class="visually-hidden">Téléphone</label>
                        <input type="tel" id="cf-tel" name="telephone" class="form-control" placeholder="Téléphone" autocomplete="tel" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="cf-secteur" class="visually-hidden">Secteur d’activité</label>
                        <select id="cf-secteur" name="secteur" class="form-select" required>
                            <option value="">Secteur d’activité</option>
                            <option value="Médecine">Médecine préventive et bien-être</option>
                            <option value="Pharmacie">Biotechnologies et pharmacie</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label for="cf-message" class="visually-hidden">Votre message</label>
                    <textarea id="cf-message" name="message" class="form-control" cols="30" rows="4"
                        placeholder="Votre message" required></textarea>
                </div>
                <div class="col-lg-12 mt-3">
                    <button type="submit" class="theme-btn" id="envoyer">Envoyer <i class="far fa-paper-plane"></i></button>
                </div>
            </div>
        </form>';
}
?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var $ = window.jQuery;
        var form = document.getElementById("contact-form");
        if (!form || !$) return;

        function notify(title, message, type) {
            if (window.sbToast) {
                window.sbToast(title, message, type);
            } else {
                alert(message);
            }
        }

        form.addEventListener("submit", function(e) {
            e.preventDefault();
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }
            var button = document.getElementById("envoyer");
            if (button) button.disabled = true;

            $.ajax({
                type: "POST",
                url: "function/contact.php",
                data: $(form).serialize(),
                dataType: "json",
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                },
                success: function(response) {
                    notify("Message envoyé", response.message || "Votre message a bien été envoyé. Merci !", "success");
                    form.reset();
                },
                error: function(xhr) {
                    var message = (xhr.responseJSON && xhr.responseJSON.message) || "Erreur lors de l’envoi du message.";
                    notify("Envoi impossible", message, "error");
                },
                complete: function() {
                    if (button) button.disabled = false;
                }
            });
        });
    });
</script>
