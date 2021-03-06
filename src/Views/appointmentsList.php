<?php
require_once("components/header/header.php");
?>

<main>
    <a id="f" href="?action=create">
        <button type="button" class="btn-float">
            <span class="material-symbols-outlined">add</span>
        </button>
        <button type="button" class="btn-expanded">
            <span class="btn-expanded-text">CREAR CITA</span>
        </button>
    </a>

    <div class="card-list">
        <?php
        foreach ($data["appointments"] as $appointment) {
            $id = $appointment->getId();
            $name = $appointment->getName();
            $phone = $appointment->getPhone();
            $email = $appointment->getEmail();
            $dateTime = $appointment->getDateTime();
            $userQuery = $appointment->getUserQuery();

            require("components/card/card.php");
        };
        require("components/modal/modal.html");
        ?>
    </div>
</main>

    <?php
    require_once("components/footer/footer.php");
    ?>
    
    <script>
        const appointmenteId = document.addEventListener("click", (event) => {
            console.log(event.target);
            if (event.target.type === "button") {
                const idForDelete = event.target.value
                document.getElementById("appointment").innerHTML = 
                `<a href="?action=delete&id=${idForDelete}">
                <button type="button" class="main-button">Eliminar</button>
                </a>`;
                
            }
        })
    </script>
</body>

</html>
