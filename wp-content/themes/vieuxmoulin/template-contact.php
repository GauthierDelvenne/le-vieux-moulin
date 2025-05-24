<?php /* Template Name: Template "Contact" */ ?>
<?php get_header(); ?>
<?php include('templates/content/flexible.php'); ?>

<section class="forms" aria-labelledby="contact-title">
    <svg class="green" width="254" height="310" viewBox="0 0 254 310">
        <use xlink:href="#green"></use>
    </svg>
    <svg class="lightblue" width="326" height="390" viewBox="0 0 326 390">
        <use xlink:href="#lightblue"></use>
    </svg>
    <h2 aria-level="2" class="form_title" id="contact-title">Via le formulaire&nbsp;:</h2>

    <?php
    $errors = $_SESSION['vieuxmoulin_contact_form_errors'] ?? [];
    unset($_SESSION['vieuxmoulin_contact_form_errors']);
    $success = $_SESSION['vieuxmoulin_contact_form_success'] ?? [];
    unset($_SESSION['vieuxmoulin_contact_form_success']);
    $old = $_SESSION['vieuxmoulin_contact_form_old'] ?? [];
    unset($_SESSION['vieuxmoulin_contact_form_old']);
    ?>
    <?php if ($success): ?>
        <p class="field_success"><?= $success; ?></p>
    <?php else : ?>
        <form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="POST" class="form"
              aria-labelledby="contact-title">
            <fieldset class="form_fields" aria-labelledby="form-legend">
                <legend id="form-legend" class="hidden">Formulaire de contact</legend>
                <div class="field">
                    <label for="lastname" class="field_label">Nom</label>
                    <input type="text" name="lastname" id="lastname" class="field_input"
                           placeholder="Votre nom"
                           value="<?= esc_attr($old['lastname'] ?? '') ?>">
                    <?php if (isset($errors['lastname'])): ?>
                        <p class="field_error"><?= $errors['lastname']; ?></p>
                    <?php endif ?>
                </div>
                <div class="field">
                    <label for="email" class="field_label">Adresse mail</label>
                    <input type="email" name="email" id="email" class="field_input"
                           placeholder="Votre adresse mail"
                           value="<?= esc_attr($old['email'] ?? '') ?>">
                    <?php if (isset($errors['email'])): ?>
                        <p class="field_error"><?= $errors['email']; ?></p>
                    <?php endif ?>
                </div>
                <div class="field">
                    <label for="phone" class="field_label">Numéro de téléphone</label>
                    <input type="tel" name="phone" id="phone" class="field_input"
                           placeholder="Votre numéro de téléphone"
                           value="<?= esc_attr($old['phone'] ?? '') ?>">
                    <?php if (isset($errors['phone'])): ?>
                        <p class="field_error"><?= $errors['phone']; ?></p>
                    <?php endif ?>
                </div>
                <div class="field">
                    <label for="subject" class="field_label">Sujet</label>
                    <input type="text" name="subject" id="subject" class="field_input"
                           placeholder="Votre sujet"
                           value="<?= esc_attr($old['subject'] ?? '') ?>">
                    <?php if (isset($errors['subject'])): ?>
                        <p class="field_error"><?= $errors['subject']; ?></p>
                    <?php endif ?>
                </div>
                <div class="field">
                    <label for="message" class="field_label">Message</label>
                    <textarea name="message" id="message" class="field_input"
                              placeholder="Votre texte"><?= esc_textarea($old['message'] ?? '') ?></textarea>
                    <?php if (isset($errors['message'])): ?>
                        <p class="field_error"><?= $errors['message']; ?></p>
                    <?php endif ?>
                </div>
            </fieldset>
            <div class="form_submit">
                <input type="hidden" name="action" value="vieuxmoulin_contact_form_submit">
                <button type="submit" class="btn"
                        aria-label="Envoyer le formulaire de contact">Envoyer
                </button>
            </div>
        </form>
    <?php endif ?>
</section>
<?php get_footer(); ?>

