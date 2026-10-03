<?php
declare(strict_types=1);

session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coup de Propre — Ménage à domicile</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/app.js" defer></script>
</head>
<body>

    <header class="site-header">
        <a class="logo" href="#accueil">
            <span class="logo-icon">CP</span>
            <span>Coup de Propre</span>
        </a>

        <nav class="navigation" aria-label="Navigation principale">
            <a href="#prestations">Prestations</a>
            <a href="#engagement">Nos engagements</a>
            <a class="nav-button" href="#reservation">Faire une demande</a>
        </nav>
    </header>

    <main>
        <section class="hero" id="accueil">
            <div class="hero-copy">
                <p class="eyebrow">LE MÉNAGE À DOMICILE, AUTREMENT</p>

                <h1>
                    Un intérieur qui respire.
                    <span>Un métier reconnu.</span>
                </h1>

                <p class="hero-description">
                    Découvrez un service de ménage à domicile qui valorise
                    le savoir-faire et le professionnalisme des femmes
                    qui prennent soin de votre intérieur.
                </p>

                <div class="hero-actions">
                    <a class="button button-pink" href="#prestations">
                        Découvrir les prestations
                        <span aria-hidden="true">→</span>
                    </a>

                    <a class="text-link" href="#engagement">
                        Notre engagement
                    </a>
                </div>

                <div class="hero-note">
                    <span class="note-icon" aria-hidden="true">✦</span>
                    <span>Un service pensé avec respect et attention.</span>
                </div>
            </div>

            <div class="hero-art" aria-label="Illustration d’un intérieur propre">
                <div class="art-circle"></div>

                <div class="art-card">
                    <div class="art-card-top">
                        <span class="art-sparkle" aria-hidden="true">✦</span>
                        <span>UN ESPACE QUI FAIT DU BIEN</span>
                    </div>

                    <div class="art-illustration" aria-hidden="true">
                        <span class="art-sun"></span>
                        <span class="art-plant plant-one">✿</span>
                        <span class="art-plant plant-two">✿</span>
                        <span class="art-home">⌂</span>
                    </div>

                    <div class="art-card-bottom">
                        <div>
                            <strong>Le propre, en douceur</strong>
                            <p>Selon vos besoins et votre rythme</p>
                        </div>
                        <span class="check-icon" aria-hidden="true">✓</span>
                    </div>
                </div>

                <div class="floating-note">
                    <span aria-hidden="true">♡</span>
                    Le travail mérite le respect
                </div>
            </div>
        </section>

        <section class="services-section" id="prestations">
            <div class="section-heading">
                <p class="eyebrow">NOS PRESTATIONS</p>
                <h2>Un coup de propre, à votre façon.</h2>
                <p>Choisissez le type d’intervention qui correspond à votre quotidien.</p>
            </div>

            <div class="service-grid">
                <article class="service-card card-pink">
                    <div class="service-icon" aria-hidden="true">✿</div>
                    <p class="card-label">POUR VOTRE QUOTIDIEN</p>
                    <h3>Ménage régulier</h3>
                    <p>Un entretien régulier pour garder un intérieur agréable semaine après semaine.</p>
                    <a href="#reservation" data-prestation="regulier">
                        Cette prestation <span aria-hidden="true">→</span>
                    </a>
                </article>

                <article class="service-card card-peach">
                    <div class="service-icon" aria-hidden="true">☀</div>
                    <p class="card-label">QUAND VOUS EN AVEZ BESOIN</p>
                    <h3>Ménage ponctuel</h3>
                    <p>Une aide occasionnelle pour préparer votre logement ou vous libérer du temps.</p>
                    <a href="#reservation" data-prestation="ponctuel">
                        Cette prestation <span aria-hidden="true">→</span>
                    </a>
                </article>

                <article class="service-card card-lilac">
                    <div class="service-icon" aria-hidden="true">✧</div>
                    <p class="card-label">POUR UN GRAND RAFRAÎCHISSEMENT</p>
                    <h3>Grand nettoyage</h3>
                    <p>Une intervention approfondie pour remettre votre intérieur en ordre.</p>
                    <a href="#reservation" data-prestation="grand-nettoyage">
                        Cette prestation <span aria-hidden="true">→</span>
                    </a>
                </article>
            </div>
        </section>

        <section class="values-section" id="engagement">
            <div class="values-intro">
                <p class="eyebrow">NOTRE CONVICTION</p>
                <h2>Le ménage est un vrai métier.</h2>
                <p>
                    Il demande de l’expérience, de l’organisation et de l’attention.
                    Coup de Propre veut présenter ces compétences avec respect.
                </p>
            </div>

            <div class="value-list">
                <article class="value-item">
                    <span class="value-number">01</span>
                    <div>
                        <h3>Reconnaître le savoir-faire</h3>
                        <p>Nous valorisons les compétences et le professionnalisme des femmes de ménage.</p>
                    </div>
                </article>

                <article class="value-item">
                    <span class="value-number">02</span>
                    <div>
                        <h3>Présenter le service clairement</h3>
                        <p>Les prestations et les conditions doivent être faciles à comprendre.</p>
                    </div>
                </article>

                <article class="value-item">
                    <span class="value-number">03</span>
                    <div>
                        <h3>Parler avec respect</h3>
                        <p>La qualité d’un service passe aussi par la considération des personnes qui le réalisent.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="steps-section">
            <div class="section-heading">
                <p class="eyebrow">COMMENT ÇA MARCHE ?</p>
                <h2>Trois étapes toutes simples.</h2>
            </div>

            <div class="steps-grid">
                <article class="step-card">
                    <span>1</span>
                    <h3>Choisissez</h3>
                    <p>Sélectionnez la prestation qui vous intéresse.</p>
                </article>

                <article class="step-card">
                    <span>2</span>
                    <h3>Décrivez</h3>
                    <p>Indiquez votre besoin et la date souhaitée.</p>
                </article>

                <article class="step-card">
                    <span>3</span>
                    <h3>Envoyez</h3>
                    <p>Votre demande sera étudiée avant confirmation.</p>
                </article>
            </div>
        </section>

        <section class="reservation-section" id="reservation">
            <div class="reservation-layout">
                <div class="reservation-copy">
                    <p class="eyebrow">VOTRE DEMANDE</p>
                    <h2>Parlons de votre besoin.</h2>
                    <p>
                        Indiquez les informations nécessaires pour demander
                        une prestation de ménage.
                    </p>
                    <p class="form-explanation">
                        Votre demande sera étudiée avant confirmation de la date.
                    </p>
                </div>

                <div class="reservation-form-card">
                    <form class="booking-form"
                          action="pages/demande.php"
                          method="post">

                        <input
                            type="hidden"
                            name="csrf_token"
                            value="<?= htmlspecialchars(
                                $_SESSION['csrf_token'],
                                ENT_QUOTES,
                                'UTF-8'
                            ) ?>"
                        >

                        <div class="form-field">
                            <label for="nom">Nom et prénom *</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>

                        <div class="form-field">
                            <label for="telephone">Téléphone *</label>
                            <input type="tel" id="telephone" name="telephone" required>
                        </div>

                        <div class="form-field">
                            <label for="email">Adresse e-mail *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-field">
                            <label for="prestation">Prestation souhaitée *</label>
                            <select id="prestation" name="prestation" required>
                                <option value="">Choisissez une prestation</option>
                                <option value="regulier">Ménage régulier</option>
                                <option value="ponctuel">Ménage ponctuel</option>
                                <option value="grand-nettoyage">Grand nettoyage</option>
                            </select>
                        </div>

                        <div class="form-field form-field-full">
                            <label for="adresse">Adresse de l’intervention *</label>
                            <input type="text" id="adresse" name="adresse" required>
                        </div>

                        <div class="form-field form-field-full">
                            <label for="date_souhaitee">Date souhaitée *</label>
                            <input type="date"
                                   id="date_souhaitee"
                                   name="date_souhaitee"
                                   required>
                        </div>

                        <div class="form-field form-field-full">
                            <label for="commentaire">
                                Précisions <span>(facultatif)</span>
                            </label>
                            <textarea id="commentaire"
                                      name="commentaire"
                                      rows="4"></textarea>
                        </div>

                        <div class="form-field form-field-full">
                            <button class="button button-pink" type="submit">
                                Envoyer ma demande
                                <span aria-hidden="true">→</span>
                            </button>
                            <small>* Champs obligatoires</small>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <a class="logo footer-logo" href="#accueil">
            <span class="logo-icon">CP</span>
            <span>Coup de Propre</span>
        </a>

        <p>Un service qui valorise les professionnelles du ménage.</p>
        <span class="footer-caption">Projet de démonstration</span>
    </footer>

</body>
</html>