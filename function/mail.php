<?php
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['csrf_token'];

function MonMail($token)
{
    echo '
        <form id="contact-form">
            <div class="row">
                <input type="text" name="website" style="display:none;">
                <input type="hidden" name="csrf_token" value="' . $token . '">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom / Organisation" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Téléphone" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <select class="form-select" required>
                            <option value="">Secteur d’activité</option>
                            <option value="Médecine">Médecine préventive et bien-être</option>
                            <option value="Pharmacie">Biotechnologies et pharmacie</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <textarea class="form-control" cols="30" rows="4"
                        placeholder="Votre message"></textarea>
                </div>
                <div class="col-lg-12 mt-3">
                    <button type="submit" class="theme-btn" id="envoyer"><i class="far fa-paper-plane"></i> Envoyer</button>
                </div>
            </div>
        </form>';
}
?>
<script src="jquery.js"></script>
<script>
    $(document).ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();

            const formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'contact',
                data: formData,
                dataType: 'json',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: function(response) {
                    if (window.sbToast) {
                        const ok = /bien été envoyé/.test(response.message || '');
                        window.sbToast(ok ? 'Message envoyé' : 'Envoi impossible', response.message, ok ? 'success' : 'error');
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    if (window.sbToast) {
                        window.sbToast('Erreur', 'Erreur lors de l’envoi du message.', 'error');
                    } else {
                        alert('Erreur lors de l’envoi du message.');
                    }
                }
            });
        });
    });
</script>