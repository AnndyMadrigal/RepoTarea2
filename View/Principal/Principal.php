<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutInterno.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/RepoTarea2/View/LayoutExterno.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
ShowCSS();
?>

<body>

    <!-- Header Start -->
    <?php 
    ShowHeader();
    ?>
    <!-- Header End -->


    <!-- Hero Start -->
    <div class="container-fluid p-5 mb-5 bg-dark text-secondary">
        <div class="row g-5 py-5">
            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-1 text-secondary text-center mb-0">Bienvenidos a Car's CR!</h1>
            </div>
            <div class="col-lg-12 wow fadeIn">
                <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis lacus ornare euismod tristique. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada aliquam quam eget efficitur. Quisque rhoncus accumsan tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque quis convallis libero, quis iaculis metus. Aenean interdum quam congue, sollicitudin nibh id, tristique ante. Nulla id quam nisi. In at fermentum nunc. Nunc malesuada, leo quis posuere pellentesque, massa magna maximus risus, et laoreet quam massa sit amet ante. Mauris nec ullamcorper tortor. Etiam eget lorem convallis, tincidunt nibh sed, pellentesque nibh.

                    Vestibulum tristique lacus orci, quis malesuada lacus imperdiet a. Aenean lacinia nisl sed molestie molestie. Sed gravida eros ac erat elementum, eu pulvinar odio ultrices. Ut in leo quis leo molestie rhoncus nec vitae felis. Mauris non semper enim, eget auctor purus. Nullam justo augue, mattis feugiat interdum in, dignissim nec risus. Morbi blandit tincidunt fringilla. Nullam fermentum, enim quis aliquam rutrum, dui velit tincidunt tortor, vel ultrices purus metus eu tortor. Aenean fermentum dolor eu lacus condimentum ultrices. Nulla pharetra euismod nulla vel ornare. Proin euismod tempor nulla eu aliquam. Sed ullamcorper, purus non pharetra ultrices, odio ex tristique tellus, accumsan gravida massa est ac leo.
                </p>
            </div>
        </div>
    </div>
    <!-- Hero End -->



    <!-- Footer Start -->
    <?php 
    ShowFooter();
    ?>
    <!-- Footer End -->

    <?php
    ShowJS();
    ?>

</body>

</html>