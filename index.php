<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-full">
        <?php require_once "./nav.php"; ?>
        <?php require_once "./hero.php"; ?>
    </div>
    <div class="md:container md:mx-auto">
        <div class="py-20">
            <?php require_once "./content1-service.php"; ?>
        </div>
        <div class="py-20">
            <?php require_once "./content2-benefits.php"; ?>
        </div>
        <div class="py-20">
            <?php require_once "./content3-projects.php"; ?>
        </div>
        <div class="py-20">
            <?php require_once "./content4-reviews.php"; ?>
        </div>
        <div class="py-20">
            <?php require_once "./content5-contact.php"; ?>
        </div>
    </div>
    <?php require_once "./footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>