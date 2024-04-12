<!-- footer.php -->
<script>
        document.addEventListener('DOMContentLoaded', function () {
            var hamburgerMenu = document.querySelector('.hamburger-menu');
            var navList = document.querySelector('.nav-list');

            hamburgerMenu.addEventListener('click', function () {
                navList.classList.toggle('active');
            });
        });
    </script>



</body>
</html>
