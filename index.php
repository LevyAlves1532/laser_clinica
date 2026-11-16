<?php
    require('./components.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Depilação a Laser em São Paulo | LaserClínica</title>
        <meta name="description" content="Depilação a laser em São Paulo com tecnologia de diodo, resfriamento subzero e protocolos personalizados. Agende sua avaliação gratuita na LaserClínica.">
        <meta name="robots" content="index, follow, max-image-preview:large">
        <meta name="author" content="LaserClínica">
        <meta name="theme-color" content="#f8f9ff">
        <link rel="canonical" href="./">

        <meta property="og:type" content="website">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:site_name" content="LaserClínica">
        <meta property="og:title" content="Depilação a Laser em São Paulo | LaserClínica">
        <meta property="og:description" content="Pele lisa, segura e sem dor com tecnologia médica de diodo e resfriamento subzero. Agende sua avaliação gratuita.">
        <meta property="og:url" content="./">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Depilação a Laser em São Paulo | LaserClínica">
        <meta name="twitter:description" content="Tecnologia de diodo, resfriamento subzero e protocolos personalizados para uma pele lisa e saudável.">
        <link rel="alternate" hreflang="pt-BR" href="./">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link rel="stylesheet" href="./assets/css/app.css">
    </head>
    <body>
        <?php require('./containers/header.php'); ?>
        <?php require('./containers/banner.php'); ?>
        <?php require('./containers/differentials.php'); ?>
        <?php require('./containers/treatment.php'); ?>
        <?php require('./containers/regions.php'); ?>
        <?php require('./containers/evolution.php'); ?>
        <?php require('./containers/safety.php'); ?>
        <?php require('./containers/testimonials.php'); ?>
        <?php require('./containers/faq.php'); ?>
        <?php require('./containers/cta.php'); ?>
        <?php require('./containers/footer.php'); ?>
        <?php require('./containers/floating-tools.php'); ?>

        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalClinic",
            "name": "LaserClínica",
            "url": "./",
            "description": "Clínica especializada em depilação a laser com tecnologia de diodo e resfriamento subzero.",
            "telephone": "+55-11-4003-8899",
            "priceRange": "$$",
            "medicalSpecialty": "Dermatology",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Av. Brigadeiro Faria Lima, 2400, Conj. 82",
                "addressLocality": "São Paulo",
                "addressRegion": "SP",
                "postalCode": "04538-132",
                "addressCountry": "BR"
            },
            "openingHoursSpecification": [
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens": "08:00",
                    "closes": "21:00"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Saturday",
                    "opens": "09:00",
                    "closes": "18:00"
                }
            ],
            "sameAs": [
                "#instagram",
                "#facebook",
                "#youtube"
            ]
        }
        </script>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Depilação a laser dói?",
                    "acceptedAnswer": {"@type": "Answer", "text": "A sessão é confortável. O sistema Cryo-Cooling resfria a pele a até -5°C e ajuda a reduzir significativamente qualquer desconforto durante o disparo."}
                },
                {
                    "@type": "Question",
                    "name": "Quantas sessões são necessárias para o resultado definitivo?",
                    "acceptedAnswer": {"@type": "Answer", "text": "Em média, são necessárias de 8 a 10 sessões. A quantidade pode variar de acordo com a região, o fototipo, a espessura dos fios e as características hormonais de cada pessoa."}
                },
                {
                    "@type": "Question",
                    "name": "Funciona em todos os tipos e fototipos de pele?",
                    "acceptedAnswer": {"@type": "Answer", "text": "Sim. O protocolo é ajustado individualmente para diferentes tipos e fototipos de pele, sempre após uma avaliação especializada."}
                },
                {
                    "@type": "Question",
                    "name": "Posso fazer o procedimento durante o verão?",
                    "acceptedAnswer": {"@type": "Answer", "text": "Sim, desde que a pele não esteja bronzeada recentemente e que as orientações de proteção solar sejam seguidas antes e depois da sessão."}
                },
                {
                    "@type": "Question",
                    "name": "Qual o intervalo recomendado entre as sessões?",
                    "acceptedAnswer": {"@type": "Answer", "text": "O intervalo costuma variar entre 30 e 45 dias, respeitando o ciclo de crescimento dos pelos e a recomendação da biomédica responsável."}
                },
                {
                    "@type": "Question",
                    "name": "Quais são as formas de pagamento e facilidades?",
                    "acceptedAnswer": {"@type": "Answer", "text": "Trabalhamos com cartão, Pix e condições facilitadas para pacotes. Consulte a clínica para conhecer as opções disponíveis no momento do agendamento."}
                },
                {
                    "@type": "Question",
                    "name": "Quais são as contraindicações médicas?",
                    "acceptedAnswer": {"@type": "Answer", "text": "A aplicação não é realizada em casos como gestação, lactação inicial, pele bronzeada recentemente, uso de medicamentos fotossensibilizantes e lesões ativas na região."}
                },
                {
                    "@type": "Question",
                    "name": "O que preciso fazer antes da minha primeira sessão?",
                    "acceptedAnswer": {"@type": "Answer", "text": "Evite exposição solar e produtos irritantes na região. Não use métodos que removam o pelo pela raiz e siga todas as orientações recebidas na avaliação."}
                }
            ]
        }
        </script>
        <script src="./assets/js/app.js" defer></script>
    </body>
</html>
