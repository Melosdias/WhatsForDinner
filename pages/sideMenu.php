<nav>
    <div class="sidenav" id="sidenav">
        <a href="javascript:void(0);" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="allReceipes.php">All recipes</a>
        <a href="addIngredient.php">Add ingredient</a>
        <a href="addReceipe.php">Add recipe</a>
        <a href="favReceipe.php">Favorite recipes</a>
    </div>
    <span onclick="openNav()" id="burger">&#9776;</span>
    <h1 onclick="mainPage()">What do we eat tonight?</h1>
    <script>
        function openNav() {
            document.getElementById("sidenav").style.width = "350px";
            document.getElementById("sidenav").style.borderRight = "2px solid #592B1B";
        }
        function closeNav() {
            document.getElementById("sidenav").style.width = "0";
            document.getElementById("sidenav").style.borderRight = "2px hidden #592B1B";
        }
        function mainPage() {
            location.replace("mainPage.php");
        }
    </script>
</nav>